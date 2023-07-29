// If Else Statement in vue js 
<template>
<h1 v-if="show">If Statement </h1>
<h1 v-else>Else Statement </h1>

<button v-on:click="show=!show">Toogle </button>

<h1>For Loop </h1>
<ul>
    <li v-for="item in technology" :key="item">
        {{item}}

    </li>
</ul>
<br />
<br />
<ul>
    <li v-for="item in users" :key="item.email">
        Name : {{item.name}}
        Email : {{item.email}}

    </li>
</ul>
</template>

<script>
export default {
    name: 'IfElse',
    data() {
        return {
            show: false,
            technology: ['java', 'php', 'node', 'html'],
            users: [
                {
                    name: "Rinkal",
                    email: "abc@gmail.com"
                },
                {
                    name: "yash",
                    email: "yash@gmail.com"
                },
                {
                    name: "Bhavin",
                    email: "bhavin@gmail.com"
                }
            ]
        }
    },
}
</script>

<style scoped>
h2 {
    color: orange
}
ul.li {
  text-align: center;
  margin-top: 60px;
}
</style>
