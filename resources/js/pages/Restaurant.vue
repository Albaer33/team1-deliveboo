<template>
    <section>
        <div class="container">
            
            <div>

               <h1>{{ restaurant.nome_attivita }}</h1>


               <div v-for="(dish, index) in dishes" :key="index">

                   {{ dish['immagine'] }}
                   {{ dish['nome'] }}
                   {{ dish['prezzo'] }}
                   {{ dish['ingredienti'] }}

                   {{ dish['descrizione'] }}

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