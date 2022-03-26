<template>
    <div class="field">
        <div class="label" v-if="label">{{ label }}</div>
        <div class="input">
            <slot></slot>
        </div>
        <div class="error" v-if="error">{{ error }}</div>
    </div>
</template>

<script>
    export default {
        name: "field",
        props: {
            label: {
                type: String,
                default: '',
            },
            error: {},
        },
    }
</script>

<style scoped>
    .field:not(:last-child) {
        margin-bottom: 1.25em;
    }
    .label {
        font-weight: 700;
        line-height: 1.465;
        margin: 0 0 0.375em;
    }
    .error {
        font-size: 0.875em;
        margin: 0.25em 0 0;
        color: red;
    }
</style>