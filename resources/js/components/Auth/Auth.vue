<template>
    <div class="auth ">
        <div class="panel-login panel">
            <div class="panel-heading">
                <div class="mb_20 d-flex flex-row justify-content-between ">
                    <div class="">
                        <a href="#" class="active" id="login-form-link">Login</a>
                    </div>
                    <div class="">
                        <a href="#" id="register-form-link" class="">Register</a>
                    </div>
                </div>
                <hr>
            </div>
            <login></login>
            <registration></registration>
        </div>
    </div>
</template>

<script>
import Login from "./Login"
import Registration from "./Registration"

export default {
    name: "Auth.vue",
    components: {Registration, Login}
}
</script>

<style scoped>
.auth {
    margin-left: 25%;
    width: 40%;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
}
a {
    text-decoration: none;
}
a.active {
    color: #000;
}
.mb_20 {
    margin-bottom: 20px;
}

</style>
