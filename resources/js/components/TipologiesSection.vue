<template>
    <section class="tipologies_section">
        <div class="container d-flex flex-wrap">
            <div class="tipos_wrapper " v-for="typo, index in typos" :key="index">
                <button  type="button" class="btn btn-light fw-bold">{{typo.nome}}</button>

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
    .container{
        // display: flex;
        // flex-wrap: wrap;
        // flex-direction: row;
        // justify-content: space-around;
        .tipos_wrapper{
            margin-right: 20px;
            margin-bottom: 20px;
                .button{
                    // font-weight: bold;
                }  
        }
    }
}
</style>