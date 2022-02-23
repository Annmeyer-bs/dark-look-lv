<template>
    <div class="product-grid">
        <div class="item">
            <div class="product-thumb  mb_30">
                <div class="image product-imageblock">
                    <a href="#">
                        <img data-name="product_image" src="storage/img/product/product1.jpg" alt="iPod Classic"
                             title="iPod Classic" class="img-responsive" style="max-width: 300px">
<!--                        <img src="storage/img/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic"-->
<!--                             class="img-responsive" style="max-width: 300px">-->
                    </a>
                    <div class="button-group text-center">
                        <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                        <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                        <div class="compare"><a href="#"><span>Compare</span></a></div>
                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                </div>
                <div class="caption product-detail text-center">
                    <div class="rating">
                        <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-1x"></i>
                            <i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-1x"></i>
                            <i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-1x"></i>
                            <i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-1x"></i>
                            <i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-1x"></i>
                            <i class="fa fa-star fa-stack-x"></i></span>
                    </div>
                    <h6 data-name="product_name" class="product-name">
                        <a href="#" title="Casual Shirt With Ruffle Hem">New
                        LCDScreen and HD Vide..</a></h6>
                    <span class="price">
                        <span class="amount">
                            <span class="currencySymbol">$</span>70.00</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Product.vue"
}
</script>

<style scoped>
.product-grid{
    width: 300px;
}
</style>
