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
            suggested_items: [
                {
                    name: 'McDonald\'s',
                    thumb: require('https://f.roocdn.com/images/menus/64574/header-image.jpg?width=706.0000210404396&height=354.0000105500221&auto=webp&format=jpg&fit=crop&v=1547634455'),
                    description: ''
                },
                {
                    name: 'Nima Sushi',
                    thumb: require('https://f.roocdn.com/images/menus/213898/header-image.jpg?width=706.0000210404396&height=354.0000105500221&auto=webp&format=jpg&fit=crop&v=1573558821'),
                    description: ''
                },
                {
                    name: 'Pokèria by NIMA',
                    thumb: require('https://f.roocdn.com/images/menus/71232/header-image.jpg?width=706.0000210404396&height=354.0000105500221&auto=webp&format=jpg&fit=crop&v=1615219760'),
                    description: ''
                },
                {
                    name: 'Daruma Kosher',
                    thumb: require('https://f.roocdn.com/images/menus/14480/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1537967434'),
                    description: ''
                },
                {
                    name: 'Temakinho',
                    thumb: require('https://f.roocdn.com/images/menus/67494/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1610355421'),
                    description: ''
                },
                {
                    name: 'Berberè Pizzeria',
                    thumb: require('https://f.roocdn.com/images/menus/63776/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1556873766'),
                    description: ''
                },
                {
                    name: 'Old Wild West',
                    thumb: require('https://f.roocdn.com/images/menus/225238/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1585830197'),
                    description: 'Il menù potrebbe temporaneamente subire alcune variazioni di ingredienti. Per maggiori informazioni contattare il punto vendita o consultare la sezione “lista ingredienti ed allergeni”'
                },
                {
                    name: 'Roadhouse',
                    thumb: require('https://f.roocdn.com/images/menus/188980/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1588261235'),
                    description: 'Ordina il tuo piatto preferito a casa tua da Roadhouse grazie alla consegna a domicilio di Deliveroo.'
                },
                {
                    name: 'KFC',
                    thumb: require('https://f.roocdn.com/images/menus/257876/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1586357552'),
                    description: 'Ordina il tuo piatto preferito a casa tua da KFC grazie alla consegna a domicilio di Deliveroo. Per maggiori informazioni sul libro ingredienti consulta la pagina: http://www.kfc.it/wp-content/uploads/2016/05/kfc_libro_ingredienti.pdf'
                },
                {
                    name: 'La piadineria',
                    thumb: require('https://f.roocdn.com/images/menus/207109/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1602487666'),
                    description: 'Ordina la tua piadina preferita a casa tua da La Piadineria grazie alla consegna a domicilio di Deliveroo.'
                },
                {
                    name: 'Burger King',
                    thumb: require('https://f.roocdn.com/images/menus/41027/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1598626967'),
                    description: ''
                },
                {
                    name: 'Grom',
                    thumb: require('https://f.roocdn.com/images/menus/17074/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1505479292'),
                    description: ''
                }
            ]
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