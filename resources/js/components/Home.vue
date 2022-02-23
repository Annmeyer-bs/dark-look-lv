<template>

    <!--    <main-banner></main-banner>-->
    <div class="container">
        <sub-banner></sub-banner>
        <fashion></fashion>
        <deals-week></deals-week>
        <latest-news></latest-news>
        <brand-logo></brand-logo>
    </div>
</template>

<script>
import MainBanner from "./Main-banner/Main-banner"
import SubBanner from "./Sub-banner/Sub-banner";
import Fashion from "./Fashion/Fashion"
import DealsWeek from "./Deals-week/Deals-week"
import LatestNews from "./Blog/Latest-news"
import BrandLogo from "./Brand/Brand-logo"


export default {
    name: "Home.vue",
    components: {BrandLogo, LatestNews, Fashion, DealsWeek, SubBanner, MainBanner}
}
</script>

<style scoped>

</style>
