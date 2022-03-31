<template>
    <section>

        <div v-if="orders.length > 0">

                <!-- Step one: add an empty container to your page -->

            <h1>Benvenuto su Deliveboo</h1>

<!--             {{token}}

            {{form}} -->

            <div>

                Stai comprando:

                <div v-for="order in orders" :key="order.id" class="">

                    <div>Nome:{{ order.name }} Quantità: {{ order.amount }}</div>

                </div>

                Totale: {{ amountShop() }}

            </div>

            <Payment ref="paymentRef" :authorization="tokenApi" @loading="handleLoading" @onSuccess="paymentOnSuccess" @onError="paymentOnError" :ordini="orders"/>

<!--             <button
            
                v-if="!disableBuyButton"
                class="w-full text-center px-4 py-3 bg-green-500 rounded-md shadow-md text-white"
                @click.prevent="beforeBuy"

            >

                Procedi con l'acquisto

            </button>
            <button
            
                v-else
                class="w-full text-center px-4 py-3 bg-green-500 rounded-md shadow-md text-white"


            >

                {{

                    loadingPayment ? 'Loading...' : 'Procedi con l\'acquisto'

                }}

        </button> -->

        </div>
        <div v-else class="d-flex justify-content-center">
            
            <div class="container">

                <div class="row p-5">

                    <div class="col d-flex align-items-center flex-column">

                        <h2>Carrello vuoto</h2>

                        <img src="https://www.carrelli.it/media/catalog/product/cache/1/image/800x800/7eb2a521811c6209dcb9d23dcd38ce9d/c/a/carrelli_spesa_1.jpg" alt="carrello">

                    </div>

                </div>

            </div>

        </div>
       
    </section>
</template>
<script>

import Payment from '../components/Payment.vue';

export default {
    name: 'Checkout',
    components: {

        Payment

    },
    data: function(){

        return {

            tokenApi : '',
            disableBuyButton: true,
            loadingPayment: true,
            form : {
                token : "",
                product: 10
            },

        }
    },
    async mounted() {

        

    },
    props: {

        orders: Array

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
        handleLoading: function(){

            this.disableBuyButton = false;

        },
        paymentOnSuccess: function(nonce){

            this.form.token = nonce
            this.buy()

        },
        paymentOnError(error){



        },
        beforeBuy: function(){

            this.$refs.paymentRef.$refs.paymentBtnRef.click()

        },
        buy: function(){



        },
        getToken: function(){

            axios.get('http://127.0.0.1:8000/api/orders/generate')
            .then((response) => {
                
                return this.tokenApi = response.data.token;

            });

            

        } 
             
    },

    created: function(){
        window.scrollTo(0, 0);
        let tokenApi = null;
        this.getToken();
        this.loadingPayment = false;
        this.form.product = this.$route.params.id
        /* this.handleLoading(); */
    }

}

</script>