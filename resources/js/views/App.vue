<template>
  <div class="page_content">
    <Header />
    <Main />
    <Footer />
  </div>
</template>

<script>
import Header from "../components/Header.vue";
import Main from "../components/Main.vue";
import Footer from "../components/Footer.vue";

export default {
  name: "App",
  components: {
    Header,
    Main,
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

  
</style>
