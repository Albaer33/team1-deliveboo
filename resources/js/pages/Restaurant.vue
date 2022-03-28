<template>
    <section>
        <div class="container">
            
            <div class="row d-flex h-150 ">
                <div class="col sm-12 md-6 lg-4 xl-4 img_risto">
                    <img :src="require(`/storage/app/public/${restaurant.immagine}`) " class="rounded mx-auto" alt="restaurant.nome_attivita">
                    
                </div>
                <div  class="col sm-12 md-6 lg-4 xl-4 d-flex">
                    <h1>{{ restaurant.nome_attivita }}</h1>

                </div>
            </div>
            <div  v-for="(dish, index) in dishes" :key="index" >
                
                <div v-if="dish.visibile === 1" class="card p-5">
                    <div class="row ">
                        <div class="d-flex flex-column col sm-10">
                            <h5 class="card-title">{{ dish['nome'] }}</h5>
                            <p class="card-text">{{ dish['descrizione'] }}</p>
                            <p class="card-text">{{ dish['ingredienti'] }}</p>
                            <div>{{ dish['prezzo'] }}</div>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="col sm-2">
                            <img :src="require(`/storage/app/public/${dish.immagine}`)" alt="restaurant.nome_attivita">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: 'Restaurant',
    data: function(){
        return {
            restaurant : [],
            dishes: []
            
        }
    },
          methods: {

         getRestaurant(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/restaurants/'+this.$route.params.slug)
            .then((response) => {
                // console.log(response);
                
                this.restaurant = response.data.results;
                
                this.dishes = response.data.results.dishes;
                
            });
          }
    },
    created: function(){
        this.getRestaurant();
    }

}
</script>
<style lang="scss" scoped>
img{
    width:150px;
}
.container{
    .row{
        .img_risto{
            img{
                width:300px;
            }

        }
    }
}
</style>