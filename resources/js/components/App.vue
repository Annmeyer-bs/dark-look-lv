<template>
    <div>
        <headers></headers>
        <auth></auth>
        <footers></footers>
    </div>
</template>

<script>
import Headers from "./Header/Header"
import Footers from "./Footer/Footer"

import Auth from "./Auth/Auth"

export default {
    name: "App.vue",
    components: {Auth, Headers, Footers},
    data() {
        return {}
    }
}
</script>

<style scoped>

@import url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');
</style>
