<template>
    <section 
    data-aos="fade-right"
    data-aos-delay="10"
    data-aos-duration="900"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="center-bottom">

        <div class="div-titulo">

            <h2 class="titulo">NOSSOS</h2>
            <h2 class="titulo">CLIENTES</h2>

        </div>

        <div class="clientes">

            <div>
                <img class="img-cliente" src="../assets/CLIENTE1.png" alt="">
            </div>

            <div>
                <img class="img-cliente" src="../assets/CLIENTE2.png" alt="">
            </div>

            <div>
                <img class="img-cliente" src="../assets/CLIENTE3.png" alt="">       
            </div>

            <div>
                <img class="img-cliente" src="../assets/CLIENTE4.png" alt="">
            </div>

            <div>
                <img class="img-cliente" src="../assets/CLIENTE5.png" alt="">
            </div>

        </div>

    </section>
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();

export default {

}
</script>

<style lang="postcss" scoped>
.clientes{
    @apply flex flex-wrap w-full justify-center flex-grow mt-10;
}
.img-cliente{
    @apply w-36 m-2 xl:w-52 2xl:w-64;
}
.div-titulo{
    @apply mt-16 xl:mt-40;
}
.titulo{
    @apply text-center font-black text-3xl md:text-4xl xl:text-6xl 2xl:text-7xl;
}
</style>