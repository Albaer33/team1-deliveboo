<template>
  <div class="page_content">
    <Home />
  </div>
</template>

<script>
import Home from '../pages/Home.vue';

export default {
  name: "App",
  components: {
    Home
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
  
</style>
