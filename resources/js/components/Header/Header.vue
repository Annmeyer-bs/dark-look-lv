<template>
    <header id="header">
        <header-top></header-top>
        <div class="container d-flex flex-row justify-content-between align-items-center">
            <div class="main-search mt_40">
                <input id="search-input" name="search" value="" placeholder="Search"
                       class="form-control input-lg" autocomplete="off" type="text">
                <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span>
            </div>
            <div class="navbar-header"> <a class="navbar-brand" href="index.html">
                <img alt="themini" src="storage/img/logo.png"> </a> </div>
            <div class="shopcart">
                <div id="cart" class="btn-group btn-block mtb_40">
                    <button type="button" class="btn" >
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span id="shippingcart">Shopping cart</span><span id="cart-total">items (0)</span>
                    </button>
                </div>
                <div id="cart-dropdown" class="cart-menu collapse">
                    <ul>
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td class="text-center"><a href="#"><img src="images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                                    <td class="text-left product-name"><a href="#">MacBook Pro</a> <span class="text-left price">$20.00</span>
                                        <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                    </td>
                                    <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#"><img src="images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                                    <td class="text-left product-name"><a href="#">MacBook Pro</a> <span class="text-left price">$20.00</span>
                                        <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                    </td>
                                    <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="text-right"><strong>Sub-Total</strong></td>
                                    <td class="text-right">$2,100.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                    <td class="text-right">$2.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>VAT (20%)</strong></td>
                                    <td class="text-right">$20.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Total</strong></td>
                                    <td class="text-right">$2,122.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <form action="cart_page.html">
                                <input class="btn pull-left mt_10" value="View cart" type="submit">
                            </form>
                            <form action="checkout_page.html">
                                <input class="btn pull-right mt_10" value="Checkout" type="submit">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <header-navbar></header-navbar>
    </header>
</template>

<script>
import HeaderTop from "./Header-top"
import HeaderNavbar from "./Header-navbar"
export default {
    name: "Header.vue",
    components: {HeaderNavbar, HeaderTop}
}
</script>

<style scoped>
header {
    background: #000;
}
.main-search {
    margin-bottom: 0;
    width: 220px;
    position: relative;
}
.main-search .input-lg {
    height: 40px;
    line-height: 20px;
    padding: 0 40px 0 10px;
    border: none;
    border-radius: 0;
    border: 1px solid #424242;
    background-color: #000;
}
.main-search .input-group-btn {
    display: block;
    height: 33px;
    position: absolute;
    right: 0;
    top: 3px;
    width: 40px;
}.main-search .btn-lg {
     font-size: 16px;
     line-height: 18px;
     padding: 8px 13px;
     margin: 0;
     border: none;
     color: #192e3f;
     background-color: transparent;
 }
.navbar-header {
    text-align: center;
}
#cart>.btn {

    line-height: 20px;
    color: #fff;
    padding: 0 0 0 48px;
    border: none;
    border-radius: 0;
    float: right;
}

</style>
