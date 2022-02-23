<template>
<div>
    <advantage-banner></advantage-banner>
    <featured-products></featured-products>
</div>
</template>

<script>
import AdvantageBanner from "./Advantage-banner"
import FeaturedProducts from "../Product/Featured-products"
export default {
    name: "Sub-banner",
    components: {FeaturedProducts, AdvantageBanner}
}
</script>

<style scoped>

</style>
