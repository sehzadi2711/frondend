<template>
<h1>Sample Form</h1>
<ul>
    <li v-for="item in error" v-bind:key="item">
        {{item}} not Valid
    </li>
</ul>
<form>
    <lable> Email :</lable>
    <input type="text" placeholder="Enter Email" v-model="form.email" />
    <br />
    <br />
    <lable> Password :</lable>
    <input type="password" placeholder="Enter Password" v-model="form.password" />
    <br />
    <br />
    <lable>Gender</lable>
    <br />

    <lable for="Male">Male</lable>
    <input type="radio" value="Male" id="Male" name="gender" v-model="form.gender">

    <lable for="Female">Female</lable>
    <input type="radio" value="Female" id="Female" name="gender" v-model="form.gender">
    <br />
    <br />
    <lable>Technology</lable>
    <br />

    <lable for="java">Java</lable>
    <input type="checkbox" value="java" id="java" v-model="form.technology">

    <lable for="php">php</lable>
    <input type="checkbox" value="php" id="php" v-model="form.technology">

    <lable for="Vuejs">Vuejs</lable>
    <input type="checkbox" value="Vuejs" id="Vuejs" v-model="form.technology">

    <lable for="ReactJs">ReactJs</lable>
    <input type="checkbox" value="ReactJs" id="ReactJs" v-model="form.technology">
    <br />
    <br />
    <lable>Country</lable>
    <br />

    <select v-model="form.country">
        <option>India </option>
        <option>China </option>
        <option>USA </option>
        <option>Japan </option>
    </select>
    <br />
    <br />

    <button v-on:click="login" type="button">Login</button>
</form>
</template>

<script>
import {useRoute} from 'vue-router'

export default {
    name: "Form",
    data() {
        return {
            form: {
                email: "",
                password: "",
                technology: [],
                gender: '',
                country: '',
            },
            error: [],
        }
    },
    methods: {
        login() {
            this.error = [];
            for (const item in this.form) {
                if (this.form[item] === "" || this.form[item].length === 0) {
                    this.error.push(item)
                }
            }
            if (this.error.length === 0) {
                alert("Data has been Submitted");
            }
            console.log("login data", this.form, this.error)
        }
    },

}
</script>

<style>
h1 {
    color: orange
}
</style>
