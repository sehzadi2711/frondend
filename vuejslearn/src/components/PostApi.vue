<template>
<h1>Post Api</h1>
    <input type="text" placeholder="Enter Email" v-model="email" /> <br />
    <input type="password" placeholder="Enter Password" v-model="password" /> <br />
    <button v-on:click="addUser" type="button">Add User</button><br />

</template>

<script>
import axios from 'axios';
export default {
    name: "PostApi",
    data() {
        return {
                email: "",
                password: "",
        }
    },
    methods:{
        async addUser(){
            console.log(this.email,this.password);
            let result = await axios.post("http://localhost:3000/users",{
                email:this.email,
                password:this.password
            });
            console.log(result);
        }
    }
};
</script>

<style>
h1 {
    color: orange
}
</style>
