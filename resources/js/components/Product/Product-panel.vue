<template>

    <div class="category-page-wrapper mb_30  d-flex flex-row justify-content-between align-items-center">
        <div class="list-grid-wrapper pull-left">
            <div class="btn-group btn-list-grid">
                <button type="button" id="grid-view" class="btn btn-default grid-view"></button>
                <button type="button" id="list-view" class="btn btn-default list-view active"></button>
            </div>
        </div>
        <div class="page-wrapper pull-right d-flex flex-row align-items-center">
            <label class="control-label" for="input-limit">Show :</label>
            <div class="limit">
                <select id="input-limit" class="form-control">
                    <option value="8" selected="selected">08</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
            </div>
            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </div>
        <div class="sort-wrapper pull-right d-flex flex-row align-items-center">
            <label class="control-label" for="input-sort">Sort By :</label>
            <div class="sort-inner">
                <select id="input-sort" class="form-control">
                    <option value="ASC" selected="selected">Default</option>
                    <option value="ASC">Name (A - Z)</option>
                    <option value="DESC">Name (Z - A)</option>
                    <option value="ASC">Price (Low &gt; High)</option>
                    <option value="DESC">Price (High &gt; Low)</option>
                    <option value="DESC">Rating (Highest)</option>
                    <option value="ASC">Rating (Lowest)</option>
                    <option value="ASC">Model (A - Z)</option>
                    <option value="DESC">Model (Z - A)</option>
                </select>
            </div>
            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </div>
    </div>
</template>

<script>
export default {
    name: "Product-panel.vue"
}
</script>

<style scoped>
.category-page-wrapper {
    border: 1px solid #e6e6e6;
    display: inline-block;
    margin-left: 0;
    margin-right: 0;
    width: 100%;
}
.btn-default.grid-view{
    background: rgba(0, 0, 0, 0) url(http://127.0.0.1:8000/storage/img/icons/sprite.png) no-repeat scroll -146px -372px;
}
.btn.btn-default.list-view {
    background: rgba(0, 0, 0, 0) url(http://127.0.0.1:8000/storage/img/icons/sprite.png) no-repeat scroll -180px -399px;
}
.btn.btn-default.list-view, .btn.btn-default.grid-view {
    padding: 12px;
    border: none;
    box-shadow: none;
    outline: none;
    z-index: 0;
    margin: 0 10px 0 0;
}
.form-control {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    box-shadow: none;
    height: auto;
    padding: 0px;
}
.list-grid-wrapper, .page-wrapper, .sort-wrapper {
    padding: 10px;
}

</style>
