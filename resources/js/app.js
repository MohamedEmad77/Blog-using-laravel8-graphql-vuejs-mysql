import './bootstrap';
import  Vue from 'vue';
import VueRouter from 'vue-router';
import PostList from './components/PostList';
import Post from './components/Post';
window.Vue = Vue;
Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'index',
        component: PostList
    },
    {
        path: '/post/:id',
        name: 'post',
        component: Post
    }
]

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const router = new VueRouter({routes});

const app = new Vue({
    el: '#app',
    router,
});
