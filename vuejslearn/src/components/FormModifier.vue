<template>
<h1>Form Modifiers</h1>
<form>
    <lable> Data :</lable>
    <input type="text" placeholder="Enter Data" v-model.trim="data"  />
    <input type="text" placeholder="Enter Data" v-model.lazy="data"  />
    <input type="number" placeholder="Enter Data" v-model.number="data"  />
    <h1>Data is :{{  data }}</h1>
    <h1>Data is :{{ typeof(data) }}</h1>

    <br />
    <br />
</form>
</template>

<script>
export default {
    name: "FormModifier",
    data() {
        return {
            data:'',
        }
    },
}
</script>
<style>
h1{
    color:orange
}
</style>
