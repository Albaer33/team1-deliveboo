<template>
    <section class="home_page h-100">
        <MainHome v-if="apiLoaded" :restaurants_data="restaurants" :filterByUser="restaurantFilter" :overlay_conditions="overlay" />
        <Loader v-else />
    </section>
</template>

<script>
import MainHome from '../components/MainHome.vue';
import Loader from '../components/Loader.vue';

export default {
    name: 'Home',
    components: {
        MainHome,
        Loader
    },
    props: {
        restaurantFilter: Object
    },
    data: function(){
        return {
            restaurants: null,
            notFoundMessage: 'Nessun ristorante trovato',
            apiLoaded: false,
            overlay: {
                status: false,
                className: '',
                clock: null
            }
        };
    },
    methods: {
        hideOverlay: function(){
            this.overlay.className = 'overlay_leaving';
            this.overlay.clock = setTimeout(() => {
                this.overlay.status = false;
            }, 300);
        },
        getRestaurants(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/restaurants/')
            .then((response) => {
                // console.log(response);
                if(response.data.success) {
                    this.restaurants = response.data.results;
                } else {
                    this.restaurants = this.notFoundMessage;
                }
                this.apiLoaded = true;
            });
        }
    },
    created: function(){
        window.addEventListener('wheel', this.hideOverlay);
        this.getRestaurants();
    } 
}
</script>