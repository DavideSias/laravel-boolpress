require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import PageHome from './pages/PageHome';
import PageAbout from './pages/PageAbout';
import PagePosts from './pages/PagePosts';
import PagePost from './pages/PagePost';
import Page404 from './pages/Page404';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'home',
        component: PageHome,
    },
    {
        path: '/about',
        name: 'about',
        component: PageAbout,
    },
    {
        path: '/posts',
        name: 'postsIndex',
        component: PagePosts,
    },
    {
        path: '/post/:slug',
        name: 'postsShow',
        component: PagePost,
        props: true,
    },
    {
        path: '*',
        name: 'page404',
        component: Page404,
    }
]

const router = new VueRouter({
    mode: 'history',
    routes,
});

new Vue({
    el: '#root',
    render: h => h(App),
    router,
});
