<template>
    <div class="free_followers_order_form">
        <div class="title_wrap">
            <div class="title">10 Free Instagram Followers</div>
        </div>
        <div class="content_wrap">
            <div class="fields_wrap">
                <field label="Username:" :error="errors.username">
                    <text-input v-model="username" placeholder="Your Instagram Username" required></text-input>
                </field>
                <field label="E-mail Address:" :error="errors.email">
                    <text-input v-model="email" type="email" placeholder="Your E-mail Address" required></text-input>
                </field>
            </div>
            <div class="accept_row">
                <checkbox v-model="news_accept"></checkbox>
                <span class="accept_text">I accept to receive news and promotion e-mails.</span>
            </div>
            <butt class="go_butt" @click="submit" :disabled="disabled" id="FREE10F">Get Free Followers!</butt>
            <div class="error" v-if="errors.general">{{ errors.general }}</div>
        </div>
        <pay-status-popup v-if="success !== null" :success="success" @close="reset"></pay-status-popup>
    </div>
</template>

<script>
    import TextInput from "./textInput";
    import Checkbox from "./checkbox";
    import Butt from "./butt";
    import Field from "./field";
    import PayStatusPopup from "./payStatusPopup";
    export default {
        name: "freeFollowersOrderForm",
        components: {PayStatusPopup, Field, Butt, Checkbox, TextInput},
        data() {
            return {
                username: '',
                email: '',
                news_accept: true,
                errors: {
                    username: '',
                    email: '',
                    general: '',
                },
                disabled: false,
                success: null,
            };
        },
        mounted() {
            //this.email = localStorage.getItem('saved_email');
        },
        methods: {
            submit() {
                this.disabled = true;
                var username = this.username[0] === '@' ? this.username.substr(1) : this.username;
                var form_data = new FormData();
                form_data.append('cart', 0);
                form_data.append('email', this.email);
                form_data.append('system', 'Instagram');
                form_data.append('service', 'Followers');
                form_data.append('type', 't1');
                form_data.append('count', '10');
                form_data.append('username', username);
                axios.post('create_test_order_v2.php', form_data).then((response) => {
                    switch(response.data.result) {
                        case 'Error': {
                            switch(+response.data.error_code) {
                                case 101: { this.errors.general = response.data.text; } break;
                                case 102: { this.errors.email = response.data.text; } break;
                                case 103: { this.errors.general = response.data.text; } break;
                                case 104: { this.errors.general = response.data.text; } break;
                                case 201: { this.errors.username = response.data.text; } break;
                                case 202: { this.errors.username = response.data.text; } break;
                                case 203: { this.errors.username = response.data.text; } break;
                                case 301: { this.errors.general = response.data.text; } break;
                            }
                        } break;
                        case 'Ok': {
                            this.success = true;
                        } break;
                    }
                }).catch((response) => {}).then(() => {
                    this.disabled = false;
                });
            },
            reset() {
                this.username = '';
                this.email = '';
                this.errors = {
                    username: '',
                    email: '',
                    general: '',
                };
                this.disabled = false;
                this.success = null;
            },
        },
        watch: {
            username() {
                this.errors.username = '';
                this.errors.general = '';
            },
            email() {
                this.errors.email = '';
                this.errors.general = '';
            },
        },
    }
</script>

<style scoped>
    .free_followers_order_form {
        background-color: #F1F8FF;
        border-radius: 0.625em;
    }
    .title_wrap {
        padding: 1.25em;
        text-align: center;
        color: #ffffff;
        border-radius: 0.625em 0.625em 0 0;
        background-color: #81B2FF;
        font-weight: 700;
    }
    .title {
        font-size: 1.625em;
    }
    .content_wrap {
        padding: 1.5em 3.125em 2.25em;
        box-sizing: border-box;
    }
    .fields_wrap {
        margin: 0 0 1.5em;
    }
    .accept_row {
        margin: 0 0 1.75em;
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
        width: 100%;
        box-shadow: none;
    }
    .error {
        font-size: 0.875em;
        margin: 0.25em 0 0;
        color: red;
    }
    @media(max-width: 767px) {
        .title_wrap {
            padding: 1em;
        }
        .title {
            font-size: 1.375em;
        }
        .content_wrap {
            padding: 1.5em 1.25em 2em;
        }
        .fields_wrap {
            margin: 0 0 1.125em;
        }
        .accept_row {
            margin: 0 0 1.625em;
            align-items: flex-start;
        }
        .accept_text {
            font-size: 1em;
            max-width: 15em;
        }
    }
</style>