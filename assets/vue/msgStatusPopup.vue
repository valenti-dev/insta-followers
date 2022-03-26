<template>
    <div class="msg_status_popup">
        <div class="content">
            <button class="close_butt" @click.prevent="close"></button>
            <template v-if="success">
                <img class="icon" alt="" src="/img/icons/thanks-icon.svg">
                <div class="title">
                    Thanks for question
                </div>
                <div class="desc">
                    We will start fulfilling your order according to its description. If there will be any problems, we will e-mail you.
                </div>
            </template>
            <template v-else>
                <div class="title">
                    Question error
                </div>
                <div class="desc" v-if="error" v-html="error"></div>
            </template>
        </div>
    </div>
</template>

<script>
    import Butt from "./butt";
    export default {
        name: "msgStatusPopup",
        components: {Butt},
        props: {
            success: {
                type: Boolean,
                default: false,
            },
            error: {
                type: String,
            },
        },
        methods: {
            close() {
                this.$emit('close');
            },
        },
    }
</script>

<style scoped>
    .msg_status_popup {
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
    }
    .content {
        margin: auto;
        position: relative;
        max-height: 100vh;
        max-width: 90%;
        width: 28.5em;
        background-color: #ffffff;
        padding: 3em 3.5em;
        border-radius: 0.625em;
        text-align: center;
        box-sizing: border-box;
    }
    .close_butt {
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
        background-image: url(/img/icons/close-c8d1da.svg);
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        cursor: pointer;
    }
    .title {
        text-align: center;
        font-weight: 900;
        font-size: 2em;
        line-height: 1.235;
        margin: 0 0 0.5em;
    }
    .desc {
        line-height: 1.575;
        font-size: 1.125em;
        margin: 0 0 1.5em;
        text-align: center;
    }
    .desc:last-child {
        margin-bottom: 0;
    }
    .icon {
        display: block;
        margin: 0 auto 1.5em;
    }
    .butt.go_butt {
        width: 12.5em;
        box-shadow: none;
    }
    @media(max-width: 767px) {
        .msg_status_popup {
            top: 5em;
            box-sizing: border-box;
            border-top: 1px solid #D9E6F3;
            background-color: #ffffff;
            height: calc(100vh - 5em);
            display: block;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .content {
            box-shadow: none;
            margin: 0 auto;
            position: static;
            padding: 2em 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100%;
        }
        .title {
            margin: 0 0 0.5em;
        }
        .desc {
            margin: 0 0 2.25em;
        }
        .butt.go_butt {
            width: 100%;
        }
    }
</style>