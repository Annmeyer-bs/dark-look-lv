<template>
    <div class="row">
        <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
                <div class="icon-right Shipping"></div>
                <h6>Free Shipping</h6>
                <p>Free dedlivery worldwide</p>
            </div>
        </div>
        <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
                <div class="icon-right Order"></div>
                <h6>Order Onlivne</h6>
                <p>Hours : 8am - 11pm</p>
            </div>
        </div>
        <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
                <div class="icon-right Save"></div>
                <h6>Shop And Save</h6>
                <p>For All Spices &amp; Herbs</p>
            </div>
        </div>
        <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
                <div class="icon-right Safe"></div>
                <h6>Safe Shoping</h6>
                <p>Ensure genuine 100%</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "advantage-banner.vue"
}
</script>

<style scoped>
.Shipping, .Order, .Save, .Safe {
    background: transparent url(http://127.0.0.1:8000/storage/img/icons/icon.png) no-repeat scroll 16px 0px;
    overflow: hidden;
    height: 50px;
    width: 70px;
    display: inline-block;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease 0s;
    position: absolute;
}
.Save{
    background-position: 16px -160px;
}
.Order{
    background-position: 16px -80px;
}
.Safe{
    background-position: 16px -240px;
}
.ptb_30 {
    padding-top: 30px;
    padding-bottom: 30px;
}
.feature-i-left, .feature-i-right {
    display: inline-block;
    position: relative;
    width: 100%;
    background: #000;
}
.icon-right {
    left: 0;
}
.feature-i-left {
    padding-left: 75px;
}
h6:hover{
    color:#fa4251;
}
</style>
