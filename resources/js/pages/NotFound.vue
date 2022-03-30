<template>
    <section>
        <div class="container">
            <h1>
                Ops pagina non esistente            
                
            </h1>
            <div class="link-home">
                
                <router-link class="nav-link active btn btn-primary_color" to="/">Torna alla Home</router-link> 
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: 'NotFound',
    
}
</script>

<style lang="scss" scoped>

    .container{

        .link-home{

            display: inline-block;
            font-size: 40px;

            .btn-primary_color{

                background-color: #00ccbc;
                border-color: #00ccbc;
                color: white;

            }

        }

    }

</style>