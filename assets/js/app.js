import Vue from 'vue';
import butt from '../vue/butt';
import logo from '../vue/logo';
import freeFollowersOrderForm from '../vue/freeFollowersOrderForm';
import contactForm from '../vue/contactForm';
import supportForm from '../vue/supportForm';
import orderForm from '../vue/orderForm';
import ticket from "../vue/ticket";
////////////////
window.axios = require('axios').default;
axios.defaults.withCredentials = true;
axios.defaults.headers.common['X-IDENTITY-SITE'] = 'followerus.com';
axios.defaults.baseURL = 'https://core.poprey.com/api/';
var token = localStorage.getItem('token');
if(token) {
    axios.defaults.headers.common['X-IDENTITY-TOKEN'] = token;
}
axios.interceptors.response.use((response) => {
    if(response.headers['x-identity-token']) {
        token = response.headers['x-identity-token'];
        localStorage.setItem('token', token);
        axios.defaults.headers.common['X-IDENTITY-TOKEN'] = token;
    }
    return response;
});
////////////
import pricing from '../vue/pricing';
import payStatusPopup from "../vue/payStatusPopup";
import reviews from "../vue/reviews";
import payStatusBlock from "../vue/payStatusBlock";
var app = new Vue({
    el: "#app",
    components: {
        butt,
        logo,
        pricing,
        'free-followers-order-form': freeFollowersOrderForm,
        'contact-form': contactForm,
        'support-form': supportForm,
        'order-form': orderForm,
        'pay-status-popup': payStatusPopup,
        'pay-status-block': payStatusBlock,
        reviews,
        ticket,
    },
    data: {
        header: {
            opened: false,
        },
        scrolled: false,
        user_info: {},
        questions: {
            opened: 2,
        },
        free_order: {
            attention_opened: true,
        },
        payment: {
            success: null,
        },
        loaded: false,
    },
    mounted() {
        this.loaded = true;
        this.scroll_event();
        window.addEventListener('scroll', this.scroll_event);
        axios.post('user_info.php').then((response) => {
            if(response.data.result === 'Ok') {
                this.user_info = response.data.data;
            }
        });

        switch(location.hash) {
            case '#success_pay': {
                this.payment.success = true;
            } break;
            case '#fail_pay': {
                this.payment.success = false;
            } break;
        }
    },
    methods: {
        scroll_event() {
            this.scrolled = window.pageYOffset;
        },
    },
});