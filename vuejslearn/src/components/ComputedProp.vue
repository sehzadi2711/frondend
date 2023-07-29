//differance with simple operation and computed oprations

<template>
<h1>Computed Property in vuejs</h1>
    <lable> Data :</lable>
    {{ (dollars*rupee)-discount }}
    <br />

    {{getResult}}
    <br />
    <br />
</template>

<script>
export default {
    name: "ComputedProp",
    data() {
        return {
            dollars: 100,
            rupee: 20,
            discount: 25,
        }
    },
    computed:{
        getResult(){
            return (this.dollars*this.rupee)-this.discount;
        }
    }
}
</script>
<style>
h1{
    color:orange
}
</style>
