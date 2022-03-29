<template>
    <div class="shopping_cart d-flex justify-content-center align-items-center" :class="cartClass">
        <h5 v-if="!animationStarted" class="cart_title w-100 h-100 mb-0 text-uppercase fw-bold" :class="cartTitleClass" @click="showCart">Carrello</h5>
        <div class="shopping_cart_content w-100 h-100 d-flex flex-column justify-content-stretch p-3 text-white" v-else>
            <!-- Sezione con la X -->
            <div class="close_section w-100 d-flex justify-content-end" :class="cartBodyClass">
                <i class="fa-solid fa-x fs-5 p-2 border border-2 border-white rounded-circle" @click="closeCart"></i>
            </div>
            <!-- Lista ordini -->
            <div class="cart_body w-100 h-100 d-flex flex-column" :class="cartBodyClass">
                <h3 class="text-center my-5">I tuoi ordini</h3>
                <div class="orders_box w-100 h-100 flex-grow-1 d-flex flex-column border border-3 border-white rounded p-2 space-padding-shopping-cart">
                    <div class="d-flex justify-content-between space-shopping-cart">

                        <div>Prodotti</div>

                        <div>Quantità</div>

                        <div>Totale</div>

                        <div>Test</div>

                    </div>

                    <div class="single_order justify-content-between d-flex align-items-center mb-3" v-for="order in orders" :key="order.id">
                        
                        <span>{{order.name}}</span>
                        <span>{{order.amount}}</span>
                        <span>{{order.priceTot}}</span>
                        <i class="fa-solid fa-x fs-5 p-1 text-white" @click="removeOrder(order.id)"></i>
                    </div>
                </div>
            </div>
            <!-- Sezione Conferma -->
            <div class="confirm_section w-100 d-flex justify-content-center">
                <a href="#" class="confirm_button p-3 border border-2 border-white rounded text-white mt-5">Conferma</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ShoppingCart',
    data: function(){
        return {
            animationStarted: false,
            cartClass: 'small',
            cartTitleClass: '',
            cartBodyClass: '',
        };
    },
    props: {
        orders: Array
    },
    methods: {
        showCart: function(){
            this.animationStarted = true;
            this.cartClass = 'big';
            this.cartTitleClass = 'disappearing';
            this.cartBodyClass = 'appearing';
        },
        closeCart: function(){
            this.animationStarted = false;
            this.cartClass = 'small';
            this.cartTitleClass = 'appearing';
            this.cartBodyClass = 'disappearing';
        },
        // Funzione che rimuove l'ordine dalla lista
        removeOrder: function(deletedOrderID){
            // Ciclo forEach per cercare nell'array un id corrispondente a quello dell'ordine eliminato
            this.orders.forEach((order,index) => {
                
                if(deletedOrderID === order.id){
                    this.orders.splice(index, 1);
                }
            });
        }
    },
    created: function(){


    }    
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .space-shopping-cart{

        font-size: 25px;

    }

    .space-padding-shopping-cart{

        padding: 20px;

    }

    .shopping_cart{
        position: fixed;
        z-index: 10000;
        background-color: $primary_color;
        transition-duration: 1s;

        h5{
            color: white;
            writing-mode: vertical-lr; 
            text-orientation: upright;
        }

        &:hover{

            cursor: pointer;
            transform: translateY(-50%) scale(1.2);

        }

        // Overflow
        .cart_body{
            overflow-y: auto;
        }

        // Classi animazioni
        .cart_title,
        .cart_body,
        .close_section{

            &.appearing{
                animation: cart_appear 1s linear 1;
            }
            &.disappearing{
                animation: cart_disappear .2s linear 1;
            }
        }

        // Dimensioni versione thumb e normale
        &.small{
            width: 50px;
            height: 210px;
            padding: 5px;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            box-shadow: -11px 8px 20px 3px rgb(0 0 0 / 8%);
        }
        &.big{
            width: 90vw;
            height: 90vh;
            padding: 10px;
            top: 5vh;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 5px;
            box-shadow: 0px 0px 20px 10px rgb(0 0 0 / 30%);

        }

        // Animazione comparsa/scomparsa
        @keyframes cart_appear{
            0%{
                opacity: 0;
            }
            100%{
                opacity: 1;
            }
        }
        @keyframes cart_disappear{
            0%{
                opacity: 1;
            }
            100%{
                opacity: 0;
            }
        }
    }
</style>