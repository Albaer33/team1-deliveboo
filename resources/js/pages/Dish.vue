<template>
    <section>
        <div class="container">
            
        </div>
    </section>
</template>
<script>
export default {
    name: 'Dish',
    data: function(){

        return{

            dishes: []

        };

    },
    methods:{

        getDishes(){

            axios.get('/api/dishes'+this.$route.params.slug)
            .then((response) => {
                // console.log(response);
                this.dishes = response.data.results;
                /* this.myposts = response.data.results.dishes; */
                // console.log(response.data.results.dishes);
            });
        }
    },
    created: function(){

        this.getDishes();

    }
    
}
</script>