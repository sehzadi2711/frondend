<template>
<img class="logo" src="../assets/restro-logo.png" />
<h1>Sign Up</h1>
<div class="register">
    <input type="text" placeholder="Enter Name" v-model="name" />
    <input type="text" placeholder="Enter Email" v-model="email" />
    <input type="password" placeholder="Enter Password" v-model="password" />
    <button v-on:click="signUp">Sign Up</button>
    <p><router-link to="/login">Login</router-link></p>
</div>
</template>

<script>
import axios from 'axios';
export default {
    name: "SignUp",
    data(){
        return {
            name: "",
            email: "",
            password: ""
        }
    },
    methods:{
        async signUp(){
            let result = await axios.post("http://localhost:3000/students",{
                name:this.name,
                email:this.email,
                password:this.password
            });
            console.log(result);
            if(result.status==201){
                localStorage.setItem("user-info",JSON.stringify(result.data));
                this.$router.push({name:'Home'})
            }
            
        }
    },
    mounted(){
        let user = localStorage.getItem('user-info');
        if(user){
            this.$router.push({name:'Home'})
        }
    }
}
</script>
<style>

</style>
