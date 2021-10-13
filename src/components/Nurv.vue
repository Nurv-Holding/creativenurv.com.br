<template>
    <section 
    data-aos="fade-up"
    data-aos-delay="1"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="section">
        
        <div class="text-div">

            <h1 class="text">MÉTODO</h1>
            <h1 class="text nurv">NURV</h1>

            <img class="linha" src="../assets/LINHA1.svg" alt="linha">
            
        </div>
        
    </section>
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();
</script>

<style lang="postcss" scoped>
.text-div{
    @apply mt-10 px-10 md:px-28 xl:px-40 xl:mt-20;
}
.text{
    @apply text-5xl font-black md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl;
}
.nurv{
    @apply text-yellow-400;
}
.linha{
    @apply hidden xl:inline-block xl:ml-28 xl:-mt-5 2xl:ml-36;
    width: 1.2px;
}
</style>