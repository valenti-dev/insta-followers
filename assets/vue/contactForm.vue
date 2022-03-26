<template>
    <form class="contact_form" @submit.prevent="submit">
        <div class="fields_wrap">
            <field label="E-mail:">
                <text-input type="email" v-model="email" placeholder="Your E-mail Address" required></text-input>
            </field>
            <field label="Your Message:">
                <text-input type="textarea" v-model="message" placeholder="Please specify your question, concern, or feedback here! Being as specific as possible gets you a faster response." required></text-input>
            </field>
        </div>
        <div class="accept_row">
            <checkbox v-model="news_accept"></checkbox>
            <span class="accept_text">I accept to receive news and promotion e-mails.</span>
        </div>
        <butt class="go_butt">Send A Message</butt>
        <msg-status-popup v-if="success !== null" :success="success" :error="error" @close="reset"></msg-status-popup>
    </form>
</template>

<script>
    import Field from "./field";
    import TextInput from "./textInput";
    import Checkbox from "./checkbox";
    import Butt from "./butt";
    import MsgStatusPopup from "./msgStatusPopup";
    export default {
        name: "contactForm",
        components: {MsgStatusPopup, Butt, Checkbox, TextInput, Field},
        data() {
            return {
                email: '',
                message: '',
                news_accept: true,
                success: null,
                error: '',
            };
        },
        methods: {
            submit() {
                var form_data = new FormData();
                form_data.append('email', this.email);
                form_data.append('text', this.message);
                axios.post('ticket_send.php', form_data).then((response) => {
                    switch(response.data.result) {
                        case 'Error': {
                            this.error = response.data.text;
                            this.success = false;
                        } break;
                        case 'Ok': {
                            this.success = true;
                        } break;
                    }
                });
            },
            reset() {
                this.email = '';
                this.message = '';
                this.success = null;
                this.error = null;
            },
        },
    }
</script>

<style scoped>
    .fields_wrap {
        margin: 0 0 2em;
    }
    .accept_row {
        margin: 0 0 2em;
        line-height: 1.465;
        display: flex;
        align-items: center;
    }
    .accept_row .checkbox {
        margin-right: 0.5em;
    }
    .accept_row .accept_text {
        font-size: 0.875em;
    }
    .butt.go_butt {
        min-width: 16em;
        box-shadow: none;
    }
    @media(max-width: 767px) {
        .fields_wrap {
            margin: 0 0 1.75em;
        }
        .accept_row {
            margin: 0 0 1.25em;
            align-items: flex-start;
        }
        .accept_text {
            font-size: 1em;
            max-width: 15em;
        }
        .butt.go_butt {
            width: 100%;
        }
    }
</style>