<template>
    <section class="home_page">
        <MainHome :overlay_conditions="overlay" />
    </section>
</template>

<script>
import MainHome from '../components/MainHome.vue';

export default {
    name: 'Home',
    components: {
        MainHome
    },
    data: function(){
        return {
            overlay: {
                status: false,
                className: '',
                clock: null
            }
        };
    },
    methods: {
        hideOverlay: function(){
            this.overlay.className = 'overlay_leaving';
            this.overlay.clock = setTimeout(() => {
                this.overlay.status = false;
            }, 300);
        }
    },
    created: function(){
        window.addEventListener('wheel', this.hideOverlay);
    } 
    
}
</script>