<template>
    <section class="banner_section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="banner_content d-flex flex-column">
                        <h1 class="mb-4">I piatti che ami, a domicilio.</h1>
                        <SearchBox />
                    </div>
                </div>
                <div class="col">
                    <div class="banner_image_content">
                        <div class="banner_img_wrapper w-100 d-flex justify-content-center align-items-center">
                            <img class="w-100" src="https://cwa.roocdn.com/_next/static/media/campaign.df080c2b8ecbb022c066558c655167a1.svg" alt="Immagine con riders di Deliveboo">
                        </div>
                        <div class="banner_text_wrapper w-100 d-flex justify-content-center">
                            <div class="banner_text_box text-white">
                                <h3 class="fw-bold mb-0 fs_25">#aCasaTuaConDeliveboo</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import SearchBox from './SearchBox.vue';

export default {
    name: 'BannerSection',
    components: {
        SearchBox
    }    
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .banner_section{
        background: linear-gradient(-5deg, #d0eb99 80%, $primary_color 20%);
        padding-top: 20px;
        overflow: hidden;

        img{
            max-width: 500px;
        }
        .banner_text_box{
            width: 90%;
            background-color: darken($primary_color, 15%);
            padding: 35px 50px 25px 20px;
            transform: rotate(2deg);
            position: relative;
            top: 10px;

            h3{
                transform: rotate(-2deg);
            }
        }
    }
</style>