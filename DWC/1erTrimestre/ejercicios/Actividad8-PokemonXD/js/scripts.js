const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            pokemonNames: [] // Array para almacenar los nombres de los Pokémon
        };
    },
    methods: {
        async fetchRandomPokemon() {
            const promises = [];
            for (let i = 0; i < 5; i++) {
                const randomId = Math.floor(Math.random() * 151) + 1;
                const url = `https://pokeapi.co/api/v2/pokemon/${randomId}/`;
                promises.push(fetch(url).then(res => res.json()));
            }
            const pokemonData = await Promise.all(promises);
            this.pokemonNames = pokemonData.map(pokemon => pokemon.name);
        }
    },
    mounted() {
        this.fetchRandomPokemon();
    }
});

app.mount("#app");
