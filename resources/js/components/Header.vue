<template>
    <header class="d-flex justify-content-center align-items-center">
        <nav class="navbar w-100">
            <div class="container">

                <!-- Loghi -->
                <a href="/">

                    <div class="header_logos d-flex align-items-center">
                    <img class="w_30p" :src="img_logo" alt="logo deliveboo">
                    <h4 class="mb-0">deliveboo</h4>

                </div>

                </a>

                <!-- Bottoni -->
                <div class="header_forms d-flex align-items-center">
                    <!-- Register -->
                    <a href="http://127.0.0.1:8000/admin">

                            <div class="register_box d-flex align-items-center">
                            <i class="fa-solid fa-house me-2"></i>
                            <span>Registrati o accedi</span>
                    
                        </div>

                    </a>
                    <!-- Menu -->
<!--                     <a href="">

                            <div class="menu_box d-flex align-items-center">
                            <i class="fa-solid fa-bars me-2"></i>
                            <a href="#">Menu</a>
                        
                        </div>

                    </a> -->
                </div>

            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'Header',
    data: function(){
        return {
            img_logo: require('../../../resources/images/logo.png'),
        }
    }    
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables.scss';

    a{

        text-decoration: none;
        color: inherit;

    }

    header{
        height: 80px;
        background-color: $primary_color;

        .header_logos{
            gap: 5px;
            color: white;

            img{
                filter: invert(1);
            }
        }

        .header_forms{
            gap: 15px;

            [class*="_box"]{
                height: 80%;
                border-radius: 5px;
                padding: 8px 16px;
                background-color: white;

                a{
                    color: $secondary_color;
                    text-decoration: none;
                }
                i{
                    color: $primary_color;
                }
            }
        }
    }
</style>