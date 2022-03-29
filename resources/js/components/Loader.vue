<template>
    <section class="loader w-100 d-flex flex-column justify-content-center align-items-center">
        <h2 class="mb-3">Loading</h2>
        <div class="loading_icon w_50p h_50p rounded-circle mt-3"></div>
    </section>
</template>

<script>
export default {
    name: 'Loader'
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    .loader{
        background-color: $primary_color;
        color: white;
        height: calc(100vh - 80px);

        h2{
            color: white;
            font-size: 40px;
        }
        /* Assegno l'animazione all'icona "loading" */
        .loading_icon{
            animation: loading .5s linear infinite;
            border: 4px solid white;
            border-top-color: transparent;
        }
    }

    /* Animazione per l'icona "loading" */
    @keyframes loading{
        0%{
            transform: rotate(0deg);
        }
        25%{
            transform: rotate(90deg);
        }
        50%{
            transform: rotate(180deg);
        }
        75%{
            transform: rotate(270deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
</style>