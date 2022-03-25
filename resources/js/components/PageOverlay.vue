<template>
    <div class="page_overlay w-100 h-100" :class="overlay_status.className" v-if="overlay_status.status" @click="hideOverlay">

    </div>
</template>

<script>
export default {
    name: 'PageOverlay',
    props: {
        overlay_status: Object
    },
    methods: {
        hideOverlay: function(){
            this.overlay_status.className = 'overlay_leaving';
            this.overlay_status.clock = setTimeout(() => {
                this.overlay_status.status = false;
            }, 300);
        }
    }
}
</script>

<style lang="scss" scoped>

    .page_overlay{
        z-index: 1500;
        background-color: rgba($color: #000000, $alpha: .3);
        top: 0;
        left: 0;
    }
</style>