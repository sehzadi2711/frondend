import SignUp from './components/SignUp.vue'
import Home from './components/Home.vue'
import Login from './components/Login.vue'
import AddResto from './components/AddResto.vue'
import UpdateResto from './components/UpdateResto.vue'
import { createRouter,createWebHistory } from 'vue-router'

const routes=[
    {
        name:'Home',
        component:Home,
        path:'/'
    },
    {
        name:'SignUp',
        component:SignUp,
        path:'/sign-up'
    },
    {
        name:'Login',
        component:Login,
        path:'/login'
    },
    {
        name:'AddResto',
        component:AddResto,
        path:'/add-restaurant'
    },
    {
        name:'UpdateResto',
        component:UpdateResto,
        path:'/update-restaurant/:id'
    },
]
const router=createRouter({
    history:createWebHistory(),
    routes
})

export default router