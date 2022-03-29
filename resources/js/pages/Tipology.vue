<template>
    <section>
        <div class="container">

        <div v-for="(restaurant, index) in restaurants" :key="index">

            <div class="row d-flex container_style_ms">
                <div class="col img_risto">
                    <img :src="require(`/storage/app/public/${restaurant.immagine}`)" class="rounded mx-auto" alt="restaurant.nome_attivita" v-if="restaurant.immagine !== null">
                    
                </div>
                <div  class="col d-flex">
                    <h1>{{ restaurant.nome_attivita }}</h1>

                </div>
            </div>    

        </div>            

        </div>
    </section>
</template>
<script>
export default {
    name: 'Tipology',
    data: function(){
        return {
             typos : []
        }
    },
          methods: {

         getTipology(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/tipologies/'+this.$route.params.slug)
            .then((response) => {
                // console.log(response);
                
                    this.typos = response.data.results;
                
            });
          }
    },
    created: function(){
        this.getTipology();
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