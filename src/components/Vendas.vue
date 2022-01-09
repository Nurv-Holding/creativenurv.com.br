<template>
    <section class="vendas">

        <div 
        data-aos="fade-up"
        data-aos-delay="10"
        data-aos-duration="900"
        data-aos-easing="ease-in-out"
        data-aos-mirror="true"
        data-aos-once="false"
        data-aos-anchor-placement="top-center"
        class="vendas-text">

            <div>

                <h2 class="text">AUMENTE AS SUAS VENDAS</h2>
                <h3 class="text-vendas">com a assessoria</h3>
                <h3 class="text-vendas">de marketing digital da</h3>
                <h3 class="text-vendas">
                    Creative <span class="yellow">NURV</span>
                </h3>

            </div>

            <div class="bg-gradiente-box">
                <p class="paragrafo">
                   Vamos posicionar a sua marca digitalmente com um método de vendas desenvolvido, testado e validado, a <span class="yellow">Creative Nurv</span> está preparada para <span class="yellow">potencializar</span> qualquer tipo de negócio.
                </p>
            </div>

        </div>

        <div 
        data-aos="fade-right"
        data-aos-delay="10"
        data-aos-duration="900"
        data-aos-easing="ease-in-out"
        data-aos-mirror="true"
        data-aos-once="false"
        data-aos-anchor-placement="center-bottom"
        class="barrinhas-div">
            <img class="barrinhas" src="../assets/barrinhas.svg" alt="barrinhas">
        </div>

    </section>

</template>

<script>
export default {}
</script>

<style lang="postcss" scoped>
.vendas{
    @apply w-full mt-10 grid grid-cols-1 md:grid-cols-2 2xl:mt-52;
}
.text{
    @apply py-5 px-7 md:px-16 md:py-0 text-xl font-black md:text-2xl lg:text-3xl xl:text-4xl xl:py-4 2xl:text-6xl;
    background: linear-gradient(90deg, rgba(224, 224, 224, 0.385556) -19.8%, rgba(248, 248, 252, 0.21) -1.98%, rgba(221, 221, 225, 0.18725) 24.5%, #FFD738 101.36%);
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text-vendas{
    @apply text-lg font-bold px-7 md:px-16 mt-2 md:text-xl lg:text-2xl xl:text-3xl 2xl:text-5xl 2xl:mt-6;
}
.paragrafo{
    @apply text-base text-justify font-medium px-7 md:ml-10 lg:mt-7 md:text-lg lg:text-xl xl:text-2xl xl:leading-relaxed 2xl:text-4xl;
}
.yellow{
    @apply text-yellow-400;
}
.bg-gradiente-box{
    @apply py-6 lg:mt-14 lg:mb-20 xl:h-72 2xl:mb-0;
    background: linear-gradient(254.9deg, rgba(255, 255, 255, 0.072) -4.1%, rgba(255, 254, 253, 0) 109.28%), linear-gradient(270deg, rgba(8, 8, 8, 0.3) 50%, rgba(8, 8, 8, 0) 106.98%);
    filter: drop-shadow(-17px 38px 32px rgba(0, 0, 0, 0.4));
    backdrop-filter: blur(179px);
    border-top-right-radius: 117px;
    border-bottom-right-radius: 117px;
    filter: drop-shadow(-17px 38px 32px rgba(0, 0, 0, 0.4));
    backdrop-filter: blur(179px);
}
.barrinhas-div{
    @apply xl:h-auto;
}
.barrinhas{
    @apply hidden md:block md:h-96 md:w-full xl:block xl:mx-auto xl:h-full xl:w-1/2;
}
</style>