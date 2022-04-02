<template>

    <div class="container row justify-content-center">

        <!-- <div id="dropin" /> -->

    <!-- authorization="sandbox_csryh9w7_jcvymfwrf26rzh7c"  -->
        <div class="form_container col-sm-12 col-md-12 col-lg-6 col-xl-4 p-2">
            <button @click="PagamentoFinaleDelDestino()">

                <v-braintree 
                    authorization="sandbox_csryh9w7_jcvymfwrf26rzh7c" 
                    locale="it_IT" 
                    btnText="Paga"
                    @success="onSuccess" 
                    @error="onError" 
                    @load="onLoad"
                    
                />

            </button>
        </div>
        
        <div>

            <p v-if="error" class="text-red-500 mb-4">

                {{ error }}

            </p>

        </div>
        <div class="form_container col-sm-12 col-md-12 col-lg-6 col-xl-4 p-2">
            <form>
                        <div class="mb-3">
                            <label for="clientName" class="form-label">Inserisci Nome</label>
                                <input type="text" class="form-control" id="clientName">
                        </div>
                        <div class="mb-3">
                            <label for="clientPhone" class="form-label">N° telefono</label>
                                <input type="text" class="form-control" id="clientPhone">
                        </div>
                        <div class="mb-3">
                            <label for="clientEmail" class="form-label">Inserisci email</label>
                                <input type="email" class="form-control" id="clientEmail">
                        </div>
                        <div class="mb-3">
                            <label for="clientAdress" class="form-label">Inserisci indirizzo di consegna</label>
                                <input type="text" class="form-control" id="clientAdress">
                        </div>
                        <div class="mb-3">
                            <label for="clientDetails" class="form-label">Inserisci informazioni</label>
                                <input type="text" class="form-control" id="clientDetails">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                </form>
                            <button  class="btn btn-primary" @click="InviaDatiForm()">Submit</button>

        </div>
    </div>

</template>

<script>

import dropIn from "braintree-web-drop-in";

export default {
    name: 'Payment',
    data: function(){
        return {
            error: '',
            form:{
                clientName:"Gigi",
                clientPhone:"01121236",
                clientEmail:"gigi@mail",
                clientAdress:"via tal dei tali",
                clientDetails:"carnivoro",
                prezzoTot: 90,
            },
            price : {
            
                token : "sandbox_csryh9w7_jcvymfwrf26rzh7c",
                prezzoTot: this.amountShop()
                
            }
        };
    },
    props: {
        
        ordini: Array,

        authorization : {

            required: true,
            type: String

        }

    },
    methods: {
        
        amountShop: function(){

            let prezzoTot = 0;

            this.ordini.forEach(element => { 

                prezzoTot += parseFloat(element.priceTot);

            });

            return prezzoTot;

        },
        PagamentoFinaleDelDestino: function(){

            let axiosConfig = {
                headers: {
                    'Content-Type': 'application/json',
                    "Accept": "application/json",
                }
            };

            axios.post('http://127.0.0.1:8000/api/orders/make/payment', this.price, axiosConfig)
            .then((response) => {


            });

        }, 
        InviaDatiForm: function(){
            
            let axiosConfig = {
                headers: {
                    'Content-Type': 'application/json',
                    "Accept": "application/json",
                }
            };
                        axios.post('http://127.0.0.1:8000/api/orders/save', this.form, axiosConfig)
            .then((response) => {

                    console.log(response)
            });
        },
        onLoad: function(){

            this.$emit('loading')


        },
        
        onSuccess: function (payload) {
            let token = payload;
            
            this.$emit('onSuccess', token)

        },
        onError: function (error) {
            const message = error.message;
            if(message === 'No payment method is available') {

                this.error = 'Seleziona un metodo di Pagamento'

            }
            else{

                this.$emit('onError', message)

            }
        }

    },
    created: function(){

/*         this.onSuccess();
        this.onError();
        this.onLoad(); */

        this.amountShop();

    }    
}
</script>