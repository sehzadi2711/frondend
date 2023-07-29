<template>
<h1>Login</h1>
<div class="login">
    <form @submit.prevent="LoginData">
        <input type="text" placeholder="Enter Email" v-model="student.email" />
        <input type="password" placeholder="Enter Password" v-model="student.password" />
        <button type="submit">Login</button>
    </form>
</div>
</template>

<script>
import axios from 'axios';
export default {
    name: "Login",
    data() {
        return {
            student: {
                email: "",
                password: ""
            }

        }
    },
    methods: {
        LoginData() {
            axios.post("http://127.0.0.1:8000/api/login", this.student)
                .then(
                    ({
                        data
                    }) => {
                        try {
                            if (data.responseStatus == true) {
                                localStorage.setItem("admin-info", JSON.stringify(data.data[0]));
                                this.$router.push({
                                    name: 'Home'
                                });
                                
                            } else {
                                this.$router.push({
                                    name: 'Login'
                                })
                            }

                        } catch (err) {
                            alert("Error, please try again");
                        }
                    }
                )
        }
    },
    
    mounted() {
        let user = localStorage.getItem('admin-info');
        if (user) {
            this.$router.push({
                name: 'Home'
            })
        }
    }
}
</script>

<style>
    @import '../assets/login.css';
</style>
