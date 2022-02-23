<template>
    <div class="col-sm-12 mtb_10">

        <div id="Blog" class="mt_50">
            <div class="heading-part mb_10 ">
                <h2 class="main_title">Latest News</h2>
            </div>
            <div class="blog-contain box">
                <div class="blog d-flex flex-row justify-content-between">

                    <blog></blog>
                    <blog></blog>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import Blog from "./Blog"

export default {
    name: "Latest-news.vue",
    components: {Blog}
}
</script>

<style scoped>
.mt_50 {
    margin-top: 50px;
}
</style>
