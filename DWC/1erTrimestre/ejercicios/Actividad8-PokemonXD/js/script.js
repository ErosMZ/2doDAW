const { createApp } = Vue;

createApp({
  data() {
    return {
      // Listas de Pokémon
      pokemonNames: [],      // Cartas del jugador
      pokemonMachine: [],    // Cartas de la máquina
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
      mensajeFinal: ""
    };
  },
  computed: {
    // Ancho de la barra de salud en porcentaje para el jugador
    playerHealthPercentage() {
      return this.playerMaxHP
        ? (this.playerCurrentHP / this.playerMaxHP * 100) + '%'
        : '0%';
    },
    // Ancho de la barra de salud en porcentaje para la máquina
    machineHealthPercentage() {
      return this.machineMaxHP
        ? (this.machineCurrentHP / this.machineMaxHP * 100) + '%'
        : '0%';
    }
  },
  methods: {
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

      // Inicializa las cartas del jugador, agregando las propiedades "selected", "used" y "defeated"
      this.pokemonNames = resultsPlayer.map(pokemon => ({
        name: pokemon.name,
        image: pokemon.sprites.front_default,
        stats: pokemon.stats.map(stat => stat.base_stat),
        moves: pokemon.moves.map(move => move.move.name),
        selected: false,
        used: false,     
        defeated: false,  
        currentHP: pokemon.stats[0].base_stat  // Se inicializa con el HP base
      }));      
      
      // Inicializa las cartas de la máquina (se puede agregar "used" o "defeated" si se desea)
      this.pokemonMachine = resultsMachine.map(pokemon => ({
        name: pokemon.name,
        image: pokemon.sprites.front_default,
        stats: pokemon.stats.map(stat => stat.base_stat),
        used: false,
        defeated: false,
        currentHP: pokemon.stats[0].base_stat  // Se inicializa con el HP base
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
      // Si la carta está derrotada, no se permite seleccionarla
      if (pokemon.defeated) return;

      // Si ya hay un Pokémon activo y se hace clic en otra carta (válida para cambiar)
      if (this.jugadaPlayer && this.jugadaPlayer.name !== pokemon.name) {
        // El cambio cuenta como un turno, por lo que la máquina contraataca inmediatamente
        // Primero, se quita la selección del Pokémon anterior
        this.jugadaPlayer.selected = false;
      }

      // Se cambia al nuevo Pokémon y se inicializan sus estadísticas
      this.jugadaPlayer = pokemon;
      this.statsPlayer = {
        hp: pokemon.stats[0],
        attack: pokemon.stats[1],
        speed: pokemon.stats[5]
      };
      this.playerMaxHP = this.statsPlayer.hp;
      this.playerCurrentHP = pokemon.currentHP; // Mantener el HP actual del Pokémon
      pokemon.selected = true;
      pokemon.used = true;
      this.playerMoves = this.getRandomMoves(pokemon.moves, 4);

      // Si la máquina aún no tiene Pokémon en combate, se selecciona uno
      if (!this.jugadaMachine) {
        setTimeout(() => {
          this.seleccionarCartaMaquina();
        }, 1500);
      } else if (this.jugadaPlayer.name !== pokemon.name) {
        // La máquina ataca inmediatamente tras el cambio
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
        this.machineCurrentHP = this.jugadaMachine.currentHP; // Mantener el HP actual del Pokémon
        // Marcar la carta de la máquina como usada
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
        alert(`¡El ${this.jugadaMachine.name} de la máquina ha sido derrotado!`);
        this.jugadaMachine.defeated = true;
        // Se busca otro Pokémon en la máquina
        const availableMachine = this.pokemonMachine.filter(p => !p.used && !p.defeated);
        if (availableMachine.length === 0) {
          this.gameOver = true;
          alert("¡Has ganado la partida!");
          return;
        } else {
          setTimeout(() => {
            this.seleccionarCartaMaquina();
          }, 1500);
        }
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
        alert(`¡Tu ${this.jugadaPlayer.name} ha sido derrotado!`);
        this.jugadaPlayer.defeated = true;
        this.jugadaPlayer.selected = false;
        // Permitir cambiar de Pokémon
        this.jugadaPlayer = null;
        this.statsPlayer = null;
        this.playerMoves = [];

        const available = this.pokemonNames.filter(p => !p.used && !p.defeated);
        if (available.length === 0) {
          this.gameOver = true;
          alert("¡Has perdido la partida!");
          return;
        }
      }
    }
  },
  
  mounted() {
    this.fetchRandomPokemon();
  }
}).mount("#app");
