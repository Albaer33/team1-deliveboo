<template>
    <div class="search_box d-flex flex-column justify-content-center align-items-start">
        <h4>Cerca un ristorante per nome:</h4>
        <input v-model="searchedRestaurant" class="w-100 form-control form-control-sm" type="search" placeholder="Inserisci qui il ristorante">
        <router-link @click="searchRestaurant" :to="{name:'restaurants', params:{slug:searchRestaurant()}}" class="green_button mt-3 fw-bold">Cerca</router-link>
    </div>
</template>

<script>
export default {
    name: 'SearchBox',

    props: {
        restaurants: Array,
    },

    data: function(){
        return {
            searchedRestaurant: '',
            slugToSearch: '',
        };
    },

    methods: {
        // Funzione ricerca ristorante (filtro)
        searchRestaurant: function(){
            // forEach sull'array dei ristoranti
            this.restaurants.forEach((thisRestaurant) => {
                // Comparazione stringhe
                if(thisRestaurant.nome_attivita.toLowerCase().trim().includes(this.searchedRestaurant.toLowerCase().trim()))   {
                    this.slugToSearch = thisRestaurant.slug;
                }
            });

            return this.slugToSearch;
        }
    },
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .search_box{
        background-color: white;
        width: 100%;
        max-width: 500px;
        padding: 30px 20px;
        border-radius: 5px;
        box-shadow: 0px 1px 4px rgb(0 0 0 / 8%);
        height: 200px;
        z-index: 2000;
    }
    .green_button{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        border-radius: 5px;
        background-color: $primary_color;
        color: white;
        text-decoration: none;
    }
</style>