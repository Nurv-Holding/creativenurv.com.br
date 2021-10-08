<template>

    <section 
    data-aos="fade-down"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="trafego">

        <div class="layout">

            <h2 class="text">Tráfego</h2>

            <p class="paragrafo">
                O primeiro passo para desenvolver uma estratégia de vendas eficaz é a partir do tráfego, pois ele levará o público a <span class="text-p">conhecer</span> o seu produto.

            </p>

            <div class="info-div">
                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Google Adwords</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Facebook Ads</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">SEO</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Web Analytics</span>
                </p>
            </div>

        </div>

        <div class="mapa-div">
            <img class="mapa" src="../assets/mapa.svg" alt="linha">
        </div>

    </section>

</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();
</script>

<style lang="postcss" scoped>
.trafego{
    @apply w-full grid grid-cols-1 md:grid-cols-2 md:px-5 lg:px-7 xl:px-36;
}
.layout{
    @apply px-4 lg:mt-10 xl:mt-0;
}
.text{
    @apply font-black text-2xl mt-5 lg:text-4xl xl:text-5xl 2xl:text-8xl;
}
.paragrafo{
    @apply font-medium text-base mt-3 lg:text-2xl xl:text-3xl;
}
.text-p{
    @apply bg-yellow-400 text-black font-black;
}
.mapa-div{
    @apply -mt-32 md:-mt-0;
}
.mapa{
    @apply w-full md:h-full;
}
.seta{
    @apply text-yellow-400 lg:text-xl xl:text-3xl;
}
.info-div{
    @apply mt-5;
}
.info{
    @apply font-bold lg:text-2xl xl:text-3xl;
}
</style>