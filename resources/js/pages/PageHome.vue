<template>
    <div>
        <div class="container">
            <h1>Home Page</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col mt-3" v-for="post in arrRandom" :key="post.id">
                    <img :src="post.image" :alt="post.title">
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            arrRandom: null,
        }
    },
    created() {
        axios.get('api/posts/random')
            .then(response => this.arrRandom = response.data.results);
    }
}
</script>

<style>

</style>
