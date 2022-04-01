<template>
    <section class="filtered_restaurant py-5" v-if="apiLoaded"> 
        <h2 class="mb-5 text-center">La tua ricerca ha prodotto questi risultati:</h2>
        <div class="container">
            <div class="row row-cols-1 g-3">
                <div class="col" v-for="restaurant in filteredRestaurants" :key="restaurant.id">
                    <div class="filtered_restaurant_wrapper w-100 d-flex justify-content-between align-items-center">
                        <img class="w-50 h_100p" :src="restaurant.immagine" :alt="'Immagine di ' + restaurant.nome_attivita" v-if="restaurant.immagine.includes('https')">
                        <img class="w-50 h_100p" :src="require(`/storage/app/public/${restaurant.immagine}`)" :alt="'Immagine di ' + restaurant.nome_attivita" v-else>
                        <h3 class="mb-0 text-uppercase text-end">{{restaurant.nome_attivita}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Loader v-else />
</template>
<script>
import Loader from '../components/Loader.vue';

export default {
    name: 'FilteredRestaurant',
    components: {
        Loader
    },
    props: {
        restaurantFilter: Object
    },
    data: function(){

        return{
            apiLoaded: false,
            allRestaurants: [],
            filteredRestaurants: []
        };

    },
    methods:{
        getFilteredRestaurant: function(){

            // Prendo tutti i ristoranti
            axios.get('http://127.0.0.1:8000/api/restaurants/'
            ).then((response) => {
                this.allRestaurants = response.data.results;

                // Filtro sul nome
                this.allRestaurants.forEach((restaurant) => {
                    if(restaurant.nome_attivita.toLowerCase().includes(this.restaurantFilter.word.toLowerCase().trim())){
                    this.filteredRestaurants.push(restaurant);
                    }
                });

                this.apiLoaded = true;
            });
        
        }
    },
    created: function(){
        this.getFilteredRestaurant();
    }
    
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .filtered_restaurant_wrapper{
        border: 5px solid $primary_color;
        border-radius: 20px;
        overflow: hidden;
        padding-right: 5px;
    }
</style>