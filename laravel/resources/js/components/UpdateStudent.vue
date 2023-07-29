<template>
<h1>Update Student</h1>
<form class="updateForm">
    <input type="text" placeholder="Enter Name" name="name" v-model="this.student.name" />
    <input type="text" placeholder="Enter Email" name="email" v-model="this.student.email" />
    <input type="password" placeholder="Enter Password" name="password" v-model="this.student.password" />

    <button v-on:click="updateStudent" type="button">Update</button>
    <p><router-link to="/">Back</router-link></p>

    <br />
</form>
</template>

<script>
import axios from 'axios';

export default {
    name: "updateStudent",
    data() {
        return {
            student: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    methods:{
        async updateStudent(){
            const result = await axios.put("http://localhost:8000/api/students/"+this.$route.params.id, {
                name: this.student.name,
                email: this.student.email,
                password: this.student.password,
            });
            if (result.status == 200) {
                this.$router.push({
                    name: 'Home'
                });
            }
        }
    },
    async mounted() {
        let result = await axios.get("http://localhost:8000/api/students/"+this.$route.params.id);
        this.student= result.data.data;
    }
}
</script>
<style>

</style>
