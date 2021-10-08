<template>
    <section 
    data-aos="fade-down"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="engajamento">

        <div class="linha-div">
            <img class="linha" src="../assets/LINHA2.svg" alt="linha">
        </div>

        <div class="layout">

            <h2 class="text">
                <span>Engajamento</span>
                <img class="seta-subindo" src="../assets/seta subindo.svg" alt="seta subindo">
            </h2>

            <p class="paragrafo">
                Ao conquistar sua audiência aplicamos <span class="text-p">diversas estratégias</span> para garantir que o seu público se conecte cada vez mais com aquilo que você tem a oferecer.
            </p>

            <div class="info-div">
                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Web Design</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Implementação de loja virtual</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Design e UX</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Inbound Marketing</span>
                </p>

            </div>

            <div class="linha-2-div">
                <img class="linha-2" src="../assets/LINHA1.svg" alt="">
            </div>

        </div>

    </section>
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();
</script>

<style lang="postcss" scoped>
.engajamento{
    @apply w-full md:w-6/12 md:block md:relative md:inset-x-1/4 xl:grid xl:grid-cols-2 xl:inset-x-0 xl:w-full;
}
.layout{
    @apply px-4 lg:mt-10 xl:mt-0 xl:w-9/12 2xl:-ml-20;
}
.text{
    @apply flex font-black text-2xl mt-5 lg:text-4xl xl:text-5xl 2xl:text-8xl;
}
.seta-subindo{
    @apply w-7 lg:w-10 xl:w-20;
}
.paragrafo{
    @apply font-medium text-base mt-3 lg:text-2xl xl:text-3xl;
}
.text-p{
    @apply text-yellow-400 font-black;
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
.linha-div{
    @apply xl:mt-10 xl:relative xl:inset-x-1/3 2xl:mt-0 2xl:inset-x-1/4;
}
.linha{
    @apply hidden xl:block xl:w-7/12 2xl:h-2/5 2xl:w-8/12;
}
.linha-2-div{
    @apply hidden xl:block xl:relative xl:left-10 xl:mt-3;
}
.linha-2{
    width: 1.4px;
}
</style>