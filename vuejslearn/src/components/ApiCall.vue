<template>
<h1>Api Call</h1>
<h1>User Data</h1>
<ul class="item" v-for="items in lists" :key="items.id">
<li>{{items.id}}</li>
<li>{{items.email}}</li>
<li>{{items.first_name}}</li>
<li>{{items.last_name}}</li>
<li><img :src="items.avatar"  /></li>

</ul>
</template>

<script>
import axios from 'axios';
export default {
    name: "ApiCall",
    data() {
        return {
            lists: []
        }
    },
    async mounted()
    {
        let result = await axios.get("https://reqres.in/api/users?page=1");
        console.log(result.data.data);
        this.lists = result.data.data;
    }
};
</script>

<style>
h1 {
    color: orange
}
.item{
    display: flex;
}
.item img{
    width:50px;
}
.item li{
    display: inline-block;
    width: 180px;
    border: 1px solid;
    text-align: center;
    padding: 5px;
}
</style>
