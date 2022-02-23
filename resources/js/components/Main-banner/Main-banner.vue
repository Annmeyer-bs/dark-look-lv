<template>
    <div class="banner">
        <div class="main-banner owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                    <div class="owl-item active" style="width: 100px;">
                        <div class="item"><a href="#">
                            <img src="storage/img/main-banner/main_banner1.jpg" alt="Main Banner" class="img-responsive">
                        </a></div>
                    </div>
                    <div class="owl-item" style="width: 100px;">
                        <div class="item">
                            <a href="#">
                                <img src="storage/img/main-banner/main_banner2.jpg" alt="Main Banner" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
            </div>
            <div class="owl-dots">
                <div class="owl-dot active"><span></span></div>
                <div class="owl-dot"><span></span></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Main-banner.vue"
}
</script>

<style scoped>

</style>
