<template>

    <div class="container row justify-content-center">

        <!-- <div id="dropin" /> -->

    <!-- authorization="sandbox_csryh9w7_jcvymfwrf26rzh7c"  -->
        <div v-if="this.sendSuccess" class="form_container col-sm-12 col-md-12 col-lg-6 col-xl-4 p-2">
            <div>

                <div v-if="sendSuccessPost === false">

                    <v-braintree
                    
                        authorization="sandbox_csryh9w7_jcvymfwrf26rzh7c" 
                        locale="it_IT" 
                        btnText="Paga"
                        @success="onSuccess" 
                        @error="onError" 
                        @load="onLoad"
                        
                    >

<!--                     <template v-slot:button="slotProps">
                        <v-btn @click="slotProps.submit" color="success"></v-btn>
                    </template> -->

                    </v-braintree>

                </div>
                <div v-else>

                    <h2>Grazie per aver acquistato</h2>
                    <a href="/">Torna alla Home</a>

                </div>

            </div>

        </div>
        
        <div>

            <p v-if="error" class="text-red-500 mb-4">

                {{ error }}

            </p>

        </div>
        <div v-if="!this.sendSuccess" class="form_container col-sm-12 col-md-12 col-lg-6 col-xl-4 p-2">
            <form id="formData">

                <div class="mb-3">
                    <label for="clientName" class="form-label">Inserisci Nome</label>
                    <input type="text" minlength="1" maxlength="25" v-model="formData.clientName" class="form-control" id="clientName" name="clientName">
                </div>
                <div class="mb-3">
                    <label for="clientPhone" class="form-label">N° telefono</label>
                    <input type="text" minlength="10" maxlength="15" v-model="formData.clientPhone" class="form-control" id="clientPhone">
                </div>
                <div class="mb-3">
                    <label for="clientEmail" class="form-label">Inserisci email</label>
                    <input type="email" minlength="1" maxlength="50" v-model="formData.clientEmail" class="form-control" id="clientEmail">
                </div>
                <div class="mb-3">
                    <label for="clientAdress" class="form-label">Inserisci indirizzo di consegna</label>
                    <input type="text" minlength="5" maxlength="50" v-model="formData.clientAdress" class="form-control" id="clientAdress">
                </div>
                <div class="mb-3">
                    <label for="clientDetails" class="form-label">Inserisci informazioni</label>
                    <input type="text" minlength="1" maxlength="60000" v-model="formData.clientDetails" class="form-control" id="clientDetails">
                </div>

            </form>

            <button type="submit" class="btn btn-primary" @click="confermaDati()" >Prosegui al pagamento</button>

        </div>
    </div>

</template>

<script>

import dropIn from "braintree-web-drop-in";

export default {
    name: 'Payment',
    props: {
        
        ordini: Array

    },
    data: function(){
        return {
            clock: null,
            sendSuccess: false,
            sendSuccessPost: false,
            error: '',
            formData: {

                clientName:"",
                clientPhone:"",
                clientEmail:"",
                clientAdress:"",
                clientDetails:"",
                prezzoTot: this.amountShop(),
                codice_transazione: '',
                restaurantId:this.getRestaurantId(),
                pagato: true
            },
            price : {
            
                token : "fake-valid-nonce",
                prezzoTot: this.amountShop(),
                
            }
        };
    },
    methods: {
        
        amountShop: function(){

            let prezzoTot = 0;

            this.ordini.forEach(element => { 

                prezzoTot += parseFloat(element.priceTot);
                
            });

            return prezzoTot;
        },
        getRestaurantId: function(){
            let restaurant = "";

            this.ordini.forEach(element => { 

                restaurant = element.idRestaurant;
            });

            return restaurant;
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

                /* console.log(response.data.success) */

                if(response.data.success){

                    this.InviaDatiForm();

                }


            });

        }, 
        InviaDatiForm: function(){

            const method = "post";

            let axiosConfig = {
                headers: {
                    'Content-Type': 'application/json',
                    "Accept": "application/json",
                }
            };

            axios.post('http://127.0.0.1:8000/api/orders/save', this.formData, axiosConfig)
            .then((response) => {

                /* console.log(response.data) */
                    
            });

            
        
        },
        confermaDati: function(){

            this.sendSuccess = true;

        },
        pagamentoRiuscito: function(){

            this.sendSuccessPost = true;

        },
        onLoad: function(){

            this.$emit('loading')


        },
        
        onSuccess: function (payload) {
            let token = payload;
            
            this.$emit('onSuccess', token)

            this.PagamentoFinaleDelDestino()

            this.pagamentoRiuscito()

        },
        onError: function (error) {
            const message = error.message;
            if(message === 'No payment method is available') {

                this.error = 'Seleziona un metodo di Pagamento'

            }
            else{

                this.$emit('onError', message)

            }
        },
        getToken: function(){

            axios.get('http://127.0.0.1:8000/api/orders/generate')
            .then((response) => {

                this.formData.codice_transazione = response.data.token;

            });

        } 

    },
    created: function(){

/*         this.onSuccess();
        this.onError();
        this.onLoad(); */
        this.amountShop();
        this.getToken();

    }    
}
</script>