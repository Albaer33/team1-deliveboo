<template>
  <div class="page_content w-100 vh-100">
    <Header />
    <main>
      <router-view></router-view>
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';

export default {
  name: "App",
  components: {
    Header,
    Footer
  },
};
</script>

<style lang="scss">
@import '../../sass/variables.scss';
@import '../../sass/mixins.scss';
@import '../../sass/general.scss';
@import '../../sass/size-space.scss';
@import '../../sass/utilities.scss';

  /* Fonts */
  h1,
  h2{
    color: $secondary_color;
    font-weight: bold;
    margin-bottom: 0;
  }

  main{
    min-height: calc(100% - 80px);
  }
</style>
