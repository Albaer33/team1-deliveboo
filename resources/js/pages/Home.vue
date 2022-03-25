<template>
    <section class="home_page">
        <Header />
        <Main />
        <Footer />
        <router-view></router-view>
    </section>
</template>

<script>
import Header from "../components/Header.vue";
import Main from "../components/Main.vue";
import Footer from "../components/Footer.vue";

export default {
    name: 'Home',
    components: {
        Header,
        Main,
        Footer
    }
    
}
</script>