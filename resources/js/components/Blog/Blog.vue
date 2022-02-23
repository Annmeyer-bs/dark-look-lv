<template>
    <div class="owl-item" style="width: 595px;">
        <div class="item">
            <div class="box-holder">
                <div class="thumb post-img">
                    <a href="#">
                        <img src="storage/img/blog/blog_img_01.jpg" alt="themini">
                    </a>
                    <div class="date-time text-center">
                        <div class="day"> 11</div>
                        <div class="month">Aug</div>
                    </div>
                    <div class="post-image-hover"></div>
                    <div class="post-info">
                        <h6 class="mb_10 text-uppercase">
                            <a href="single_blog.html">Fashions fade, style is eternal</a>
                        </h6>
                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper
                            scelerisque. Morbi eu luctus nisl.</p>
                        <div class="view-blog d-flex flex-row justify-content-between">
                            <div class="write-comment pull-left">
                                <a href="single_blog.html"> 0 Comments</a>
                            </div>
                            <div class="read-more pull-right">
                                <a href="single_blog.html"> <i class="fa fa-link"></i>read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Blog.vue"
}
</script>

<style scoped>
img {
    width: 100%;
}
.post-img {
    position: relative;
}
.post-info {
    display: inline-block;
    padding: 25px 0 0;
}
.mb_10 {
    margin-bottom: 10px;
}
a {
    color: #9E9E9E;
    font-size: 16px;
    letter-spacing: 1px;
    text-decoration: none;
}
.post-info h6 a{
    color: #fff;
    font-weight: 700;
}
.view-blog {
    border-top: 1px dashed #424242;
    margin-top: 10px;
    padding-top: 10px;
}
.date-time {
    background: #fff none repeat scroll 0 0;
    color: #fa4251;
    float: right;
    font-size: 12px;
    left: 10px;
    padding: 5px 10px;
    position: absolute;
    text-transform: uppercase;
    top: 10px;
    z-index: 9;
}
</style>
