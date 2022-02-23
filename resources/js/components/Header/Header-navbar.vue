<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Collection </a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-md-3">
                                <ul>
                                    <li class="dropdown-header">Women's</li>
                                    <li><a href="#">Unique Features</a></li>
                                    <li><a href="#">Image Responsive</a></li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Newsletter Form</a></li>
                                    <li><a href="#">Four columns</a></li>
                                    <li><a href="#">Four columns</a></li>
                                    <li><a href="#">Good Typography</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <ul>
                                    <li class="dropdown-header">Man's</li>
                                    <li><a href="#">Unique Features</a></li>
                                    <li><a href="#">Image Responsive</a></li>
                                    <li><a href="#">Four columns</a></li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Newsletter Form</a></li>
                                    <li><a href="#">Four columns</a></li>
                                    <li><a href="#">Good Typography</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <ul>
                                    <li class="dropdown-header">Children's</li>
                                    <li><a href="#">Unique Features</a></li>
                                    <li><a href="#">Four columns</a></li>
                                    <li><a href="#">Image Responsive</a></li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Newsletter Form</a></li>
                                    <li><a href="#">Four columns</a></li>
                                    <li><a href="#">Good Typography</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <ul>
                                    <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item"><a href="#"><img src="#" class="img-responsive"
                                                                               alt="Banner1"></a>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item"><a href="#"><img src="#" class="img-responsive"
                                                                               alt="Banner1"></a>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item active"><a href="#"><img src="#" class="img-responsive"
                                                                                      alt="Banner1"></a></div>
                                            <!-- End Item -->
                                        </div>
                                        <!-- End Carousel Inner -->
                                    </li>
                                    <!-- /.carousel -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Cart</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Product Detail Page</a></li>
                            <li><a href="#">Single Post</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
import Dropdown from "./Dropdown"

export default {
    name: "Header-navbar.vue",
    components: {Dropdown}
}
</script>

<style scoped>
.navbar {
    width: 100%;
}

li > a {
    padding: 22px 18px;
    border-radius: 0;
    overflow: hidden;
    color: #fff;
    text-transform: uppercase;
}
li {
    margin-top: 0;
}
a:hover{
    background: #fa4251;
    color: white;
}
.navbar-collapse {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #424242;
}
#menu>li>a {
    padding: 22px 18px;
    border-radius: 0;
    overflow: hidden;
    color: #fff;
    text-transform: uppercase;
}
.navbar-nav>li>a {
    font-weight: 500;
}
</style>
