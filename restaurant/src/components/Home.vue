<template>
<Header />
<h1>Hello {{ name }} Welcome to Home page</h1>
<table border="1">
    <tr>
        <td>Sr No.</td>
        <td>Restaurant</td>
        <td>Address</td>
        <td>Contact</td>
        <td>Action</td>
    </tr>
    <tr v-for="items in lists" :key="items.id">
        <td>{{items.id}}</td>
        <td>{{items.name}}</td>
        <td>{{items.address}}</td>
        <td>{{items.contact}}</td>
        <td><router-link :to="'/update-restaurant/'+items.id"><button>Update</button></router-link>
        <button v-on:click="deleteResto(items.id)">Delete</button>
        </td>
    </tr>
</table>
</template>

<script>
import axios from 'axios';
import Header from './Header.vue'

export default {
    name: "Home",
    data() {
        return {
            name: "",
            lists: []
        }
    },
    components: {
        Header,
    },
    methods:{
        async deleteResto(id){
            let result = await axios.delete("http://localhost:3000/restaurants/"+id);
            if(result.status == 200){
                this.loadData();
            }
        },
        async loadData(){
            let user = localStorage.getItem('user-info');
        this.name = JSON.parse(user).name;
        if (!user) {
            this.$router.push({
                name: 'SignUp'
            })
        }
        let result = await axios.get("http://localhost:3000/restaurants");
        this.lists = result.data;
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
