import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import Restaurant from './pages/Restaurant.vue';
import Dish from './pages/Dish.vue';
import Tipology from './pages/Tipology.vue';    
import NotFound from './pages/NotFound.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        // {
        //     path: "/restaurant/:slug",
        //     name: "restaurant-details",
        //     component: Restaurant
        // },
        // {
        //     path: "/dish/:slug",
        //     name: "dish-details",
        //     component: Dish
        // },
        // {
        //     path: "/tipologies/:slug",
        //     name: "tipology-details",
        //     component: Tipology
        // },
        {
            path: "/*",
            name: "not-found",
            component: NotFound
        }
    ]
});
// non si trova nella documentazione
export default router;