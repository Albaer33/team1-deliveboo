import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import Restaurant from './pages/Restaurant.vue';
import FilteredRestaurant from './pages/FilteredRestaurant.vue';
import Dish from './pages/Dish.vue';
import Tipology from './pages/Tipology.vue';
import Checkout from './pages/Checkout.vue';
import NotFound from './pages/NotFound.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
            meta: {

                title: "Home",
                icon: "../images/favicon.png"

            }
        },
        {
            path: "/restaurants/:slug",
            name: "restaurants",
            component: Restaurant,
            meta: {

                title: "Ristorante",
                icon: "../images/favicon.png"

            }
        },
        {
            path: "/filtered-restaurant",
            name: "filtered-restaurant",
            component: FilteredRestaurant,
            meta: {

                title: "Ristoranti",
                icon: "../images/favicon.png"

            }
        },
        {
            path: "/dish/:slug",
            name: "dish",
            component: Dish,
            meta: {

                title: "Piatti",
                icon: "../images/favicon.png"

            }
        },
        {
            path: "/tipologies/:slug",
            name: "tipologies",
            component: Tipology,
            meta: {

                title: "Ristoranti",
                icon: "../images/favicon.png"

            }
        },
        {
            path: "/checkout",
            name: "checkout",
            component: Checkout,
            meta: {

                title: "Checkout",
                icon: "../images/favicon.png"

            }
        },
        {
            path: "/*",
            name: "not-found",
            component: NotFound,
            meta: {

                title: "Pagina non trovata",
                icon: "../images/favicon.png"

            }
        }
    ]
});
// non si trova nella documentazione
export default router;