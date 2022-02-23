<template>
<div class="filter left-sidebar-widget mb_50">
            <div class="heading-part mtb_20 ">
              <h2 class="main_title">Refinr Search</h2>
            </div>
            <div class="filter-block">
              <p>
                <label for="amount">Price range:</label>
                <input type="text" id="amount" readonly="">
              </p>
              <div id="slider-range" class="mtb_20 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 15%; width: 45%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 15%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div>
              <div class="list-group">
                <div class="list-group-item mb_10">
                  <label>Color</label>
                  <div id="filter-group1">
                    <div class="checkbox">
                      <label>
                        <input value="" type="checkbox"> Red (10)</label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input value="" type="checkbox"> Green (06)</label>
                    </div>
                    <div class="checkbox ">
                      <label>
                        <input value="" type="checkbox"> Blue(09)
                      </label>
                    </div>
                  </div>
                </div>
                <div class="list-group-item mb_10">
                  <label>Size</label>
                  <div id="filter-group3">
                    <div class="checkbox">
                      <label>
                        <input value="" type="checkbox"> Big (3)</label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input value="" type="checkbox"> Medium (2)</label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input value="" type="checkbox"> Small (1)</label>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn">Refine Search</button>
              </div>
            </div>
          </div>
</template>

<script>
export default {
    name: "Filter.vue"
}
</script>

<style scoped>
.mb_50 {
    margin-bottom: 50px;
}
.heading-part {
    border-bottom: 2px solid #424242;
    display: inline-block;
    width: 100%;
}
.main_title {
    font-size: 20px;
    float: left;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
}
.main_title:after {
    content: "";
    display: block;
    margin-bottom: -3px;
    padding: 1px;
}

.list-group {
    padding-left: 0;
    margin-bottom: 20px;
}
.list-group-item:first-child {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
.list-group-item {
    background-color: transparent;
    border: 0 none;
    border-radius: 0;
    overflow: hidden;
    padding: 0px;
}
</style>
