// Two Way Binding in vue js 
<template>
<h1>Two Way Binding </h1>
<input type="text" v-model="count">
<h2>{{count}} </h2>
<h1>Get Input Vaues </h1>
<input type="text" placeholder="Enter Email" v-model="email"><br /><br />
<input type="password" placeholder="Enter Password" v-model="password"><br /><br />
<button type="button" v-on:click="getData()">Get Values </button>

<h1>Get Checkbox Radiobutton Values </h1>
<lable for="java">Java</lable>
<input type="checkbox" value="java" id="java" v-model="technology" >

<lable for="php">php</lable>
<input type="checkbox" value="php" id="php" v-model="technology" >

<lable for="Vuejs">Vuejs</lable>
<input type="checkbox" value="Vuejs" id="Vuejs" v-model="technology" >

<lable for="ReactJs">ReactJs</lable>
<input type="checkbox" value="ReactJs" id="ReactJs" v-model="technology" >
<h4> Technologies: {{technology}} </h4>

<h4> Who i Am {{gender}} </h4>

<lable for="Male">Male</lable>
<input type="radio" value="Male" id="Male" name="gender" v-model="gender" >

<lable for="Female">Female</lable>
<input type="radio" value="Female" id="Female" name="gender" v-model="gender" >

</template>

<script>
export default {
    name: 'TwoWayBind',
    data() {
        return {
           count:10,
           email:null,
           password:null,
           technology:[],
           gender:null,
        }
    },
    methods:{
        getData(){
            console.log("values ",this.email,this.password);
        }
    } 
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>
h2 {
    color: orange
}
</style>
