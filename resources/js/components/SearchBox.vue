<template>
    <div class="search_box d-flex flex-column justify-content-center align-items-start">
        <h4>Cerca un ristorante per nome:</h4>
        <input v-model="restaurantFilter.word" class="w-100 form-control form-control-sm" type="search" placeholder="Inserisci qui il ristorante">
        <router-link :to="{name:'filtered-restaurant'}" class="green_button mt-3 fw-bold">Cerca</router-link>
    </div>
</template>

<script>
export default {
    name: 'SearchBox',

    props: {
        restaurants: Array,
        /* tipologies: Array */
        restaurantFilter: Object

    },

    data: function(){
        return {
            searchedRestaurant: '',
            // slugToSearch: '',
            /* myValue: null */
        };
    },

    methods: {
        // Funzione ricerca ristorante (filtro)
        // sendRestaurant: function(){

        //     this.searchedRestaurant = this.searchedRestaurant.toLowerCase().trim();
        //     this.$emit('filterString', this.searchedRestaurant);

            // forEach sull'array dei ristoranti
            // this.restaurants.forEach((thisRestaurant) => {

                // Comparazione dei nomi entrambi in trim e toLowerCase
                // if( this.searchedRestaurant.toLowerCase().trim() === (thisRestaurant.nome_attivita.toLowerCase().trim()) /* || thisRestaurant.slug */ ){
                //     this.slugToSearch = thisRestaurant.slug;
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


            // });
            //  console.log(this.searchedRestaurant)

            // return this.slugToSearch;


        // }
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