<template>
    <section class="tipologies_section">

        <div class="container mb-30">

            <h2>Scegli per tipologie di ristorante</h2>

        </div>

        <div class="container d-flex flex-wrap mt-30">

            <div class="tipos_wrapper" v-for="tipology, index in tipologies" :key="index">

                <router-link :to="{name:'tipologies', params:{slug:tipology.slug}}" type="button" class="btn btn-light fw-bold">{{tipology.nome}}</router-link>

            </div>

        </div>

    </section>
</template>

<script>
export default {
    name: 'TipologiesSection',  


    data: function(){
        return {
             tipologies : []
        }
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
          }
    },
    created: function(){
        this.getTipology();
    }
}

</script>

<style lang="scss" scoped>
.tipologies_section{

    margin: 30px 0;

    .mt-30{

        margin-top: 30px;

    }

    .mn-30{

        margin-bottom: 30px;

    }

    .container{

        .tipos_wrapper{

            margin-right: 20px;
            margin-bottom: 20px;

            .button{
                    
            }  

        }
    }
}
</style>