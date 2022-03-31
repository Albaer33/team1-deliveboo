<template>

    <div>

        <div id="dropin" />

    <!-- authorization="sandbox_csryh9w7_jcvymfwrf26rzh7c"  -->

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

        <div>

            <p v-if="error" class="text-red-500 mb-4">

                {{ error }}

            </p>

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
            form : {
                token : "sandbox_csryh9w7_jcvymfwrf26rzh7c",
                product: this.ordini[0]['id']
            },
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

            let price = 0;
            let partialPrice = 0;

            this.orders.forEach(element => { 

                price += parseFloat(element['priceTot']);

            });

            return price;

        },
        PagamentoFinaleDelDestino: function(){

            let product = 0;
            let ordiniID = this.ordini[0]['id'];

            console.log(this.ordini[0]['id']);
            /* console.log(this.ordini[0]['prezzo']); */


            let axiosConfig = {
                headers: {
                    'Content-Type': 'application/json',
                    "Accept": "application/json",
                }
            };

            axios.post('http://127.0.0.1:8000/api/orders/make/payment', this.form, axiosConfig)
            .then((response) => {
                
                token = "fake-valid-nonce",
                product = ordiniID;

            });

        }, 

        onLoad: function(){

            this.$emit('loading')


        },
        
        onSuccess: function (payload) {
            let token = payload.nonce;
            
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

        this.onSuccess();
        this.onError();
        this.onLoad();


    }    
}
</script>