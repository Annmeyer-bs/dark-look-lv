<template>
    <div class="row ">
        <div class="col-sm-12 mt_30">
            <!-- =====  PRODUCT TAB  ===== -->
            <div id="product-tab" class="mt_10">
                <div class="heading-part mb_10 ">
                    <h2 class="main_title">Deals of the Week</h2>
                </div>
                <div class="tab-content clearfix box">
                    <div class="tab-pane active" id="nArrivals">
                        <div class="nArrivals owl-carousel owl-loaded  d-flex flex-row  justify-content-between">
                            <product></product>
                            <product></product>
                            <product></product>
                            <product></product>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Product from "../Product/Product"

export default {
    name: "Featured-products.vue",
    components: { Product}
}
</script>

<style scoped>

.heading-part {
    border-bottom: 2px solid #424242;
    display: inline-block;
    width: 100%;
}

#product-tab .nav {
    position: absolute;
    right: 22%;
    top: 26%;
}

.nav > li > a {
    padding: 10px 15px;
    border-radius: 0;
    color: #fff;
    text-decoration: none;
}
.mt_30 {
    margin-top: 30px;
}
</style>
