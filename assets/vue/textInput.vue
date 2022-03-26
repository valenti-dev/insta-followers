<template>
    <label class="text_input_wrap">
        <textarea v-if="custom_type === 'textarea'" class="text_input" :placeholder="placeholder" :required="required" v-model="new_val" @change="$emit('change')" :maxlength="maxlength"></textarea>
        <input v-else :type="custom_type" class="text_input" :placeholder="placeholder" :required="required" v-model="new_val" @change="$emit('change')" :maxlength="maxlength">
    </label>
</template>

<script>

    export default {
        name: "textInput",
        props: {
            type: {
                type: String,
                default: 'text',
            },
            value: {
                type: String,
                default: '',
            },
            placeholder: {
                type: String,
                default: '',
            },
            required: {
                type: Boolean,
                default: false,
            },
            maxlength: {
            },
            disabled: {
                type: Boolean,
                default: false,
            },
        },
        data() {
            return {
                new_val: '',
                custom_type: 'text',
            };
        },
        mounted() {
            this.new_val = this.value;
            this.custom_type = this.type;
        },
        watch: {
            value(val) {
                this.new_val = val;
            },
            new_val(val) {
                this.$emit('input', val);
            },
        },
        methods: {
            phone_validate(data) {
                this.$emit('input', data.isValidByLibPhoneNumberJs ? data.number : '');
            },
        },
    }
</script>

<style scoped>
    .text_input_wrap {
        display: block;
        max-width: 100%;
    }
    .text_input {
        height: 3.125em;
        font-size: inherit;
        font-weight: 400;
        font-family: inherit;
        padding: 0 1em;
        box-sizing: border-box;
        margin: 0;
        border: 1px solid #D6E5F3;
        border-radius: 0.125em;
        color: inherit;
        outline: none;
        display: block;
        width: 100%;
        background-color: #ffffff;
        line-height: 1.465;
    }
    .text_input::placeholder {
        color: #9297AB;
    }
    textarea.text_input {
        height: 6.5em;
        padding: 0.75em 1em;
    }
</style>