<template>
        <button class="butt" @click="click" :disabled="disabled" v-if="!href" :class="{loading: loading}">
            <span class="load_indicator" v-if="loading" :style="{width: (loading+'%')}"></span>
            <span class="butt_label">
                <template v-if="loading">
                    <span style="color: #292E43;">{{ loading }}%</span>
                </template>
                <template v-else>
                    <slot></slot>
                </template>
            </span>
        </button>
        <a class="butt" @click="click" :disabled="disabled" v-else :href="href" :class="{loading: loading}">
            <span class="load_indicator" v-if="loading" :style="{width: (loading+'%')}"></span>
            <span class="butt_label">
                <template v-if="loading">
                    <span style="color: #292E43;">{{ loading }}%</span>
                </template>
                <template v-else>
                    <slot></slot>
                </template>
            </span>
        </a>
</template>

<script>
    export default {
        name: "butt",
        props: {
            disabled: {
                type: Boolean,
                default: false,
            },
            href: {
                type: String,
                default: '',
            },
            loading: {},
        },
        methods: {
            click(event) {
                this.$emit('click', event);
            },
        },
    }
</script>

<style scoped>
    .butt {
        margin: 0;
        display: inline-flex;
        align-items: center;
        padding: 0 2.5em;
        height: 3.125em;
        background-color: #81B3FF;
        cursor: pointer;
        color: #FFFFFF;
        font-size: inherit;
        font-family: inherit;
        font-weight: 400;
        max-width: 100%;
        text-align: center;
        justify-content: center;
        border-radius: 1.5625em;
        box-sizing: border-box;
        text-decoration: none;
        line-height: 1.46;
        border: 1px solid #81B3FF;
        position: relative;
        transition-property: box-shadow, background-color, color;
        transition-duration: 0.3s;
    }
    .butt_label {
        font-size: 1em;
    }
    .butt:not(.loading):hover {
        background-color: #ffffff;
        color: #81B3FF;
    }
    .butt:not(.loading):disabled {
        cursor: not-allowed;
        opacity: 0.5;
    }
    /*go_butt*/
    .butt.go_butt:not(.loading) {
        box-shadow: 0.25em 1em 2.5em rgba(30, 35, 66, 0.15);
        height: 3.75em;
        border: none;
        border-radius: 1.875em;
        padding: 0 4.375em 0 1.5em;
        font-weight: 500;
        justify-content: space-between;
        text-align: left;
    }
    .butt.go_butt:not(.loading):active {
        box-shadow: none;
    }
    .butt.go_butt:not(.loading):hover {
        color: #ffffff;
        background-color: #63A0FD;
    }
    .butt.go_butt:not(.loading):after {
        content: '';
        display: block;
        width: 1.625em;
        height: 1.625em;
        right: 1.25em;
        top: 50%;
        transform: translate(0, -50%);
        background-image: url(../img/icons/arrow-right-fff.svg);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        position: absolute;
    }
    /*transparent*/
    .butt.transparent {
        background-color: transparent;
        color: #292E43;
    }
    .butt:not(.loading).transparent:hover {
        background-color: #81B3FF;
        color: #ffffff;
    }
    /*lg*/
    .butt.lg {
        height: 3.75em;
        border-radius: 1.875em;
        font-weight: 500;
    }
    /*loading*/
    .butt.loading {
        background-color: #ffffff;
        overflow: hidden;
        border: 0.125em solid #81B3FF;
        z-index: 1;
    }
    .load_indicator {
        position: absolute;
        height: calc(100% + 0.5em);
        display: block;
        z-index: -1;
        background-color: #81B3FF;
        top: 50%;
        left: 0;
        transform: translate(0, -50%);
        transition-property: width;
        transition-duration: 0.3s;
    }
</style>