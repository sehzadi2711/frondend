<template>
<h1>{{name}}</h1>
<h1>{{user.name}}</h1>
<h1>{{user.email}}</h1>
<button v-on:click="getData()">Call function </button>
</template>

<script>
export default {
    name: "Child",
    props: {
        name: String,
        user: Object,
        getData: Function,
    }
}
</script>
