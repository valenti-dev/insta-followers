<template>
        <div class="order_form">
            <a href="/pricing" class="close_butt" @click="close"></a>
            <template v-if="step === 1">
                <template v-if="accounts.length && !step1.new_account">
                    <div class="title">Choose account</div>
                    <div class="desc">
                        <a href="#" @click.prevent="step1.new_account = true">Choose account</a>
                    </div>
                    <div class="accounts_list_wrap">
                        <div class="accounts_list">
                            <vue-scroll :ops="scrollbar">
                                <div>
                                    <div class="account" v-for="(acc, acc_indx) in accounts" :class="step1.username === acc.username ? 'selected' : ''" @click="step1.username = acc.username">
                                        <div class="info">
                                            <div class="thumb" :style="{ 'background-image': 'url('+acc.thumb+')'}"></div>
                                            <div class="username">{{ acc.username }}</div>
                                        </div>
                                        <div class="actions">
                                            <button class="rm_butt" @click.stop="rm_account(acc_indx)">delete</button>
                                            <div class="checked"></div>
                                        </div>
                                    </div>
                                </div>
                            </vue-scroll>
                        </div>
                        <div class="error" v-if="step1.errors.username">{{ step1.errors.username }}</div>
                    </div>
                    <div class="fields_wrap">
                        <field label="E-mail Address:" :error="step1.errors.email">
                            <text-input v-model="step1.email" type="email" placeholder="Your E-mail Address"></text-input>
                        </field>
                    </div>
                    <butt class="go_butt" @click="select_account" :disabled="disabled">Select Account</butt>
                </template>
                <template v-else>
                    <div class="title">Instagram {{ plan.count }} Followers</div>
                    <div class="desc">
                        You buy {{ plan.count }} followers for {{ $root.user_info.sym_b }}{{ plan.price }}{{ $root.user_info.sym_a }} for one.
                    </div>
                    <div class="fields_wrap">
                        <field label="Instagram Username:" :error="step1.errors.username">
                            <text-input v-model="step1.username" placeholder="@usermane"></text-input>
                        </field>
                        <field label="E-mail Address:" :error="step1.errors.email">
                            <text-input v-model="step1.email" type="email" placeholder="Your E-mail Address"></text-input>
                        </field>
                    </div>
                    <butt class="go_butt" @click="select_account" :disabled="disabled">Select Account</butt>
                </template>
            </template>
            <template v-else-if="step === 2">
                <div class="title">Instagram {{ plan.count }} Followers</div>
                <div class="desc">
                    You buy {{ plan.count }} followers for {{ $root.user_info.sym_b }}{{ plan.price }}{{ $root.user_info.sym_a }} for one.
                </div>
                <butt class="go_butt" @click="get_payment_methods" :disabled="disabled">Choose payment method for {{ $root.user_info.sym_b }}{{ plan.price }}{{ $root.user_info.sym_a }}</butt>
                <div class="error" v-if="step2.error">{{ step2.error }}</div>
            </template>
            <template v-else-if="step === 3">
                <div class="title">Payment methods</div>
                <div class="desc">Please choose payment method</div>
                <div class="payment_methods_list">
                    <div class="payment_method" v-for="(method, method_indx) in step3.methods" :class="method.discount > 0 ? 'red' : ''" @click="open_pay(method)" id="COIN">
                        <div class="logo_wrap">
                            <img class="logo" alt="" src="/img/payment_methods/default.png">
                        </div>
                        <div class="info">
                            <div class="name">{{ method.name }}</div>
                            <div class="price">
                                {{ $root.user_info.sym_b }}{{ method.price_local }}{{ $root.user_info.sym_a }}+{{ $root.user_info.sym_b }}{{method.tax_local}}{{ $root.user_info.sym_a }}
                            </div>
                        </div>
                        <div class="discount">{{ method.discount }}%</div>
                    </div>
                </div>
                <butt class="go_back" @click="go_back">Go back</butt>
            </template>
            <div class="steps_wrap">
                <div class="step" :class="{active: (step >= 1)}"></div>
                <!--<div class="step" :class="{active: (step >= 2)}"></div>-->
                <div class="step" :class="{active: (step >= 3)}"></div>
            </div>
        </div>
</template>

<script>
    import Field from "./field";
    import TextInput from "./textInput";
    import Butt from "./butt";
    import vuescroll from 'vuescroll';
    export default {
        name: "orderForm",
        components: {
            Butt, TextInput, Field,
            'vue-scroll':vuescroll,
        },
        props: {
            plan: {
                type: Object,
            },
            init_step: {
                type: Number,
            },
            init_pay_methods: {
                type: Array,
            },
        },
        data() {
            return {
                scrollbar: {
                    vuescroll: {
                    },
                    scrollPanel: {
                        scrollingX: false,
                    },
                    rail: {
                        background: '#EBF1F7',
                        size: '0.375em',
                        specifyBorderRadius: '0.1875em',
                    },
                    bar: {
                        background: '#C2CEDE',
                        specifyBorderRadius: '0.1875em',
                        size: '0.375em',
                        keepShow: true,
                    },
                },
                username: null,
                email: null,
                step: 1,
                step1: {
                    username: '',
                    email: '',
                    email_ls_key: 'saved_email',
                    accs_ls_key: 'saved_accs',
                    new_account: false,
                    errors: {
                        username: null,
                        email: null,
                    },
                },
                step2: {
                    error: null,
                },
                step3: {
                    methods: [],
                },
                payment_methods: [],
                disabled: false,
            };
        },
        mounted() {
            this.step1.email = localStorage.getItem(this.step1.email_ls_key);
            if(this.init_step) {
                this.step = this.init_step;
            }
            if(this.init_pay_methods && this.init_pay_methods.length) {
                console.log(this.init_pay_methods);
                this.step3.methods = this.init_pay_methods;
            }
        },
        methods: {
            close() {
                this.$emit('close');
            },
            //step1
            select_account() {
                this.disabled = true;
                var username = this.step1.username[0] === '@' ? this.step1.username.substr(1) : this.step1.username;
                var form_data = new FormData();
                form_data.append('cart', 0);
                form_data.append('email', this.step1.email);
                form_data.append('system', 'Instagram');
                form_data.append('service', 'Followers');
                form_data.append('type', this.plan.type_key);
                form_data.append('count', this.plan.count);
                form_data.append('username', username);
                axios.post('create_order_v2.php', form_data).then((response) => {
                    switch(response.data.result) {
                        case 'Error': {
                            switch(+response.data.error_code) {
                                case 101: { this.step1.errors.general = response.data.text; } break;
                                case 102: { this.step1.errors.email = response.data.text; } break;
                                case 103: { this.step1.errors.general = response.data.text; } break;
                                case 104: { this.step1.errors.general = response.data.text; } break;
                                case 201: { this.step1.errors.username = response.data.text; } break;
                                case 202: { this.step1.errors.username = response.data.text; } break;
                                case 203: { this.step1.errors.username = response.data.text; } break;
                                case 301: { this.step1.errors.general = response.data.text; } break;
                            }
                        } break;
                        case 'Ok': {
                            var account = {
                                username: response.data.data.username,
                                thumb: response.data.data.avatar,
                            };
                            this.username = account.username;
                            this.email = this.step1.email;
                            this.save_account(account);
                            var params = {
                            };
                            var methods = response.data.data.methods;
                            for(var key in methods) {
                                params['methods['+key+'][name]'] = methods[key].name;
                                params['methods['+key+'][discount]'] = methods[key].discount;
                                params['methods['+key+'][tax]'] = methods[key].tax;
                                params['methods['+key+'][price_usd]'] = methods[key].price_usd;
                                params['methods['+key+'][tax_usd]'] = methods[key].tax_usd;
                                params['methods['+key+'][price_local]'] = methods[key].price_local;
                                params['methods['+key+'][tax_local]'] = methods[key].tax_local;
                                params['methods['+key+'][url_to_pay]'] = methods[key].url_to_pay;
                                params['methods['+key+'][modal]'] = methods[key].modal;
                            }
                            params = new URLSearchParams(params);
                            location.href = '/order/step2?'+params.toString();
                        } break;
                    }
                }).catch((response) => {}).then(() => {
                    this.disabled = false;
                });
            },
            rm_account(indx) {
                if(this.accounts[indx]) {
                    var accs = this.accounts;
                    if(this.step1.username === accs[indx].username) {
                        this.step1.username = '';
                    }
                    accs.splice(indx, 1);
                    localStorage.setItem(this.step1.accs_ls_key, JSON.stringify(accs));
                    this.step1.accs_ls_key = '';
                    this.step1.accs_ls_key = 'saved_accs';
                }
            },
            save_account(acc) {
                var accs = localStorage.getItem(this.step1.accs_ls_key);
                accs = accs ? JSON.parse(accs) : [];
                if(accs.every((_acc) => { return _acc.username !== acc.username })) {
                    accs.push(acc);
                    localStorage.setItem(this.step1.accs_ls_key, JSON.stringify(accs));
                }
            },
            save_email(email) {
                localStorage.setItem(this.step1.email_ls_key, email);
            },
            get_payment_methods() {
                this.step = 3;
            },
            open_pay(method) {
                if(method.modal) {
                    window.open(method.url_to_pay);
                } else {
                    location.href = method.url_to_pay;
                }
            },
            go_back() {
                history.back();
            },
        },
        watch: {
            'step1.username'() {
                this.step1.errors.username = null;
            },
            'step1.email'() {
                this.step1.errors.email = null;
            },
            email(email) {
                if(email) this.save_email(email);
            }
        },
        computed: {
            accounts() {
                var accs = localStorage.getItem(this.step1.accs_ls_key);
                return accs ? JSON.parse(accs) : [];
            },
        },
    }
</script>

<style scoped>
    .order_form {
        position: relative;
        max-width: 100%;
        width: 28.5em;
        background-color: #ffffff;
        padding: 2.25em 2.75em 2.25em;
        border-radius: 0.625em;
        box-sizing: border-box;
        box-shadow: 0 0.25em 0.625em rgba(30, 35, 66, 0.08);
        margin: 2em auto;
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
        background-image: url(../img/icons/close-c8d1da.svg);
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
        margin: 0 0 2em;
        text-align: center;
    }
    .fields_wrap {
        margin: 0 0 2em;
    }
    .butt.go_butt,
    .butt.go_back {
        width: 100%;
        box-shadow: none;
    }
    .butt.go_back {
        margin: 2em 0 0;
    }
    .steps_wrap {
        margin: 3.5em -0.875em 0;
        display: flex;
    }
    .steps_wrap .step {
        margin: 0 0.875em;
        height: 0.5em;
        border-radius: 0.25em;
        background-color: #DAE5F0;
        flex-grow: 1;
    }
    .steps_wrap .step.active {
        background-color: #81B2FF;
    }
    .accounts_list_wrap {
        margin: 0 0 1.5em;
    }
    .accounts_list {
        max-height: 17em;
    }
    .error {
        font-size: 0.875em;
        margin: 0.25em 0 0;
        color: red;
    }
    .account {
        box-sizing: border-box;
        border: 1px solid #D6E5F3;
        height: 5em;
        border-radius: 2.5em;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1.25em 0 0.125em;
        line-height: 1.465;
        width: calc(100% - 0.625em);
        margin: 0 0.625em 1em 0;
        cursor: pointer;
    }
    .account:last-child {
        margin-bottom: 0;
    }
    .account .info {
        display: flex;
        align-items: center;
    }
    .account .thumb {
        width: 4.624em;
        height: 4.625em;
        box-sizing: border-box;
        border: 0.25em solid #F1F8FF;
        border-radius: 50%;
        background-size: cover;
        background-position: center;
    }
    .account .username {
        font-weight: 500;
        margin-left: 1.125em;
    }
    .account .rm_butt {
        font-size: 0.875em;
        padding: 0;
        margin: 0;
        text-decoration: underline;
        font-family: inherit;
        background-color: transparent;
        border: none;
        color: #F86262;
        cursor: pointer;
    }
    .account .checked {
        width: 2.25em;
        height: 2.25em;
        border-radius: 50%;
        background-color: #F1F8FF;
        margin: 0 0 0 0.875em;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .account.selected .checked {
        background-color: #81B3FF;
    }
    .account .checked:before {
        content: '';
        display: block;
        width: 1.125em;
        height: 1.125em;
        background-image: url('/img/icons/checked-aeb5d1.svg');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }
    .account.selected .checked:before {
        background-image: url('/img/icons/checked-fff.svg');
    }
    .account .actions {
        display: flex;
        align-items: center;
        position: relative;
    }
    .payment_method {
        display: flex;
        align-items: center;
        border: 1px solid #D6E5F3;
        height: 5em;
        padding: 0 1.125em 0 0.625em;
        border-radius: 2.5em;
        box-sizing: border-box;
        line-height: 1.465;
        text-decoration: none;
        color: inherit;
        transition-property: background-color, box-shadow;
        transition-duration: 0.3s;
    }
    .payment_method:not(:last-child) {
        margin-bottom: 1em;
    }
    .payment_method:hover {
        background-color: #F1F8FF;
        box-shadow: 0.25em 1em 2.5em rgba(30, 35, 66, 0.15);
    }
    .payment_method .logo_wrap {
        width: 3.75em;
        height: 3.75em;
        border-radius: 50%;
        margin-right: 1em;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F1F8FF;
    }
    .payment_method .logo {
        display: block;
        max-width: 2.25em;
        max-height: 2.25em;
    }
    .payment_method .info {
        flex-grow: 1;
    }
    .payment_method .discount {
        width: 2.875em;
        height: 2.875em;
        margin-left: 1em;
        border-radius: 50%;
        background-color: #D3FFD2;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: 700;
        color: #55E152;
    }
    .payment_method.red .discount {
        background-color: #FFE4E4;
        color: #F86262;
    }
    .payment_method .name {
        font-weight: 700;
    }
    .payment_method .price {
        font-weight: 700;
        color: #55E152;
    }
    .payment_method.red .price {
        color: #F86262;
    }
    @media(max-width: 767px) {
        .order_form {
            box-shadow: none;
            padding: 6.25em 0 3em;
        }
        .title {
            margin: 0 0 0.25em;
        }
        .desc {
            margin: 0 0 0.75em;
        }
        .account {
            margin-right: 0;
            width: 100%;
            border: none;
            padding: 0;
            height: 4.625em;
        }
        .accounts_list_wrap {
            margin: 0 0 2em;
        }
        .fields_wrap {
            margin: 0 0 2.25em;
        }
        .steps_wrap {
            position: absolute;
            top: 3em;
            left: 5%;
            width: calc(90% + 1.75em);
            margin-top: 0;
        }
    }
</style>