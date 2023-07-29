<template>
<router-view />
</template>

    
<script>
import Login from './components/Login.vue'

export default {
    name: 'App',
    components: {
        Login
    },
}
</script>

    
<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
}

body {
    padding: 0;
    margin: 0;
}

.logo {
    width: 200px;
}

.register input,
.login input,
.addForm input,
.updateForm input {
    width: 300px;
    height: 40px;
    padding-left: 20px;
    display: block;
    margin-bottom: 30px;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid skyblue;
}

.register button,
.login button,
.addForm button,
.updateForm button {
    width: 320px;
    height: 40px;
    border: 1px solid skyblue;
    background-color: skyblue;
    cursor: pointer;
    color: #fff;
    font-size: 15px;
}
</style>
