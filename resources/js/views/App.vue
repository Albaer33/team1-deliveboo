<template>
  <div class="page_content w-100 vh-100 position-relative">
    <ShoppingCart :orders="cart_orders" />
    <Header />
    <main>
      <router-view @sendOrder="getOrder($event)"></router-view>
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import ShoppingCart from '../components/ShoppingCart.vue';

export default {
  name: "App",
  components: {
    Header,
    Footer,
    ShoppingCart
  },
  data: function(){
    return {
      // Lista ordini (da cambiare con quelli della chiamata api, questa è un test)
      cart_orders: []
    };
  },
  methods: {
    getOrder: function(orderToAdd){

      let orderFound = false; 

      this.cart_orders.forEach(( order ) => {

        if( ( order.name === orderToAdd ) && ( this.cart_orders.length > 0 ) ){

          order.amount++

          order.priceTot += order.price

          orderFound = true;

        }
        
      });

      if(!orderFound){

        this.cart_orders.push({
          id: this.cart_orders.length + 1,
          name: orderToAdd,
          amount: 1,
          price: 25,
          priceTot: 25
        });

      }

    }
  }
};
</script>

<style lang="scss">
@import '../../sass/variables.scss';
@import '../../sass/mixins.scss';
@import '../../sass/general.scss';
@import '../../sass/size-space.scss';
@import '../../sass/utilities.scss';

  /* Fonts */
  h1,
  h2{
    color: $secondary_color;
    font-weight: bold;
    margin-bottom: 0;
  }

  main{
    min-height: calc(100% - 80px);
  }
</style>
