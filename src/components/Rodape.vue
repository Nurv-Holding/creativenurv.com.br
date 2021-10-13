<<<<<<< HEAD
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

                <!-- <li class="link-rodape"><a href="">Quem Somos</a></li> -->
                <li class="link-rodape"><a href="https://formulario.creativenurv.com">Método <span class="text-yellow-400">Nurv</span></a></li>
                <li class="link-rodape"><a href="https://formulario.creativenurv.com">Aumente suas vendas</a></li>

            </div>

            <div class="footer-social"> 

                <a class="link-icon" target="_blank" href="https://www.instagram.com/creativenurv/">
                  <i class="fab fa-instagram footer-icon"></i>
                </a>

                <a class="link-icon" target="_blank" href="https://br.linkedin.com/company/creativenurv">
                  <i class="fab fa-linkedin-in footer-icon"></i>
                </a>

                <a class="link-icon" target="_blank" href="https://www.facebook.com/creativenurv/">
                  <i class="fab fa-facebook-f footer-icon"></i>
                </a>
  

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
    @apply text-center text-sm;
}
.footer-social{
    @apply flex items-center xl:mr-5;
}
.link-icon{
    @apply flex items-center px-0.5 md:p-1.5;
}
.footer-icon{
    @apply bg-white text-black rounded-full hover:text-yellow-400 text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl;
    @apply w-6 flex justify-center items-center md:w-7 md:h-7 xl:w-8 xl:h-8 2xl:w-12 2xl:h-12;
}
</style>