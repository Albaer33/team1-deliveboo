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

            axios.post('http://127.0.0.1:8000/api/orders/make/payment', this.form, axiosConfig)
            .then((response) => {


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