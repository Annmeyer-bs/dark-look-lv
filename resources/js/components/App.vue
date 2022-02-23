<template>
    <div class="body">
        <headers></headers>
<!--        <div class="container d-flex flex-row mt-3 mb-5">-->
<!--            <sidebar></sidebar>-->
<!--            <auth></auth>-->
<!--        </div>-->
        <shop></shop>

        <footers></footers>
    </div>
</template>

<script>
import Headers from "./Header/Header"
import Footers from "./Footer/Footer"

import Auth from "./Auth/Auth"
import Sidebar from "./Sidebar"
import Home from "./Home"
import Shop from "./Shop"

export default {
    name: "App.vue",
    components: {Shop, Home, Sidebar, Auth, Headers, Footers},
    data() {
        return {}
    }
}
</script>

<style scoped>

@import url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');

.body {
    background: black;
    letter-spacing: 0.5px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 24px;
    color: #9E9E9E;
    font-size: 14px;
}

</style>
