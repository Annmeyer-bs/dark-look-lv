<template>
    <div>
        <div class="panel-login panel">
            <div class="panel-heading">
                <div class="row mb_20">
                    <div class="col-xs-6">
                        <a href="#" class="active" id="login-form-link">Login</a>
                    </div>
                    <div class="col-xs-6">
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
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
}
</style>
