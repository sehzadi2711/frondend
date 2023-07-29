// Props in Vuejs

<template>
<h1>Props in Vuejs</h1>
{{name}}
</template>
<script>
export default{
    name: "Student",
    props:{
        name:String,
    }
}
</script>