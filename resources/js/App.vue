<template>
    <div>
        <Navbar />
        <main>
            <router-view></router-view>
        </main>
        <FooterComponent />
    </div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import FooterComponent from './components/FooterComponent.vue';

export default {
    name: 'App',
    components: {
        Navbar,
        FooterComponent,
    },
}
</script>

<style lang="scss">
@import '~bootstrap/scss/bootstrap';
</style>
