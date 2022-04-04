<template>
  <div class="page_content w-100 vh-100 position-relative">
    <ShoppingCart :orders="cart_orders" />
    <Header />
    <main>
      <router-view @sendOrder="getOrder($event)" @removeOneDish="getOrder($event)" :orders="cart_orders" :restaurantFilter="filterToCheck"></router-view>
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
      cart_orders: [],
      filterToCheck: {
        word: ''
      },
      test: 'ciao'
    };
  },
  methods: {

    getOrder: function(dish){

      let orderFound = false; 

      if (dish.type === 'add') {

        this.cart_orders.forEach(( order ) => {
          // se la lunghezza dell' carrello è zero fa solo il push dell'elemento
          if( ( order.name === dish.orderToSend.nome ) && ( this.cart_orders.length > 0 ) ){

            order.amount++

            order.priceTot = parseFloat(order.priceTot)

            order.price= parseFloat(order.price)

            order.priceTot += order.price

            orderFound = true;

          }
        
        });

        if(!orderFound){

          this.cart_orders.push({
            id: dish.orderToSend.id,
            name: dish.orderToSend.nome,
            amount: 1,
            price: dish.orderToSend.prezzo,
            priceTot: dish.orderToSend.prezzo
          });

        }
      }

      // nel caso volessimo rimuovere un elemento
      else {
        this.cart_orders.forEach(( order, index ) => {
          // se trova la corrispondenza tra order.name e il nome del piatto dal DB e c'è almeno un elemento
          if( ( order.name === dish.orderToSend.nome ) && ( this.cart_orders.length > 0 ) ) {
            // se l' ammontare è maggiore di 1
            if(order.amount > 1) {
              // diminuisci di un elemento
              order.amount--
            }
            else {
              // altrimenti rimuovi il piatto (per non avere un piatto di QTY. 0)
              this.cart_orders.splice(index, 1)
            }
            order.priceTot = parseFloat(order.priceTot)

            order.price= parseFloat(order.price)

            order.priceTot -= order.price
          }
        });

      }
    },
    getFilter: function(thisFilter){
      this.filterToCheck = thisFilter;
    }
  },
  created: function(){
    console.log(this.filterToCheck);
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
