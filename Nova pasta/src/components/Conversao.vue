<template>
    <section 
    data-aos="fade-down"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="conversao">

        <div class="layout">

            <h2 class="text">Conversão</h2>

            <p class="paragrafo">
                Ao conquistar sua audiência aplicamos
                <span class="text-p">diversas estratégias</span> para garantir que o seu público se conecte cada vez mais com aquilo que você tem a oferecer.
            </p>

            <div class="info-div">

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Desenvolvimento de oferta (Copywriting)</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">C.R.O (Conversion Rate Optmization)</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Controle de Vendas Omni-Channel</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Programática</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Inbound Marketing</span>
                </p>

            </div>
        </div>

        <div class="inversa-div">

            <img class="inversa" src="../assets/inversa.svg" alt="inversa">

        </div>

    </section>
    
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();
</script>

<style lang="postcss" scoped>
.conversao{
    @apply w-full mt-10 md:w-6/12 md:block md:relative md:inset-x-2/4 xl:inset-x-1/3;
}
.layout{
    @apply px-4;
}
.text{
    @apply flex font-black text-2xl mt-5 lg:text-4xl xl:text-5xl 2xl:text-8xl;
}
.paragrafo{
    @apply font-medium text-base mt-3 lg:text-2xl xl:text-3xl;
}
.text-p{
    @apply text-yellow-400 font-black;
}
.info-div{
    @apply mt-5;
}
.info{
    @apply font-bold lg:text-2xl xl:text-3xl;
}
.seta{
    @apply text-yellow-400 lg:text-xl xl:text-3xl;
}
.inversa-div{
    @apply hidden xl:block xl:relative xl:left-1/3 2xl:left-44;
}
.inversa{
    @apply xl:w-5/12;
}
</style>