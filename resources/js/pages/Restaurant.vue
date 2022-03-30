<template>
    <section class="restaurant_content">

        <Loader v-if="!apiLoaded" />

        <div class="container" v-else>
            
            <div class="row d-flex container_style_ms">
                <div v-if="restaurant.immagine.includes('http')" class="col img_risto">
                    <img :src="restaurant.immagine" class="rounded mx-auto" alt="restaurant.nome_attivita">
                </div>
                <div v-else class="col img_risto">
                    <img :src="require(`/storage/app/public/${restaurant.immagine}`)" class="rounded mx-auto" alt="restaurant.nome_attivita">
                </div>
                <div  class="col d-flex">
                    <h1>{{ restaurant.nome_attivita }}</h1>

                </div>
            </div>

            <div  v-for="(dish, index) in dishes" :key="index" >
                
                <div v-if="dish.visibile === 1" class="p-5 card_style_ms overflow-hidden position-relative">
                    
                    <div @click="addToCart(dish)" class="add_buttons_wrapper position-absolute d-flex justify-content-center align-items-center">
                        <h4 class="mb-0">{{addButtonText}}</h4>
                    </div>

                    <div @click="removeFromCart(dish)" class="remove_buttons_wrapper position-absolute d-flex justify-content-center align-items-center">
                        <h4 class="mb-0">{{removeButtonText}}</h4>
                    </div>

                    <div class="row ">
                        <div class="d-flex flex-column justify-content-center col-9">
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
            apiLoaded: false,
            orderAdded: false,
            addButtonText: '+',
            removeButtonText: '-'
        }
    },
        methods: {

            getRestaurant(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/restaurants/' + this.$route.params.slug)
            .then((response) => {
                /* console.log(response); */
                
                this.restaurant = response.data.results;
                
                this.dishes = response.data.results.dishes;

                this.apiLoaded = true;
                

            });
          },
        // Funzione emit per aggiungere al carrello
        addToCart: function(order){
            this.$emit('sendOrder', {orderToSend: order, type: 'add'});
        },
        // rimozione di un elemento dal carrello
        removeFromCart: function (order) {
            this.$emit('removeOneDish',  {orderToSend: order, type: 'remove'});
        }
    },
    created: function(){
        this.getRestaurant();
        window.scrollTo(0, 0);
    }

}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

.container{

    .container_style_ms{

        padding: 30px;
        box-shadow: -11px 8px 20px 3px rgb(0 0 0 / 8%);
        margin-top: 20px;
        margin-bottom: 50px;
    }

    .card_style_ms{

        border-radius: 10px;
        border: 3px solid $primary_color;
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

    .add_buttons_wrapper{
        width: 200px;
        height: 45px;
        top: -4px;
        left: -7px;
        padding: 5px;
        color: $primary_color;
        background-color: white;
        border: 3px solid $primary_color;
        border-top-color: transparent;
        border-left-color: transparent;
        border-bottom-right-radius: 5px;
        cursor: pointer;
    }
    .remove_buttons_wrapper{
        width: 100px;
        height: 45px;
        top: -4px;
        left: 200px;
        padding: 5px;
        color: rgba(255, 0, 0, 0.8);
        background-color: white;
        border: 3px solid $primary_color;
        border-top-color: transparent;
        border-radius: 5px;
        cursor: pointer;
    }
}

</style>