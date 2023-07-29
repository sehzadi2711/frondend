// first component  
<template>
<h2>This is my first component</h2>
<h2>{{ 10+10 }}</h2>
<h2>{{ "Hello Rinkal".length }}</h2>
<h2>Email {{ email }}</h2>
<h2>Name : {{ getName() }}</h2>
<h2>Name : {{ getMethodName("Yash") }}</h2>
<h2>Method 1 : {{ getMethodName("Bhavin") }}</h2>
<h2>Method 2 : {{ getData().email }}</h2>
</template>

    // interpolation
    // data
    // methods

<script>
export default {
    name: 'Home',
    data() {
        return {
            email: "rin@gmail.com",
            //pass functions in data
            getName: function () {
                return "rinkal jain"
            }
        }
    },
    methods: {
        //call methods.

        getMethodName(name) {
            return name;
        },
        getData() {
            return {
                name: "rinkal jain",
                email: this.email
            }

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
