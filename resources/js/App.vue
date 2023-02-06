<template>
    <div>
        <Navbar />
        <main>
            <router-view></router-view>
        </main>
        <FooterComponent />
        <!-- <div class="container">
            <h1>Primo componente Vue</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col" v-for="post in arrPosts" :key="post.id">
                    <div class="card h-100">
                        <img :src="post.image" class="card-img-top" :alt="post.title">
                        <div class="card-body">
                            <h5 class="card-title">{{ post.title }}</h5>
                            <p class="card-text">{{ post.excerpt }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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

    data() {
        return {
            arrPosts: [],
        };
    },

    created() {
        axios.get('/api/posts')
        .then(response => this.arrPosts = response.data.results);
    }
}
</script>

<style lang="scss">
@import '~bootstrap/scss/bootstrap';
</style>
