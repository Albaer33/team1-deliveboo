<template>
    <section class="main_home">
        <BannerSection />
        <TipologiesSection />
        <SelectionSection :selected_list="selected_items" :overlay_status="overlay_conditions" />

        <SuggestionsSection :restaurants_list="restaurants_data" />
        
        <NewsSection />
        <WorkSection />
        
        <PageOverlay :overlay_status="overlay_conditions" class="position-absolute" />
    </section>
</template>

<script>
import BannerSection from './BannerSection.vue';
import SelectionSection from './SelectionSection.vue';
import SuggestionsSection from './SuggestionsSection.vue';
import TipologiesSection from './TipologiesSection.vue';
import NewsSection from './NewsSection.vue';
import WorkSection from './WorkSection.vue';
import PageOverlay from './PageOverlay.vue';

export default {
    name: 'MainHome',
    components: {
        BannerSection,
        SelectionSection,
        SuggestionsSection,
        TipologiesSection,
        NewsSection,
        WorkSection,
        PageOverlay
    },
    props: {
        restaurants_data: Array,
        overlay_conditions: Object
    },
    data: function(){
        return {

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