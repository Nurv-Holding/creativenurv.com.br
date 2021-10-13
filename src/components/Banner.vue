<template>

    <Layout 
    data-aos="fade-up"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    >
        
        <div class="slogan">

            <h1 class="text"><span class="first">N</span>EVER</h1>
            <h1 class="text"><span class="first">U</span>NDERESTIMATE</h1>
            <h1 class="text"><span class="first">R</span>ADICAL</h1>
            <h1 class="text"><span class="first">V</span>ISION</h1>
            <p class="mini-text">(nunca subestime a visão <span class="first">radical</span>).</p>

        </div>

        <div>
            <img class="n" src="../assets/N.svg" alt="">
        </div>

    </Layout>

</template>

<script>
import Layout from './Layout.vue'
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();

export default {
    components: {
        Layout,
    },
}
</script>

<style lang="postcss" scoped>
.slogan{
    @apply mt-10 px-5 md:mt-0 md:py-10 lg:py-24 xl:py-36 xl:px-10;
}
.text{
    @apply text-4xl font-black md:text-6xl lg:text-7xl 2xl:text-8xl;
}
.first{
    @apply text-yellow-400;
}
.mini-text{
    @apply font-medium text-lg lg:text-2xl;
}
.n{
    @apply relative ml-28 w-64 h-auto md:inset-x-80 md:-mt-20 md:w-80 lg:inset-x-0 lg:mt-10 lg:ml-32 lg:w-9/12 xl:w-full xl:-ml-5 xl:mt-0;
}
</style>