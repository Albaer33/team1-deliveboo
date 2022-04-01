<template>
    <section class="suggestions_section mt_30">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="title_container">
                        <h2 class="mt-4 mb-4">I tuoi piatti preferiti, consegnati da noi.</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <div class="col" v-for="restaurant in restaurants_list" :key="restaurant.id">
                            <!-- Da mettere la card dentro tag router-link -->
                            <router-link :to="{name:'restaurants', params:{slug:restaurant.slug}}" class="card border-0 bg-transparent">
                                <div class="card_image_box w-100" v-if="restaurant.immagine.includes('https')">
                                    <img :src="restaurant.immagine" :alt="'Immagine di ' + restaurant.nome_attivita">
                                </div>
                                <div class="card_image_box w-100" v-else>
                                    <img :src="require(`/storage/app/public/${restaurant.immagine}`)" :alt="'Immagine di ' + restaurant.nome_attivita">
                                </div>
                                <div class="card-body p-0">
                                    <h4 class="my-2 fw-bold color-black">{{restaurant.nome_attivita}}</h4>
                                    <p class="color-black" v-if="restaurant.description !== ''">{{restaurant.descrizione}}</p>
                                </div>      
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'SuggestionsSection',
    props: {
        restaurants_list: Array
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .image-restaurant{ 
        
        text-align: center;

        img{

            max-height: 211px;
            max-width: 422px;

        }

    }
    .suggestions_section{
        background-color: #ffeae4;

    }

    .color-black{

        color: black;

    }
</style>