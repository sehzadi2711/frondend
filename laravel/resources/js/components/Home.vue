<template>
<h1>Hello Welcome to Home page</h1>
<p>
    <router-link to="/insert">Add Student</router-link>
</p>
<table border="1">
    <tr>
        <td>Sr No.</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Action</td>
    </tr>
    <tr v-for="items in lists" :key="items.id">
        <td>{{items.id}}</td>
        <td>{{items.name}}</td>
        <td>{{items.email}}</td>
        <td>{{items.password}}</td>
        <td><router-link :to="'/update/'+items.id"><button>Update</button></router-link>&nbsp;
        <button v-on:click="deleteResto(items.id)">Delete</button></td>
    </tr>
</table>
</template>

<script>
import axios from 'axios';

export default {
    name: "Home",
    data() {
        return {
            name: "",
            lists: []
        }
    },
    components: {
    },
    methods:{
        async deleteResto(id){
            let result = await axios.delete("http://localhost:8000/api/students/"+id);
            if(result.status == 200){
                this.loadData();
            }
        },
        async loadData(){
            let result = await axios.get("http://localhost:8000/api/students");
            this.lists = result.data.data;
        }
    },
    mounted() {
        this.loadData();
    }
}
</script>

<style>
td{
    width:160px;
    height:40px;
}
</style>
