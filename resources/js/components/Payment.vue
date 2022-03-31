<template>

    <div>

        <div id="dropin" />

    <!-- authorization="sandbox_csryh9w7_jcvymfwrf26rzh7c"  -->

        <v-braintree 
            authorization="sandbox_csryh9w7_jcvymfwrf26rzh7c" 
            locale="it_IT" 
            btnText="Paga"
            @success="onSuccess" 
            @error="onError" 
            @load="onLoad"
            
        />

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
            error: ''
        };
    },
    props: {
        
        authorization : {

            required: true,
            type: String

        }

    },
    methods: {

        onLoad: function(){

            this.$emit('loading')

            /* alert('loading'); */

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