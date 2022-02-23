<template>
    <div class="ptb_60">
        <div class="heading-part mb_10 ">
            <h2 class="main_title">Brand Logo</h2>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <brand></brand>
            <brand></brand>
            <brand></brand>
            <brand></brand>
            <brand></brand>
        </div>
    </div>
</template>

<script>
import Brand from "./Brand"
export default {
    name: "Brand-logo.vue",
    components: {Brand}
}
</script>

<style scoped>
.ptb_60 {
    padding-top: 60px;
    padding-bottom: 60px;
}
.heading-part {
    border-bottom: 2px solid #424242;
    display: inline-block;
    width: 100%;
}
</style>
