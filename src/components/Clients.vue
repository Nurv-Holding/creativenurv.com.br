<template>
    <section 
    data-aos="fade-right"
    data-aos-delay="10"
    data-aos-duration="900"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="center-bottom"
    class="clientes">

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
    @apply flex flex-wrap w-full justify-center flex-grow mt-10 xl:mt-40;
}
.img-cliente{
    @apply w-36 m-2 xl:w-52 2xl:w-64;
}
</style>