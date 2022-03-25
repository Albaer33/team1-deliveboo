<template>
    <section class="position-relative">
        <ShoppingCart />
        <BannerSection />
        <SelectionSection :selected_list="selected_items" :overlay_status="overlay_conditions" />
        <SuggestionsSection />
        <TagsSection />
        <NewsSection />
        <WorkSection />
        
        <PageOverlay :overlay_status="overlay_conditions" class="position-absolute" />
    </section>
</template>

<script>
import ShoppingCart from './ShoppingCart.vue';
import BannerSection from './BannerSection.vue';
import SelectionSection from './SelectionSection.vue';
import SuggestionsSection from './SuggestionsSection.vue';
import TagsSection from './TagsSection.vue';
import NewsSection from './NewsSection.vue';
import WorkSection from './WorkSection.vue';
import PageOverlay from './PageOverlay.vue';

export default {
    name: 'MainHome',
    components: {
        ShoppingCart,
        BannerSection,
        SelectionSection,
        SuggestionsSection,
        TagsSection,
        NewsSection,
        WorkSection,
        PageOverlay
    },
    props: {
        overlay_conditions: Object
    },
    data: function(){
        return {
             restaurant : [],

             datiNonTrovati: 'NON STATI TROVATI DATI',

            selected_items: [
                {
                    title: 'Comfort food',
                    thumb: 'https://f.roocdn.com/images/menu_tags/288/menu-tag-image.jpg?width=430&height=150&auto=webp&format=jpg&fit=crop&v=1611583226',
                    description: 'I grandi classici che scaldano il cuore, perfetti in ogni momento.'
                },
                {
                    title: 'Dolci e dessert',
                    thumb: 'https://f.roocdn.com/images/menu_tags/328/menu-tag-image.jpg',
                    description: 'Dolci piaceri per rendere la giornata ancora più gustosa.'
                },
                {
                    title: 'Perfetti da condividere',
                    thumb: 'https://f.roocdn.com/images/menu_tags/291/menu-tag-image.jpg',
                    description: 'Serve una scusa per stare insieme? Ordina dai ristoranti che trasformeranno la tua serata in un vera festa.'
                },
                {
                    title: 'Esclusiva Deliveroo',
                    thumb: 'https://f.roocdn.com/images/menu_tags/293/menu-tag-image.jpg',
                    description: 'I più famosi, i più buoni, i preferiti. Quelli che trovi solo su Deliveroo.'
                }
            ],
      
        };
    },
          methods: {

         getRestaurant(){
            //  correzione da rivedere immettendo l'url completo ho finalmente i data corretti
            // ATTENZIONE ALLA GESTIONE ROTTE DA PARTE DI LARAVEL USARE URL COMPLETA NEL CASO
            axios.get('http://127.0.0.1:8000/api/restaurants/')
            .then((response) => {
                // console.log(response);
                if(response.data.success) {
                    this.restaurant = response.data.results;
                } else {
                    this.restaurant = this.datiNonTrovati;
                }
            });
          }
    },
    created: function(){
        this.getRestaurant();
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    main{
        & > section{
            width: 100%;
        }
    }
</style>