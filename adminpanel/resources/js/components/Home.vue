<template>
<h1>Welcome to Home Page {{ name }}</h1>
<p><a href="#" v-on:click="logout">Logout</a></p>

</template>

    
<script>
import axios from 'axios';
export default {
    name: "Home",
    data() {
        return {
            name: ""
        }
    },
    methods: {
        async loadData() {
            let user = localStorage.getItem('admin-info');
            this.name = JSON.parse(user).name;
            if (!user) {
                this.$router.push({
                    name: 'Login'
                })
            }
        },
        logout(){
                localStorage.clear();
                this.$router.push({name:'Login'});
        }
    },
    mounted() {
        this.loadData();
    }
}
</script>
