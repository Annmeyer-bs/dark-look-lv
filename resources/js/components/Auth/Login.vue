<template>
<div class="">

                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="login-form" action="#" method="post" style="">
                        <div class="form-group">
                          <input type="text" name="username" id="username1" tabindex="1" class="form-control" placeholder="Username" value="">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group text-center">
                          <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                          <label for="remember"> Remember Me</label>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="text-center">
                                <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

</template>

<script>
export default {
    name: "Login.vue"
}
</script>

<style scoped>
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 0px;
    font-weight: bold;
}
.btn {
    background: #424242 none repeat scroll 0 0;
    border-radius: 0;
    color: #fff;
    padding: 10px 20px;
    text-transform: uppercase;
    font-weight: 500;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-body {
    padding: 15px;
}

.form-group {
    margin-bottom: 15px;
}
.text-center {
    text-align: center;
}
.col-sm-offset-3 {
    margin-left: 25%;
}
</style>
