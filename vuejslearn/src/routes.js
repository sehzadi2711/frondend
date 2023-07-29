import {createWebHistory,createRouter} from 'vue-router'
import Home from './components/Home.vue'
import Profile from './components/Profile.vue'
import Login from './components/Login.vue'
import PageNotFound from './components/PageNotFound.vue'
import ApiCall from './components/ApiCall.vue'
import PostApi from './components/PostApi.vue'

const routes=[
    {
        name:'Home',
        path:'/',
        component:Home
    },
    {
        name:'Profile',
        path:'/profile/:name',
        component:Profile
    },
    {
        name:'Login',
        path:'/login',
        component:Login
    },
    {
        name:'ApiCall',
        path:'/api',
        component:ApiCall
    },
    {
        name:'PostApi',
        path:'/apipost',
        component:PostApi
    },
    {
        name:'NotFound',
        path:'/:pathMatch(.*)*',
        component:PageNotFound
    },
];
const router = createRouter({
    history:createWebHistory(),
    routes
});
export default router;