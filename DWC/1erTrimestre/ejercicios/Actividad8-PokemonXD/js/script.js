  const { createApp } = Vue;

  createApp({
    data() {
      return {
        // Listas de Pokémon
        pokemonNames: [],
        pokemonMachine: [],
        // Pokémon en combate
        jugadaPlayer: null,
        jugadaMachine: null,
        // Estadísticas de combate
        statsPlayer: null,
        statsMachine: null,
        // Ataques del Pokémon del jugador
        playerMoves: [],
        // HP máximo y actual en combate
        playerMaxHP: 0,
        machineMaxHP: 0,
        playerCurrentHP: 0,
        machineCurrentHP: 0,
        gameOver: false,
        mensajeDerrota: "",
        mensajeFinal: "",
        // Propiedades para el modal
        modalVisible: false,
        modalMessage: "",
        modalCallback: null,
        modalButtonText: "Continuar"
      };
    },
    computed: {
      // Calcula el ancho de la barra de salud en porcentaje para el jugador
      playerHealthPercentage() {
        return this.playerMaxHP
          ? (this.playerCurrentHP / this.playerMaxHP * 100) + '%'
          : '0%';
      },
      // Calcula el ancho de la barra de salud en porcentaje para la máquina
      machineHealthPercentage() {
        return this.machineMaxHP
          ? (this.machineCurrentHP / this.machineMaxHP * 100) + '%'
          : '0%';
      }
    },
    methods: {
      // Muestra el modal con un mensaje, callback y texto personalizado en el botón
      showModal(message, callback = null, buttonText = "Continuar") {
        this.modalMessage = message;
        this.modalCallback = callback;
        this.modalButtonText = buttonText;
        this.modalVisible = true;
      },
      // Cierra el modal y ejecuta el callback (si lo hay)
      closeModal() {
        this.modalVisible = false;
        if (this.modalCallback) {
          this.modalCallback();
          this.modalCallback = null;
        }
      },
      async fetchRandomPokemon() {
        const promisesPlayer = [];
        const promisesMachine = [];

        for (let i = 0; i < 5; i++) {
          const randomIdPlayer = Math.floor(Math.random() * 151) + 1;
          const randomIdMachine = Math.floor(Math.random() * 151) + 1;
          const urlPlayer = `https://pokeapi.co/api/v2/pokemon/${randomIdPlayer}/`;
          const urlMachine = `https://pokeapi.co/api/v2/pokemon/${randomIdMachine}/`;

          promisesPlayer.push(fetch(urlPlayer).then(res => res.json()));
          promisesMachine.push(fetch(urlMachine).then(res => res.json()));
        }

        const resultsPlayer = await Promise.all(promisesPlayer);
        const resultsMachine = await Promise.all(promisesMachine);

        // Inicializa las cartas del jugador
        this.pokemonNames = resultsPlayer.map(pokemon => ({
          name: pokemon.name,
          image: pokemon.sprites.front_default,
          stats: pokemon.stats.map(stat => stat.base_stat),
          moves: pokemon.moves.map(move => move.move.name),
          selected: false,
          used: false,
          defeated: false,
          currentHP: pokemon.stats[0].base_stat
        }));
        
        // Inicializa las cartas de la máquina
        this.pokemonMachine = resultsMachine.map(pokemon => ({
          name: pokemon.name,
          image: pokemon.sprites.front_default,
          stats: pokemon.stats.map(stat => stat.base_stat),
          used: false,
          defeated: false,
          currentHP: pokemon.stats[0].base_stat
        }));
      },

      // Retorna 'count' movimientos aleatorios del array "moves"
      getRandomMoves(moves, count = 4) {
        const movesCopy = [...moves];
        const randomMoves = [];
        for (let i = 0; i < count && movesCopy.length; i++) {
          const randomIndex = Math.floor(Math.random() * movesCopy.length);
          randomMoves.push(movesCopy[randomIndex]);
          movesCopy.splice(randomIndex, 1);
        }
        return randomMoves;
      },

      // Selección o cambio del Pokémon del jugador
      seleccionarCarta(pokemon) {
        if (pokemon.defeated) return;

        if (this.jugadaPlayer && this.jugadaPlayer.name !== pokemon.name) {
          this.jugadaPlayer.selected = false;
        }

        this.jugadaPlayer = pokemon;
        this.statsPlayer = {
          hp: pokemon.stats[0],
          attack: pokemon.stats[1],
          speed: pokemon.stats[5]
        };
        this.playerMaxHP = this.statsPlayer.hp;
        this.playerCurrentHP = pokemon.currentHP;
        pokemon.selected = true;
        pokemon.used = true;
        this.playerMoves = this.getRandomMoves(pokemon.moves, 4);

        if (!this.jugadaMachine) {
          setTimeout(() => {
            this.seleccionarCartaMaquina();
          }, 1500);
        } else if (this.jugadaPlayer.name !== pokemon.name) {
          setTimeout(() => {
            this.machineAttack();
          }, 1000);
        }
      },

      // Selección del Pokémon de la máquina (se elige entre los que aún no han sido derrotados)
      seleccionarCartaMaquina() {
        const availableMachine = this.pokemonMachine.filter(p => !p.defeated);
        if (availableMachine.length > 0) {
          const randomIndex = Math.floor(Math.random() * availableMachine.length);
          this.jugadaMachine = availableMachine[randomIndex];
          this.statsMachine = {
            hp: this.jugadaMachine.stats[0],
            attack: this.jugadaMachine.stats[1],
            speed: this.jugadaMachine.stats[5]
          };
          this.machineMaxHP = this.statsMachine.hp;
          this.machineCurrentHP = this.jugadaMachine.currentHP;
          this.jugadaMachine.used = true;
        }
      },

      // Ataque del jugador
      attack(move) {
        if (this.gameOver) return;
        const playerDamage = Math.floor(this.statsPlayer.attack / 2) + Math.floor(Math.random() * 5);
        this.machineCurrentHP = Math.max(0, this.machineCurrentHP - playerDamage);
        console.log(`Ataque "${move}": causaste ${playerDamage} de daño a ${this.jugadaMachine.name}.`);

        // Si el Pokémon de la máquina es derrotado...
        if (this.machineCurrentHP <= 0) {
          this.showModal(
            `¡El ${this.jugadaMachine.name} de la máquina ha sido derrotado!`,
            () => {
              this.jugadaMachine.defeated = true;
              // Se buscan los Pokémon disponibles (no derrotados)
              const availableMachine = this.pokemonMachine.filter(p => !p.defeated);
              if (availableMachine.length === 0) {
                this.gameOver = true;
                this.showModal("¡Has ganado la partida!");
                return;
              } else {
                setTimeout(() => {
                  this.seleccionarCartaMaquina();
                }, 1500);
              }
            },
            "Eliminar"  // Texto del botón
          );
          return;
        }

        // La máquina contraataca tras un breve retardo
        setTimeout(() => {
          this.machineAttack();
        }, 1000);
      },

      // Ataque de la máquina
      machineAttack() {
        if (this.gameOver) return;
        const machineDamage = Math.floor(this.statsMachine.attack / 2) + Math.floor(Math.random() * 5);
        this.playerCurrentHP = Math.max(0, this.playerCurrentHP - machineDamage);
        console.log(`La máquina ataca y causa ${machineDamage} de daño a ${this.jugadaPlayer.name}.`);

        // Si el Pokémon del jugador es derrotado...
        if (this.playerCurrentHP <= 0) {
          this.showModal(
            `¡Tu ${this.jugadaPlayer.name} ha sido derrotado!`,
            () => {
              this.jugadaPlayer.defeated = true;
              this.jugadaPlayer.selected = false;
              this.jugadaPlayer = null;
              this.statsPlayer = null;
              this.playerMoves = [];
              const available = this.pokemonNames.filter(p => !p.defeated);
              if (available.length === 0) {
                this.gameOver = true;
                this.showModal("¡Has perdido la partida!");
                return;
              }
            },
            "Eliminar"
          );
          return;
        }
      }
    },
    
    mounted() {
      this.fetchRandomPokemon();
    }
  }).mount("#app");
