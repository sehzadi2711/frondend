// Props in Vuejs

<template>
<h1>Props in Vuejs</h1>
<button v-on:click="getUsername(userName)">Get Name</button>
{{name}}
<h1>Ref in Vuejs</h1>

<input type="text" ref="input" />
<button v-on:click="getRef()">Click me</button>

</template>

<script>
export default {
    name: "Teacher",
    data() {
        return {
            userName: "Jain",

        }
    },
    props: {
        name: String,
        getUsername: Function,
    },
    methods:{
        getRef(){
            this.$refs.input.focus();
            let val = this.$refs.input.value
            console.log(val)
            this.$refs.input.style.color="red"
        }
    }

}
// how to pass data child component to Parent component 
// ans -> we can use the function for this
</script>
