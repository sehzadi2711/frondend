// Events in vue js 
<template>
<h1 v-on:mousemove="getConsole()">Home </h1> 
<button v-on:click="test('btn click once')">click me </button>
<button v-on:dblclick="test('btn click two')">click me </button>
<button v-on:click="getCount()">+ </button>

<h2>{{count}} </h2> 

</template>

<script>
export default {
    name: 'Home1',
    data(){
        return {
            count:0
        }
    },
    methods:{
        test(data){
            alert(data);
        },
        getConsole(){
            console.log('mouse moved');
        },
        getCount(){
            this.count=this.count+1;
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
