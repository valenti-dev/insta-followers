<template>
    <div class="popup" @click="close" :style="{opacity: opacity}">
        <div class="popup_content" @click.stop>
            <button class="popup_close" @click="close"></button>
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: "popup",
        methods: {
            close() {
                this.opacity = 0;
                setTimeout(() => {
                    this.$emit('close');
                }, 300);
            },
        },
        data() {
            return {
                opacity: 0,
            };
        },
        computed: {

        },
        mounted() {
            setTimeout(() => {
                this.opacity = 1;
            });
        }
    }
</script>

<style scoped>
    .popup {
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.4);
        overflow-y: auto;
        width: 100vw;
        height: 100vh;
        z-index: 999;
        transition-property: opacity;
        transition-duration: 0.3s;
    }
    .popup .popup_content {
        margin: 3em auto;
        position: relative;
        max-height: calc(100vh - 3em);
        max-width: 95%;
    }
    .popup .popup_close {
        position: absolute;
        top: 0.75em;
        right: 0.75em;
        width: 0.75em;
        height: 0.75em;
        box-sizing: border-box;
        font-size: inherit;
        background-color: transparent;
        padding: 0;
        margin: 0;
        border: none;
        background-image: url(../img/icons/close-75a149.svg);
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        cursor: pointer;
    }
</style>