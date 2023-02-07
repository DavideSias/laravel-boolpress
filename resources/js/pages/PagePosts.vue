<template>
    <div>
        <h1>Index Posts</h1>
        <div class="container">
            <h1>Primo componente Vue</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
                <div class="col" v-for="post in results.data" :key="post.id">
                    <div class="card h-100">
                        <img :src="post.image" class="card-img-top" :alt="post.title">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ post.title }}</h5>
                            <p class="card-text flex-grow-1">{{ post.excerpt }}</p>
                            <router-link :to="{ name: 'postsShow', params: { slug: post.slug } }"
                                class="btn btn-success">Visita</router-link>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="..." class="mt-5">
                <ul class="pagination">
                    <li class="page-item" :class="{disabled: results.current_page == 1}" @click="changePage(results.current_page - 1)">
                        <span class="page-link">Previous</span>
                    </li>

                    <li v-for="page in results.last_page" :key="page" class="page-item"
                        :class="{ active: results.current_page == page }" @click="changePage(page)">
                        <span class="page-link">
                            {{ page }}
                        </span>
                    </li>

                    <li class="page-item" :class="{disabled: results.current_page == results.last_page}" @click="changePage(results.current_page + 1)">
                        <span class="page-link">Next</span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            results: [],
        };
    },

    methods: {
        changePage(page) {
            axios.get('/api/posts?page=' + page)
                .then(response => this.results = response.data.results);
        }
    },

    created() {
        this.changePage(1)
    }
}
</script>

<style>

</style>
