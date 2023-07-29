<template>
<img class="logo" src="public\..\..\assets/restro-logo.png" />
<h1>Add Student</h1>
<div class="register">
    <input type="text" placeholder="Enter Name" v-model="name" />
    <input type="text" placeholder="Enter Email" v-model="email" />
    <input type="password" placeholder="Enter Password" v-model="password" />
    <button v-on:click="signUp">Insert</button>
    <p><router-link to="/">Back</router-link></p>
</div>
</template>

<script>
import axios from 'axios';
import {useToast} from 'vue-toast-notification';
export default {
    name: "InsertStudent",
    data(){
        return {
            name: "",
            email: "",
            password: ""
        }
    },
    methods:{
        async signUp(){
            let result = await axios.post("http://localhost:8000/api/students",{
                name:this.name,
                email:this.email,
                password:this.password
            });
            console.log(result);
            if(result.status==200){
                this.$router.push({name:'Home'})
                const $toast = useToast();
                let instance = $toast.success('inserted!');
            }
            
        }
    }
}
</script>
<style>

</style>
