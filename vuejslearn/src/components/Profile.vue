
<template>
<h1>Profile Component {{profile}}</h1>
</template>

<script>
import {useRoute} from 'vue-router'
export default {
    name: "Profile",
    data(){
        return {
            profile:''
        }
    },
    mounted(){
        const route= useRoute();
        console.log("route",route.params.name);
        this.profile=route.params.name;
    }
}
</script>
<style>
h1{
    color:orange
}
</style>
