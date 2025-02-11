const { createApp } = Vue;

createApp({
    data() {
        return {
            pokemonNames: [],   // Pokémon del jugador
            pokemonMachine: [], // Pokémon de la máquina
            jugadaPlayer: null, // Pokémon seleccionado por el jugador
            jugadaMachine: null // Pokémon seleccionado por la máquina
        };
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

            this.pokemonNames = resultsPlayer.map(pokemon => ({
                name: pokemon.name,
                image: pokemon.sprites.front_default,
                selected: false
            }));

            this.pokemonMachine = resultsMachine.map(pokemon => ({
                name: pokemon.name,
                image: pokemon.sprites.front_default
            }));
        },

        seleccionarCarta(pokemon) {
            this.pokemonNames.forEach(p => p.selected = false);
            this.jugadaPlayer = pokemon;
            pokemon.selected = true;

            this.$nextTick(() => {
                document.querySelectorAll("#cartaJugador").forEach((carta, index) => {
                    carta.classList.toggle("carta-seleccionada", this.pokemonNames[index].selected);
                });
            });

            setTimeout(() => {
                this.seleccionarCartaMaquina();
            }, 1500);
        },

        seleccionarCartaMaquina() {
            if (this.pokemonMachine.length > 0) {
                const randomIndex = Math.floor(Math.random() * this.pokemonMachine.length);
                this.jugadaMachine = this.pokemonMachine[randomIndex];
            }
        }
    },
    mounted() {
        this.fetchRandomPokemon();
    }
}).mount("#app");
