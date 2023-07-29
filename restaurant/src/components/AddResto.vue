<template>
<Header />
<h1>Welcome to Add Restourant Page</h1>
<form class="addForm">
    <input type="text" placeholder="Enter Name" name="name" v-model="this.restaurant.name" />
    <input type="text" placeholder="Enter Address" name="address" v-model="this.restaurant.address" />
    <input type="text" placeholder="Enter Contact" name="contact" v-model="this.restaurant.contact" />
    <button v-on:click="addResto" type="button">Add New Restaurant</button>

    <br />
</form>
</template>

<script>
import axios from 'axios';
import Header from './Header.vue'

export default {
    name: "AddResto",
    components: {
        Header,
    },
    data() {
        return {
            restaurant: {
                name: '',
                address: '',
                contact: ''
            }
        }
    },
    mounted() {
        let user = localStorage.getItem('user-info');
        this.name = JSON.parse(user).name;
        if (!user) {
            this.$router.push({
                name: 'SignUp'
            })
        }
    },
    methods: {
        async addResto() {
            const result = await axios.post("http://localhost:3000/restaurants", {
                name: this.restaurant.name,
                address: this.restaurant.address,
                contact: this.restaurant.contact,
            });
            if (result.status == 201) {
                this.$router.push({
                    name: 'Home'
                });
            }
        }
    }

}
</script>

<style>

</style>
