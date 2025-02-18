const { createApp } = Vue;

createApp({
    data() {
        return {
            pokemonNames: [],
            pokemonMachine: [],
            jugadaPlayer: null,
            jugadaMachine: null,
            statsPlayer: null,
            statsMachine: null
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
                stats: pokemon.stats.map(stat => stat.base_stat),
                selected: false
            }));

            this.pokemonMachine = resultsMachine.map(pokemon => ({
                name: pokemon.name,
                image: pokemon.sprites.front_default,
                stats: pokemon.stats.map(stat => stat.base_stat)
            }));
        },

        seleccionarCarta(pokemon) {
            // Reiniciar selección
            this.pokemonNames.forEach(p => p.selected = false);
        
            // Asignar selección a la carta clickeada
            this.jugadaPlayer = pokemon;
            this.statsPlayer = {
                hp: pokemon.stats[0],
                attack: pokemon.stats[4],
                speed: pokemon.stats[5]
            };
            pokemon.selected = true;
        
            // Esperar un momento antes de seleccionar la carta de la máquina
            setTimeout(() => {
                this.seleccionarCartaMaquina();
            }, 1500);
        },
        

        seleccionarCartaMaquina() {
            if (this.pokemonMachine.length > 0) {
                const randomIndex = Math.floor(Math.random() * this.pokemonMachine.length);
                this.jugadaMachine = this.pokemonMachine[randomIndex];
                this.statsMachine = {
                    hp: this.jugadaMachine.stats[0],
                    attack: this.jugadaMachine.stats[4],
                    speed: this.jugadaMachine.stats[5]
                };
            }
        }
    },
    mounted() {
        this.fetchRandomPokemon();
    }
}).mount("#app");