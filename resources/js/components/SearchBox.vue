<template>
    <div class="search_box d-flex flex-column justify-content-center align-items-start">
        <h4>Cerca un ristorante per nome:</h4>
        <input v-model="searchedRestaurant" class="w-100 form-control form-control-sm" type="search" placeholder="Inserisci qui il ristorante" @keyup.enter="searchRestaurant">
        <router-link @click="searchRestaurant" :to="{name:'restaurants', params:{slug:searchRestaurant()}}" class="green_button mt-3 fw-bold">Cerca</router-link>
    </div>
</template>

<script>
export default {
    name: 'SearchBox',
    props: {
        
        restaurants: Array,
        tipologies: Array

    },
    data: function(){
        return {
            searchedRestaurant: '',
            slugToSearch: '',
            myValue: null
        };
    },
    methods: {

        getTipology(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/tipologies/')
            .then((response) => {
                // console.log(response);
                
                    this.tipologies = response.data.results;
                
            });
          },
        // Funzione ricerca ristorante (filtro)
        searchRestaurant: function(){

            // forEach sull'array dei ristoranti
            this.restaurants.forEach((thisRestaurant) => {

                // Comparazione dei nomi entrambi in trim e toLowerCase
                if( this.searchedRestaurant.toLowerCase().trim() === (thisRestaurant.nome_attivita.toLowerCase().trim()) /* || thisRestaurant.slug */ ){
                    this.slugToSearch = thisRestaurant.slug;
                    /* this.myValue = 1; */
                    /* return this.myValue; */

                }
            //    else{

            //        this.tipologies.forEach((thisTipologies) => {

             //           if( this.searchedRestaurant.toLowerCase().trim() === (thisTipologies.nome.toLowerCase().trim()) /* || thisTipologies.slug */ ){
            //                this.slugToSearch = thisTipologies.slug;
             //               this.myValue = 2;
                            /* return this.myValue; */
                            

             //           }

              //      });

             //   }

                return this.slugToSearch;

            });
            //  console.log(this.searchedRestaurant)

        }
    },
    created: function(){
        this.getTipology();
    }
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