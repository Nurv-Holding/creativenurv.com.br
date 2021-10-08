<template>
    <footer 
    data-aos="fade-up"
    data-aos-delay="10"
    data-aos-duration="900"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="center-bottom"
    class="footer">

        <div class="rodape">
            <div>
                <img class="logo-rodape" src="../assets/logo.png" alt="logo">
            </div>

            <div>
                <li class="link-rodape"><a href="">Quem Somos</a></li>
                <li class="link-rodape"><a href="">Método <span class="text-yellow-400">Nurv</span></a></li>
                <li class="link-rodape"><a href="">Aumente suas vendas</a></li>
            </div>

            <div>
                <i class="fab fa-instagram icon-rodape"></i>
            </div>
        </div>

        <div>
            <p class="copy">Copyright ©️ 2021 todos os direitos reservados - Creative Nurv 30.674.201/0001-35</p>
        </div>

    </footer>
</template>

<script>
export default {

}
</script>

<style lang="postcss" scoped>
.footer{
    @apply w-full mt-10;
    background: #131313;
    box-shadow: inset 10px 18px 39px -28px rgba(255, 227, 227, 0.5);
}
.rodape{
    @apply flex justify-between items-center;
}
.logo-rodape{
    @apply w-14 h-16 md:w-24 md:h-24 lg:w-28 lg:h-28 xl:w-32 xl:h-32 2xl:w-32 2xl:h-32;
}
.link-rodape{
    @apply list-none text-sm font-black md:text-base lg:text-lg xl:text-xl;
}
.icon-rodape{
    @apply text-2xl mr-2 md:text-3xl lg:mr-5 xl:text-4xl;
}
.copy {
    @apply text-center text-sm font-semibold xl:text-lg;
}
</style>