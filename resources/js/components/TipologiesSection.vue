<template>
    <section class="tipologies_section">
        <div class="container d-flex flex-wrap">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="title_container">
                        <h2 class="mt-5 mb-4">Cerchi qualcos'altro?</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="tipos_wrapper d-flex flex-wrap">
                        <a href="#" class="tipology_link fw-bold" v-for="typo, index in typos" :key="index">{{typo.nome}}</a>
                    </div>
                </div>
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
@import '../../sass/variables.scss';

.tipologies_section{
    .container{
        // display: flex;
        // flex-wrap: wrap;
        // flex-direction: row;
        // justify-content: space-around;
        .tipos_wrapper{
            gap: 1rem;
            margin-right: 20px;
            margin-bottom: 20px;

            .tipology_link{
                color: $secondary_color;
            }  
        }
    }
}
</style>