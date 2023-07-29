// its a same like components but better than components

<template>
<h1>Slots in vuejs</h1>
<h1>Multiple Slots in vuejs</h1>

<div class="cart">
    <header>
        <slot name="header"></slot>
    </header>
    <br />
    <content>
        <slot name="main"></slot>
    </content>
    <br />
    <footer>
        <slot name="footer"></slot>
    </footer>
</div>
<br />

<br />
</template>

<script>
export default {
    name: "Slots",
    data() {
        return {

        }
    },

}
</script>

<style scoped>

h1 {
    color: orange
}
.cart{
    border: 1px solid;
    width: 170px;
    text-align: center;
    padding: 20px;
    margin-left:360px;
}
</style>
