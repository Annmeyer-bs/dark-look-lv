<template>
    <div id="column-left" class="sidebar">
        <div id="category-menu" class="navbar" aria-expanded="true" style="" role="button">
            <div class="nav-responsive mb-4">
                <div class="heading-part">
                    <h2 class="main_title">Top category</h2>
                </div>
                <ul class="nav main-navigation d-flex flex-column">
                    <li><a href="#">Appliances</a></li>
                    <li><a href="#">Mobile Phones</a></li>
                    <li><a href="#">Tablet PC &amp; Accessories</a></li>
                    <li><a href="#">Consumer Electronics</a></li>
                    <li><a href="#">Computers &amp; Networking</a></li>
                    <li><a href="#">Electrical &amp; Tools</a></li>
                    <li><a href="#">Apparel</a></li>
                    <li><a href="#">Bags &amp; Shoes</a></li>
                    <li><a href="#">Toys &amp; Hobbies</a></li>
                    <li><a href="#">Watches &amp; Jewelry</a></li>
                    <li><a href="#">Home &amp; Garden</a></li>
                    <li><a href="#">Health &amp; Beauty</a></li>
                    <li><a href="#">Outdoors &amp; Sports</a></li>
                </ul>
            </div>
        </div>
        <div class="left_banner left-sidebar-widget mt_30 mb_40">
            <a href="#"><img src="storage/img/left1.jpg" alt="Left Banner" class="img-responsive"></a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Sidebar.vue"
}
</script>

<style scoped>
.sidebar {
    background: black;
    max-width: 300px;
}
a {
    text-decoration: none;
    border-radius: 0;
    color: #fff;
}
a:hover{
    color:#fa4251;
}
#column-left .nav>li>a {
    padding: 10px 0px;
}
.heading-part {
    border-bottom: 2px solid #424242;
    display: inline-block;
    width: 100%;
}
.main_title {
    font-size: 20px;
    float: left;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
}
#column-left .nav>li {
    border-bottom: 1px dashed #424242;
}
#column-left .nav>li:last-child {
    border-bottom: none;
}
.navbar {
    width: 100%;
    display: block;
}
</style>
