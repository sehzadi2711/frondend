import InsertStudent from './components/InsertStudent.vue';
import UpdateStudent from './components/UpdateStudent.vue';
import Home from './components/Home.vue'

import { createRouter,createWebHistory } from 'vue-router'

const routes=[
    {
        name:'Home',
        component:Home,
        path:'/'
    },
    {
        name:'InsertStudent',
        component:InsertStudent,
        path:'/insert'
    },
    {
        name:'UpdateStudent',
        component:UpdateStudent,
        path:'/update/:id'
    },
    
]
const router=createRouter({
    history:createWebHistory(),
    routes
})

export default router