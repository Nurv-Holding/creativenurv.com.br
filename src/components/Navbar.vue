<template>

    <header class="header">

        <a href="">
          <img class="logo" src="../assets/logo.png" alt="logo">
        </a>

        <nav class="nav">

            <ul class="nav-list">

                <li class="nav-link"><a href="">Início</a></li>
                <li class="nav-link"><a href="">Contato</a></li>
                <a href="">
                  <i class="fab fa-instagram nav-icon"></i>
                </a>

            </ul>

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
    @apply flex items-center;
}
.nav-list {
    @apply flex ;
}
.nav-link{
    @apply p-2 font-semibold hover:text-yellow-400 md:text-xl xl:text-2xl 2xl:text-3xl;
}
.nav-icon{
    @apply p-2 hover:text-yellow-400 text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl;
}
</style>