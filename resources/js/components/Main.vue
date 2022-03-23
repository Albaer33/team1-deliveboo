<template>
    <main>
        <UpperSection />
        <AddressBox />
        <BannerSection />
        <SelectionSection />
        <SuggestionsSection />
        <TagsSection />
        <NewsSection />
        <WorkSection />
        <section>
        <div class="container" v-for="(restaurant, index) in restaurants" :key="index">
            <!-- <h1>Titolo del post</h1> -->
            <h1>
                {{restaurant.nome_attivita}}
            </h1>
            <h1>
                {{restaurant.indirizzo}}
            </h1>  
            <h1>
                {{restaurant.telefono}}
            </h1>
        </div>
    </section>
        <router-view></router-view>
    </main>
</template>

<script>
import UpperSection from './UpperSection.vue';
import AddressBox from './AddressBox.vue';
import BannerSection from './BannerSection.vue';
import SelectionSection from './SelectionSection.vue';
import SuggestionsSection from './SuggestionsSection.vue';
import TagsSection from './TagsSection.vue';
import NewsSection from './NewsSection.vue';
import WorkSection from './WorkSection.vue';

export default {
    name: 'Main',
    components: {
        UpperSection,
        AddressBox,
        BannerSection,
        SelectionSection,
        SuggestionsSection,
        TagsSection,
        NewsSection,
        WorkSection
    },
    data: function(){
        return{
            restaurants : []
        }
    },
        methods: {
        
         getRestaurants(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/restaurants')
            .then((response) => {
                // console.log(response);
                this.restaurants = response.data.results;
            });
          }
    },
    created: function(){
        this.getRestaurants();
    } 
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

</style>