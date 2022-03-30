<template>
    <footer class="w-100 d-flex justify-content-center align-items-center py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                <!-- Vengono stampati testi se il type è text altrimenti delle immagini con i badges -->
                <div class="col" v-for="box,index in footerLinks" :key="index">
                    <div class="box w-100 h-100 d-flex p-3 rounded text-white">
                        <div class="box_text" v-if="box.type === 'text'">
                            <h3 class="mb-2">{{box.title}}</h3>
                            <span class="footer_link d-block mb-2 text-capitalize" v-for="link,index in box.links" :key="index">{{link}}</span>
                        </div>
                        <div class="box_badge" v-else>
                            <h3 class="mb-2">{{box.title}}</h3>
                            <img v-for="source,index in box.sources" :key="index" :src="source" :alt="{'AppStore badge': index === 0, 'GooglePlay badge': index === 1}" class="w_100p h_40p rounded d-block mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ultima sezione -->
            <div class="row row-cols-2">
                <div class="col">
                    <div class="left_section w-100 h-100 d-flex align-items-center text-white my-3">
                        <i class="fa-brands fa-facebook me-4"></i>
                        <i class="fa-brands fa-twitter me-4"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
                <div class="col">
                    <div class="right_section w-100 h-100 d-flex justify-content-end align-items-center my-3">
                        <span>© 2022 Deliveboo</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer',
    data: function(){
        return {
            // Array con links del footer
            footerLinks: [
                {
                    title: 'Scopri Deliveboo',
                    type: 'text',
                    links: [
                        'investitori',
                        'chi siamo',
                        'ristoranti',
                        'altro',
                        'pressroom',
                        'il nostro blog',
                        'programmazione',
                        'design',
                        'lavora con noi',
                        'diventa nostro partner'
                    ]
                },
                {
                    title: 'Note legali',
                    type: 'text',
                    links: [
                        'termini & Condizioni',
                        'informativa sulla privacy',
                        'cookies',
                    ]
                },
                {
                    title: 'Aiuto',
                    type: 'text',
                    links: [
                        'contatti',
                        'faq',
                        'tipi di cucina'
                    ]
                },
                {
                    title: 'Porta Deliveboo con te',
                    type: 'badges',
                    sources: [
                        require('../../images/appstore-badge.png'),
                        require('../../images/googleplay-badge.png')
                    ]
                }
            ]
        };
    }    
}
</script>

<style lang="scss" scoped>

    footer{
        background-color: #2e3333;

        // Sfondo per i box del footer tranne l'ultimo
        .box{
            background-color: #434848;
        }

        .right_section{
            color: #434848;
        }
    }
</style>