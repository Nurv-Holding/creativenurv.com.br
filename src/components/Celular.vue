<template>
    <section 
    data-aos="fade-right"
    data-aos-delay="10"
    data-aos-duration="900"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="center-bottom"
    class="celular">

        <div>
            <img class="img-celular" src="../assets/celular.png" alt="">
        </div>

        <div>

            <div class="text-div">

                <p class="paragrafo">
                    Atualmente, muitas empresas e profissionais de Marketing prometem<span class="item-paragrafo">“RESULTADOS CATÁSTROFICOS".</span>
                </p>

                <p class="paragrafo">
                    Mas nós, antes de determinar se o seu projeto terá <span class="item-paragrafo">sucesso</span> ou não, seguiremos alguns pré- requisitos.
                </p>

                <p class="paragrafo">
                    Então propomos o seguinte:
                    se pudermos te ajudar, assim o faremos. Caso contrário, daremos nosso feedback mais sincero e diremos exatamente o que faríamos se estivéssemos em seu lugar.
                </p>
                
                <div>

                    <p class="text-item">
                        <i class="fas fa-angle-right seta"></i>
                        <span>Gestão de processos de vendas;</span>
                    </p>

                    <p class="text-item">
                        <i class="fas fa-angle-right seta"></i>
                        <span class="item-option">Controle</span> do crescimento da sua empresa;
                    </p>

                    <p class="text-item">
                        <i class="fas fa-angle-right seta"></i>
                        <span>Escalabilidade do negócio;</span>
                    </p>

                    <p class="text-item">
                        <i class="fas fa-angle-right seta"></i>
                        <span>Relatórios de vendas e investimento em tempo real;</span>
                    </p>

                    <p class="text-item">
                        <i class="fas fa-angle-right seta"></i>
                        <span>Protagonismo e proatividade da equipe NURV.</span>
                    </p>

                </div>

            </div>

        </div>

    </section>

</template>

<script>

export default {

}
</script>

<style lang="postcss" scoped>
.celular{
    @apply w-full grid grid-cols-1 md:grid-cols-2;
}
.text-div{
    @apply px-4 md:p-5 md:mt-16 md:border md:border-solid md:border-blue-600 md:rounded-xl lg:mt-32 xl:relative xl:top-10 xl:w-11/12 xl:px-10 2xl:py-16;
}
.paragrafo{
    @apply mt-3 font-semibold text-lg lg:mt-4 lg:text-xl xl:text-2xl 2xl:text-3xl;
}
.text-item{
    @apply mt-3 lg:mt-2 text-white font-black text-sm lg:text-lg xl:text-xl 2xl:text-3xl;
}
.seta{
    @apply text-yellow-400 lg:text-xl xl:text-3xl;
}
.item-option{
    @apply text-yellow-400;
}
.item-paragrafo{
    @apply font-black;
}
.img-celular{
    @apply w-full h-full mt-10 xl:mt-0 xl:w-5/6;
}
</style>