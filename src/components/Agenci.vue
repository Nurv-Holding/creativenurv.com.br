<template>
    <section
    data-aos="fade-up"
    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="agenci">

        <div class="seta-div">
            <img class="seta" src="../assets/seta.svg" alt="">
        </div>
        
        <div class="card-text">

            <h2 class="text">Somos uma agência</h2>
            <h2 class="text">especializada no</h2>
            <h2 class="text-destac text">desenvolvimento</h2>
            <h2 class="text">estratégico de vendas</h2>
            <h2 class="text">online da sua empresa.</h2>

        </div>

        <div class="card">
            <p class="paragrafo">
                Embora agência, não só agenciamos você, mas te proporcionamos toda uma assessoria em vendas. Nossa missão é fazer com que a sua empresa não só seja notada digitalmente, mas que obtenha  resultados estrondosos.
            </p>
        </div>

        <div class="time card">
            <p class="text-time">
                Contamos com um time capacitado e desenvolvido para fazer com que a sua empresa alcance um nível radical de vendas!
            </p>
        </div>

        <div class="card">

            <a href="http://formulario.creativenurv.com">
                <button class="btn">
                    Saiba mais
                </button>
            </a>

        </div>

    </section>
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();

export default {}
</script>

<style lang="postcss" scoped>
.agenci{
    @apply w-full px-4 md:w-7/12 md:ml-24 lg:w-6/12 lg:ml-40 xl:w-5/12 xl:ml-0 xl:relative xl:left-96;
}
.card{
    @apply mt-5;
}
.text{
    @apply font-semibold ml-4 text-2xl md:text-4xl xl:text-5xl;
}
.text-destac{
    @apply text-yellow-400;
}
.paragrafo {
    @apply ml-4 mr-1 font-medium text-lg 2xl:text-3xl;
}
.time{
    @apply border-2 border-yellow-400;
}
.text-time{
    @apply font-medium text-lg p-6 lg:p-5 2xl:text-3xl;
}
.btn{
    @apply text-black bg-yellow-400 text-lg font-black px-20 lg:px-36 2xl:px-48 xl:ml-9 py-3 2xl:py-6 ml-7 rounded-md 2xl:text-4xl;
}
.seta-div{
    @apply inline-block relative top-11 -ml-5 lg:-ml-6 lg:top-12 xl:-ml-7 xl:top-14 2xl:-ml-12 2xl:top-16;
}
.seta{
    @apply w-10 lg:w-12 xl:w-14 2xl:w-20;
}
.line{
    @apply mt-5 lg:mt-7 xl:mt-10;
}
</style>