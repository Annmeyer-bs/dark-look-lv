<template>
    <div class="container">
        <div class="breadcrumb ptb_20 d-flex flex-row justify-content-between">
            <h1>Products</h1>
            <ul class="d-flex flex-row">
                <li><a href="#">Home</a></li>
                <li class="active">Products</li>
            </ul>
        </div>
        <div class="d-flex flex-row ">
            <Sidebar></Sidebar>
            <filter></filter>
            <div class=" shop d-flex flex-column justify-content-between mtb_20">
                <product-panel></product-panel>
                <product-list></product-list>
                <pagination></pagination>

            </div>
        </div>
    </div>

</template>

<script>
import Sidebar from "./Sidebar"
import Pagination from "./Pagination/Pagination"
import ProductPanel from "./Product/Product-panel"
import ProductList from "./Product/Product-list"
import Filter from  "./Filter/Filter"

export default {
    name: "Shop.vue",
    components: {Filter, ProductList, ProductPanel, Pagination, Sidebar}
}
</script>

<style scoped>
.breadcrumb {
    background-image: url(http://127.0.0.1:8000/storage/img/breadcrumb.jpg);
    border-radius: 0;
    display: inline-block;
    padding-left: 20px;
    padding-right: 20px;
    width: 100%;
}

.breadcrumb li {
    font-size: 16px;
    font-weight: 300;
}

.breadcrumb li:first-child::after {
    content: "/";
    display: inline-block;
    text-align: center;
    height: 15px;
    margin: 0;
    width: 30px;
}

a {
    text-decoration: none;
}

a:hover {
    color: white;
}
.mtb_20 {
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 20px;
}
.shop {
    width: 100%;
}

</style>
