<template>
<Header />
<h1>Welcome to Update Restaurant page</h1>
<form class="updateForm">
    <input type="text" placeholder="Enter Name" name="name" v-model="this.restaurant.name" />
    <input type="text" placeholder="Enter Address" name="address" v-model="this.restaurant.address" />
    <input type="text" placeholder="Enter Contact" name="contact" v-model="this.restaurant.contact" />
    <button v-on:click="updateResto" type="button">Update Restaurant</button>

    <br />
</form>
</template>

<script>
import axios from 'axios';
import Header from './Header.vue'

export default {
    name: "UpdateResto",
    components:{
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
    methods:{
        async updateResto(){
            const result = await axios.put("http://localhost:3000/restaurants/"+this.$route.params.id, {
                name: this.restaurant.name,
                address: this.restaurant.address,
                contact: this.restaurant.contact,
            });
            if (result.status == 200) {
                this.$router.push({
                    name: 'Home'
                });
            }
        }
    },
    async mounted() {
        let user = localStorage.getItem('user-info');
        this.name = JSON.parse(user).name;
        if (!user) {
            this.$router.push({
                name: 'SignUp'
            })
        }
        let result = await axios.get("http://localhost:3000/restaurants/"+this.$route.params.id);
        this.restaurant= result.data;
    }
}
</script>
<style>

</style>
