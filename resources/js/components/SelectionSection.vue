<template>
    <section class="selection_section bg_white">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <h2 class="mt-5 mb-4">La selezione di Deliveboo</h2>
                </div>
                <div class="col">
                    <div class="row row-cols-2 g-3">
                        <div @click="showOverlay" class="col-6" :class="{'col-md-4': index === 0 || index === 3, 'col-md-8': index === 1 || index === 2}" v-for="item,index in selected_list" :key="index">
                            <a href="#search_div" class="card_wrapper w-100 h-100">
                                <div class="card border-0">
                                    <div class="card_image_box h_150p d-flex justify-content-center align-items-center" :style="`background: url(` + item.thumb + `)`">
                                        <h4 class="mb-0 text-white fw-bold">{{item.title}}</h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <p class="card-text mt-2">{{item.description}}</p>
                                        <span class="card_link">Scopri {{item.title}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'SelectionSection',
    props: {
        selected_list: Array,
        overlay_status: Object
    },
    methods: {
        showOverlay: function(){
            this.overlay_status.status = true;
            this.overlay_status.className = 'overlay_animation'
        }
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .card_wrapper{
        text-decoration: none;
        color: $secondary_color;
    }
    .card_image_box{
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center;
    }
    .card_link{
        color: $primary_color;
    }
</style>