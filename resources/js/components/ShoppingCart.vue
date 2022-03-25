<template>
    <div class="shopping_cart d-flex justify-content-center align-items-center" @click="showCart">
        <h5 v-if="!animationStarted" class="mb-0 text-uppercase fw-bold">Carrello</h5>
        <div class="shopping_cart_content w-100 h-100 p-3" v-else>

        </div>
    </div>
</template>

<script>
export default {
    name: 'ShoppingCart',
    data: function(){
        return {
            animationStarted: false
        };
    },
    methods: {
        showCart: function(){
            this.animationStarted = true;
        }
    }    
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .shopping_cart{
        width: 50px;
        height: 210px;
        position: fixed;
        z-index: 10000;
        right: 0;
        top: 50%;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        transform: translateY(-50%);
        padding: 5px;
        background-color: $primary_color;
        box-shadow: -11px 8px 20px 3px rgb(0 0 0 / 8%);
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
    }
</style>