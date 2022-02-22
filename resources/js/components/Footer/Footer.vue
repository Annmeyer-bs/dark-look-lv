<template>
    <footer class="footer ">
        <div class="container">
            <footer-top></footer-top>
            <footer-navbar></footer-navbar>
        </div>
    </footer>
</template>

<script>
import FooterNavbar from "./Footer-navbar"
import FooterTop from "./Footer-top"

export default {
    name: "Footer.vue",
    components: {FooterTop, FooterNavbar}
}
</script>

<style scoped>
.footer {
    padding-top: 60px;
    background: #424242;
    color: white;
}
</style>
