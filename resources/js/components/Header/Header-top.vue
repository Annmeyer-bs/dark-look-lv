<template>
    <div class="header-top">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between align-items-center">
                <div class="col-xs-12 col-sm-4 ">
                    <div class="header-top-left">
                        <div class="work-time"><a href="#">DAYS A WEEK FROM 9:00 AM TO 7:00 PM
                        </a></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <div class="header-top-right d-flex flex-row justify-content-end align-items-center" >
                        <div type="button" class="btn" ><a href="#">My Account</a></div>
                        <dropdown>
                            <template v-slot:trigger>
                                <button type="button" class="btn" id="dropdownMenuOffset">
                                    Language<i class="fa-solid fa-caret-down"></i>
                                </button>
                            </template>

                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">German</a></li>
                        </dropdown>
                        <dropdown>
                            <template v-slot:trigger>
                                <button type="button" class="btn" id="dropdownMenuOffset2">
                                    Currency<i class="fa-solid fa-caret-down"></i>
                                </button>
                            </template>
                            <li><a href="#">€ Euro</a></li>
                            <li><a href="#">£ Pound Sterling</a></li>
                            <li><a href="#">$ US Dollar</a></li>
                        </dropdown>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Dropdown from "./Dropdown.vue"


export default {
    name: "Header-top.vue",
    components: {Dropdown},
    data() {
        return {
        }
    },

}
</script>

<style scoped>
a, a:visited, a:hover {
    text-decoration: none;
    color: #cccccc;
    font-weight: 200;
}

.header-top {
    border-bottom: 1px solid #424242;
    color: #ccc;
    font-weight: 500;
}

.btn {
    color: #ccc;
}




</style>
