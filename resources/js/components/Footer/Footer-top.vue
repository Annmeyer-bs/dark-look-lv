<template>
    <div class="footer-top d-flex flex-row justify-content-between align-items-center mt-5 ">
        <div class="news-head pull-left">
            <h2>Follow Our Updates !</h2>
            <div class="new-desc">Be the First to know about our Fresh Arrivals and much more!</div>
        </div>
        <div class="news-form pull-right">
            <form>
                <div class="form-group required  d-flex flex-row">
                    <input name="email" id="email" placeholder="Enter Your Email" class="form-control input-lg"
                           required="" type="email">
                    <button type="submit" class="btn btn-default btn-lg">Subscribe</button>
                </div>
            </form>
        </div>
    </div>

</template>

<script>
export default {
    name: "Footer-top.vue"
}
</script>

<style scoped>
.form-group  input {
    background: #F5F5F5 none repeat scroll 0 0;
    border: medium none;
    color: #000;
    height: 55px;
    margin: 0;
    padding: 0 20px;
    width: 390px;
}
.form-group  button {
    border: none;
    border-radius: 0;
    background: #000;
    color: #fff;
    text-transform: uppercase;
    box-shadow: none;
    height: 55px;
    float: right;
    width: 180px;
    transition: 0.5s;
    letter-spacing: 0.5px;
}
.new-desc {
    color: #9E9E9E;
}
</style>
