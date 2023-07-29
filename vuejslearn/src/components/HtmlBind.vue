<template>
<h1 v-html="tag"></h1>
<h1>{{text}}</h1>
</template>

<script>
export default {
    name: "HtmlBind",
    data(){
        return {
            text : "Rinkal",
            tag : "<h1>Rinkal</h1>",
        }
    }
}
</script>
