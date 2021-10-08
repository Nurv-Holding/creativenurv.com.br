<template>
    <section 
    data-aos="fade-down"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="retencao">
        <div class="layout">
            <h2 class="text">Retenção</h2>

            <p class="paragrafo">
                Após a conversão o processo não termina. Melhor do que vender uma vez, é
                <span class="text-p">vender</span>
                várias vezes para o mesmo
                <span class="text-p">cliente</span>
                . O famoso “volte sempre” será o foco a partir disso.
            </p>

            <div class="info-div">

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">E-mail Marketing</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Remarketing</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">Social Media</span>
                </p>

                <p>
                    <i class="fas fa-angle-right seta"></i>
                    <span class="info">CRM</span>
                </p>

            </div>

        </div>
    </section>
    <div 
    data-aos="fade-down"
    data-aos-offset="-200"
    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="btn-div">
        <a href="">
            <button class="btn">Saiba mais</button>
        </a>
    </div>
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();

export default {}
</script>

<style lang="postcss" scoped>
.retencao{
    @apply w-full mt-10 md:w-6/12 md:block md:relative md:left-28 xl:-mt-10 2xl:left-64 2xl:-mt-16;
}
.layout{
    @apply px-4 xl:w-9/12;
}
.text{
    @apply flex font-black text-2xl mt-5 lg:text-4xl xl:text-5xl 2xl:text-8xl;
}
.paragrafo{
    @apply font-medium text-base mt-3 lg:text-2xl xl:text-3xl;
}
.text-p{
    @apply font-black;
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
.btn-div{
    @apply w-full;
}
.btn{
    @apply bg-yellow-400 text-black block mx-auto text-lg mt-5 font-black px-20 lg:px-40 2xl:px-48 py-3 2xl:mt-20 2xl:py-6 rounded-md 2xl:text-4xl;
}
.line{
    @apply mt-5 lg:mt-7 xl:mt-10;
}
</style>