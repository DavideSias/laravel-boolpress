<template>
    <div>
        <h1>Home Page</h1>
        <div v-for="post in arrRandom" :key="post.id">
            <img :src="post.image" :alt="post.title">
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
