// Reuse component

<template>
<h1>{{ data.name }}</h1>
<h1>{{ data.email }}</h1>
<button v-on:click="getcompo(data.name)">Alert Name</button>
</template>
<script>
export default{
    name: "User",
    props:{
        data:Object,
        getcompo:Function,
    },
    
}
</script>