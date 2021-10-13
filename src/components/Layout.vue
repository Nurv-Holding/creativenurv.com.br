<template>
    <section class="section">
        <slot />
    </section>
</template>

<style lang="postcss" scoped>
.section{
    @apply w-full grid grid-cols-1 lg:grid-cols-2;
}
</style>