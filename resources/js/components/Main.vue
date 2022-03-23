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
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

</style>