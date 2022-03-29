<template>
    <section class="restaurant_content">

        <Loader v-if="!apiLoaded" />

        <div class="container" v-else>
            
            <div class="row d-flex container_style_ms">
                <div class="col img_risto">
                    <img :src="require(`/storage/app/public/${restaurant.immagine}`)" class="rounded mx-auto" :alt="restaurant.nome_attivita" v-if="restaurant.immagine !== null">
                    
                </div>
                <div  class="col d-flex">
                    <h1>{{ restaurant.nome_attivita }}</h1>

                </div>
            </div>

            <div  v-for="(dish, index) in dishes" :key="index" >
                
                <div v-if="dish.visibile === 1" class="p-5 card_style_ms">
                    <div class="row ">
                        <div class="d-flex flex-column col-9">
                            <h5 class="card-title">{{ dish['nome'] }}</h5>
                            <p class="card-text">{{ dish['descrizione'] }}</p>
                            <p class="card-text">{{ dish['ingredienti'] }}</p>
                            <div>{{ dish['prezzo'] }}</div>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="col-3 d-flex justify-content-center align-items-center" v-if="dish.immagine !== null">
                            <img :src="require(`/storage/app/public/${dish.immagine}`)" :alt="restaurant.nome_attivita">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import Loader from '../components/Loader.vue';

export default {
    name: 'Restaurant',
    components: {
        Loader
    },
    data: function(){
        return {
            restaurant : [],
            dishes: [],
            apiLoaded: false
        }
    },
          methods: {

         getRestaurant(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/restaurants/' + this.$route.params.slug)
            .then((response) => {
                console.log(response);
                
                this.restaurant = response.data.results;
                
                this.dishes = response.data.results.dishes;

                this.apiLoaded = true;
                
            });
          }
    },
    created: function(){
        this.getRestaurant();
        window.scrollTo(0, 0);
    }

}
</script>

<style lang="scss" scoped>

.container{

    .container_style_ms{

        padding: 30px;
        box-shadow: -11px 8px 20px 3px rgb(0 0 0 / 8%);
        margin-top: 20px;
        margin-bottom: 50px;

    }

    .card_style_ms{

        border-radius: 10px;

    }

    .card_style_ms:hover{

        transition: .5s;
        box-shadow: -11px 8px 20px 3px rgb(0 0 0 / 8%);

    }

    .row{
        .img_risto{
            img{
                width:300px;
            }

        }
    }
}

</style>