<template>

    <section 
    data-aos="fade-up"
    data-aos-offset="10"
    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
    class="metodo">

        <div class="card">
            <h2 class="text">Conheça o método</h2>
            <h2 class="text">radical de vendas</h2>
            <h2 class="text">que fará a sua</h2>
            <h2 class="text">empresa alcançar o</h2>
            <h2 class="final-text">alto nível.</h2>
        </div>

        <div class="button">
            <a href="">
                <button class="btn">
                    <span>Acesse o método NURV</span>
                    <i class="fas fa-angle-double-right btn-icon"></i>
                </button>
            </a>
        </div>

    </section>
  
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init();
</script>

<style lang="postcss" scoped>
.metodo{
    @apply w-full grid grid-cols-1 px-7 md:grid-cols-2 xl:py-24 xl:px-20;
}
.card{
    @apply mt-10;
}
.button{
    @apply mt-10;
}
.text{
    @apply text-3xl font-bold md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl;
}
.final-text{
    @apply text-yellow-400 text-3xl font-black md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl;
}
.btn{
    @apply text-blue-600 font-black md:mt-20 md:ml-7 xl:mt-20 rounded-2xl px-7 py-5 2xl:px-20 2xl:py-10 flex hover:text-black lg:text-2xl 2xl:text-3xl 2xl:rounded-3xl;
    background: #FFD11A;
    border-radius: 15px;
}
.btn-icon{
    @apply ml-1 text-base lg:text-2xl xl:text-3xl;
}
</style>