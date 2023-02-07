<template>
    <div>
        <div class="container" v-if="objPost">
            <h1>{{ objPost.title }}</h1>
            <h2>Categoria: {{ objPost.category.name }}</h2>
            <div>
                Tags: <span v-for="tag in objPost.tags" :key="tag.id">- {{ tag.name }} </span>
            </div>
            <img :src="objPost.image" class="card-img-top" :alt="objPost.title" />
            <p>
              {{ objPost.content }}
            </p>
        </div>
    </div>
  </template>

  <script>
  export default {
    props: [
        'slug',
    ],
    data() {
        return {
            objPost: null,
        };
    },

    created() {
        axios.get('/api/posts/' + this.slug)
        .then(response => this.objPost = response.data.results);
    }
  }
  </script>

  <style>

  </style>
