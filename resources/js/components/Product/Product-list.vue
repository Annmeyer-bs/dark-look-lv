<template>
<div class="d-flex flex-row justify-content-between">
    <product></product>
    <product></product>
    <product></product>
</div>
    <div class="d-flex flex-row justify-content-between">
    <product></product>
    <product></product>
    <product></product>
</div>
</template>

<script>
import Product from "./Product"
export default {
    name: "Product-list.vue",
    components: {Product}
}
</script>

<style scoped>

</style>
