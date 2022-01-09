<template>

    <section 
    data-aos="fade-right"
    data-aos-delay="10"
    data-aos-duration="900"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="center-bottom"
    class="ultima">

        <div class="text-div">

            <img class="linha-botao" src="../assets/botao.svg" alt="linha botão">

            <h2 class="text">CLIQUE NO 
            
            <br> BOTÃO ABAIXO</h2>
           

        </div>

        <div class="div-paragrafo">

            <p class="paragrafo">E deixe suas informações pessoais e de sua empresa para darmos  um direcionamento e atendimento mais adequado para sua necessidade.</p>

        </div>

        <div class="div-botao">

            <a href="https://formulario.creativenurv.com">

                <button class="btn">
                    Quero aumentar minhas vendas com a <br>
                    <span class="font-black">CREATIVE</span>
                    <span class="font-black"> NURV!</span>
                </button>

            </a>

        </div>

    </section>

</template>

<script>


export default {

}
</script>

<style lang="postcss" scoped>
.ultima{
    @apply w-full relative;
}
.text-div{
    @apply flex mt-10 xl:ml-20 2xl:ml-52;
}
.linha-botao{
    @apply mb-9 mr-2 w-20 md:w-28 md:ml-16 lg:ml-32 xl:ml-52 xl:mb-12;
}
.text{
    @apply text-yellow-400 text-2xl font-black md:text-4xl lg:text-5xl 2xl:text-6xl;
}
.div-paragrafo{
    @apply w-64 ml-24 mt-5 md:w-1/2 md:block md:mx-auto lg:mt-10 xl:mt-16 xl:w-5/12;
}
.paragrafo{
    @apply font-bold text-base md:text-2xl lg:text-3xl 2xl:text-4xl;
}
.div-botao{
    @apply mt-5 lg:mt-10;
}
.btn{
    @apply text-black block mx-auto font-bold w-11/12 py-2 px-3 md:w-8/12 md:text-xl lg:text-2xl xl:w-6/12 2xl:text-3xl 2xl:py-7;
    background: #FFD11A;
    box-shadow: inset 4px 4px 14px rgba(255, 255, 255, 0.7), inset -4px -9px 31px #FFFFFF;
    border-radius: 37px;
}
</style>