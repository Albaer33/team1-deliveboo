<template>
    <main>
        <ShoppingCart />
        <BannerSection />
        <SelectionSection />
        <SuggestionsSection />
        <TagsSection />
        <NewsSection />
        <WorkSection />
    </main>
</template>

<script>
import ShoppingCart from './ShoppingCart.vue';
import BannerSection from './BannerSection.vue';
import SelectionSection from './SelectionSection.vue';
import SuggestionsSection from './SuggestionsSection.vue';
import TagsSection from './TagsSection.vue';
import NewsSection from './NewsSection.vue';
import WorkSection from './WorkSection.vue';

export default {
    name: 'Main',
    components: {
        ShoppingCart,
        BannerSection,
        SelectionSection,
        SuggestionsSection,
        TagsSection,
        NewsSection,
        WorkSection
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