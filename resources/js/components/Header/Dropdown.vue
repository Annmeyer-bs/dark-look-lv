<template>
    <div class="dropdown" ref="dropMenu">
        <div class="dropdown-trigger" @click.stop="visible=!visible">
            <slot name="trigger"></slot>
        </div>

        <transition name="pop-out-quick pop-up">
            <ul v-show="visible" class="ul down-right absolute mt-2 rounded text-white z-10">
                <slot>

                </slot>
            </ul>
        </transition>

    </div>

</template>

<script>
export default {
    name: "Dropdown.vue",
    data() {
        return {
            visible: false,
        }
    },
    created() {
        document.addEventListener('click', this.toggleDropdown.bind());
    },
    methods: {
        toggleDropdown() {
            this.visible = false
        }
    }
}
</script>

<style scoped>
.pop-out-quick-enter-active, .pop-out-quick-leave-active {
    transition: all .4s;
}
.pop-out-quick-enter-active, .pop-out-quick-enter, .pop-out-quick-leave, .pop-out-quick-leave-active {
    opacity: 0;
    transform: translateX(7px);
}
.down-right {
    text-align: start;
    width: 250px;
    background-color: #424242;
    position: absolute;
    z-index: 3;
}
</style>
