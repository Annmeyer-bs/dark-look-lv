<template>
    <div class="row mt-5 pb-5" >
        <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Information</h6>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Services</h6>
            <ul>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Wish List</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order History</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Extras</h6>
            <ul>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Gift Certificates</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Newsletter</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Contacts</h6>
            <ul class="address">
                <li>Warehouse &amp; Offices,</li>
                <li>12345 Street name, California USA</li>
                <li>(+024) 666 888</li>
                <li>yourid@domain.com</li>
                <li><a href="#">www.yoursite.com</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "Footer-navbar.vue"
}
</script>

<style scoped>
.footer-title, .footer h6 {
    color: #fff;
    text-transform: uppercase;
    font-size: 20px;
}
a, .address li{
    text-decoration: none;
    color: #9E9E9E;
}
ul, li {
    list-style: none;
    margin-top: 15px;
    padding-left: 0px;
    margin-bottom: 0;
}
</style>
