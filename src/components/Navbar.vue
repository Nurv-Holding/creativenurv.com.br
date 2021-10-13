<template>

    <header class="header">

        <a href="">
          <img class="logo" src="../assets/logo.png" alt="logo">
        </a>

        <nav class="nav">

            <ul class="nav-list">

                <li class="nav-link"><a href="#">Início</a></li>
                <li class="nav-link"><a href="https://formulario.creativenurv.com">Contato</a></li>

            </ul>

            <div class="nav-social">

                <a class="link-icon" target="_blank" href="https://www.instagram.com/creativenurv/">
                  <i class="fab fa-instagram nav-icon"></i>
                </a>

                <a class="link-icon" target="_blank" href="https://br.linkedin.com/company/creativenurv">
                  <i class="fab fa-linkedin-in nav-icon"></i>
                </a>

                <a class="link-icon" target="_blank" href="https://www.facebook.com/creativenurv/">
                  <i class="fab fa-facebook-f nav-icon"></i>
                </a>

            </div>

        </nav>

    </header>

</template>

<style lang="postcss" scoped>
.header {
    @apply w-full flex justify-between;
}
.logo {
    @apply h-16 md:h-20 xl:h-28 xl:w-28;
}
.nav{
    @apply flex items-center justify-between xl:w-1/4 mr-1;
}
.nav-list {
    @apply flex ;
}
.nav-link{
    @apply p-2 font-semibold hover:text-yellow-400 md:text-xl xl:text-2xl 2xl:text-3xl;
}
.nav-social{
    @apply flex items-center;
}
.link-icon{
    @apply flex items-center px-0.5 md:p-1.5;
}
.nav-icon{
    @apply bg-white text-black rounded-full hover:text-yellow-400 text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl;
    @apply w-6 flex justify-center items-center md:w-7 md:h-7 xl:w-8 xl:h-8 2xl:w-12 2xl:h-12;
}
</style>