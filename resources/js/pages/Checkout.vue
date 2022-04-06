<template>
    <section>

        <h1 >CARRELLO</h1>

        <div v-if="orders.length > 0" class="container row justify-content-center">           

            <div class="container col-sm-12 col-md-12 col-lg-6 col-xl-4">

                <h2>Dettaglio acquisto:</h2>

                <div v-for="order in orders" :key="order.id" class="">
                    

                    <span>{{ order.name }} Quantità: {{ order.amount }}</span>


                </div>

               <h3>Totale: {{ amountShop() }}€</h3> 

            </div>

            <Payment ref="paymentRef" @loading="handleLoading" @onSuccess="paymentOnSuccess" @onError="paymentOnError" :ordini="orders"/>

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

            disableBuyButton: true,
            loadingPayment: true,

        }
    },
    props: {

        orders: Array

    },
    methods: {
        amountShop: function(){

            let price = 0;
            let partialPrice = 0;

            this.orders.forEach(element => {

                

                partialPrice = parseFloat(element['priceTot']);

                price += partialPrice;

            });

            return price.toFixed(2);

        },
        handleLoading: function(){

            this.disableBuyButton = false;

        },
        paymentOnSuccess: function(nonce){

            this.form.token = nonce
            this.buy()

        },
        beforeBuy: function(){

            this.$refs.paymentRef.$refs.paymentBtnRef.click()

        },
             
    },

    created: function(){
        window.scrollTo(0, 0);
        this.loadingPayment = false;
    }

}

</script>
<style lang="scss">
h1{
    text-align: center;
}
</style>