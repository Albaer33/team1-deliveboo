<template>
    <section class="tipologies_section">

        <div class="container">

            <h2>Cerchi qualcos'altro?</h2>

        </div>

        <div class="container d-flex flex-wrap">

            <div class="tipos_wrapper" v-for="typo, index in typos" :key="index">

                <router-link to="" type="button" class="btn btn-light fw-bold">{{typo.nome}}</router-link>

            </div>

        </div>

    </section>
</template>

<script>
export default {
    name: 'TipologiesSection',  


    data: function(){
        return {
             typos : []
        }
    },
          methods: {

         getTipology(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/tipologies/')
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
.tipologies_section{

    margin: 30px 0;

    .mb-30{

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