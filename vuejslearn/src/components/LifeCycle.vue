//Life Cycle Methods 
// use for component load
// 4 phase :-

1 - Create
2 - Update
3 - Mount
4 - Unmount

<template>
    <h1>Life Cycle Methods</h1>
    <h1>beforeCreate & Created</h1>
    <h1 ref="count">{{counter}}</h1>
    <button v-on:click="counter=counter+1">Update Count</button>
    
    <h1 ref="user">User Compo</h1>

</template>

<script>
export default {
    name: "LifeCycle",
    data(){
        return {
            counter: 0
        }
    },
    // beforeCreate(){
    //     alert('beforeCreate');
    // },
    // created(){
    //     alert('created');
    // },
    // beforeMount(){
    //     alert('beforeMount');
    //     console.log("beforeMount",this.$el);
    // },
    // mounted(){
    //     alert('mounted');
    //     console.log("mounted",this.$el);
    // },
    // beforeUpdate(){
    //     alert('beforeUpdate');
    //     console.log("beforeUpdate",this.$refs['count'].textContent);
    // },
    // updated(){
    //     alert('updated');
    //     console.log("updated",this.$refs['count'].textContent);
    // },
    beforeUnmount(){
        alert('beforeUnmount');
        console.log("beforeUnmount",this.$refs['user']);
    },
    unmounted(){
        alert('unmounted');
        console.log("unmounted",this.$refs['user']);
    }
}
</script>

<style>
h1 {
    color: orange
}
</style>
