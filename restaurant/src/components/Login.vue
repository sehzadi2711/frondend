<template>
<img class="logo" src="../assets/restro-logo.png" />
<h1>Login</h1>
<div class="login">
    <input type="text" placeholder="Enter Email" v-model="email" />
    <input type="password" placeholder="Enter Password" v-model="password" />
    <button v-on:click="login">Login</button>
    <p>
        <router-link to="/sign-up">Sign-Up</router-link>
    </p>
</div>
</template>

<script>
import axios from 'axios';
export default {
    name: "Login",
    data() {
        return {
            email: "",
            password: ""
        }
    },
    methods: {
        async login() {
            let result = await axios.get(
                `http://localhost:3000/students?email=${this.email}&password=${this.password}`, {})
            if (result.status == 200 && result.data.length > 0) {
                localStorage.setItem("user-info", JSON.stringify(result.data[0]));
                this.$router.push({
                    name: 'Home'
                })
            }
            console.log(result);
        }
    },
    mounted() {
        let user = localStorage.getItem('user-info');
        if (user) {
            this.$router.push({
                name: 'Home'
            })
        }
    }
}
</script>

<style>

</style>
