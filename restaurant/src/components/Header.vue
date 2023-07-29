<template>
<div class="nav">
    <router-link to="/">Home</router-link> 
    <router-link to="/add-restaurant">Add Restaurant</router-link> 
    <a href="#" v-on:click="logout">Logout</a>
</div>
</template>

<script>
export default {
    name: "Header",
    methods:{
            logout(){
                localStorage.clear();
                this.$router.push({name:'Login'});
        }
    }
}
</script>

<style>
.nav {
    background-color: #111111;
    overflow: hidden;
}

.nav a {
    float: left;
    color: #999;
    text-align: center;
    padding: 20px 18px;
    text-decoration: none;
    font-size: 14px;
    margin-right: 4px;
}

.nav a:hover {
    text-decoration:none;
    color:#EEE;
    padding-bottom:4px;
    border-bottom: 1px solid #EB3656;

}
</style>
