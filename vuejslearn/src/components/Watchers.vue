//differance with simple operation and computed oprations

<template>
<h1>Watchers in vuejs</h1>
    <lable> {{ count }}</lable>
    <br />
    <button v-on:click="count=count+1">+ </button>
    <br />
    <button v-on:click="count=count-1">- </button>
    
    <br />
    <br />
</template>

<script>
export default {
    name: "Watchers",
    data() {
        return {
            count: 0
        }
    },
    watch:{
        count(val,prev){
            if(val > 5 && val > prev){
                this.count=0
            }
        }
    }
    
}
</script>
<style>
h1{
    color:orange
}
</style>
