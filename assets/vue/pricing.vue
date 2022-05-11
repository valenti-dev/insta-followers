<template>
    <div class="pricing">
        <div class="types_wrap">
            <button class="type" v-for="type in types" :class="{selected: (type === selected_type)}" @click="selected_type = type"><span class="type_name">{{ type }} Followers</span></button>
        </div>
        <div class="plans_wrap">
            <div class="plan" v-for="plan in filtered_plans">
                <div class="discount"><span class="discount_label">Save {{ plan.discount }}%</span></div>
                <div class="count_wrap">
                    <div class="count">{{ plan.count }}</div>
                    <div class="count_insc">followers</div>
                </div>
                <div class="price_wrap">
                    <div class="price">{{ $root.user_info.sym_b }}{{ plan.price }}{{ $root.user_info.sym_a }}</div>
                    <div class="price_insc">
                        (discount auto-applied)
                    </div>
                </div>
                <div class="attrs_wrap">
                    <div class="attr">No password required</div>
                    <div class="attr">Fast delivery</div>
                    <div class="attr">24/7 Support</div>
                    <div class="attr">Cheapest</div>
                </div>
                <butt class="go_butt" @click="order(plan)" :id="plan.butt_id">Buy Follower Now</butt>
            </div>
        </div>
    </div>
</template>

<script>
    import Butt from "./butt";
    import OrderPopup from "./orderPopup";
    export default {
        name: "pricing",
        components: {OrderPopup, Butt},
        props: {
            limit: {
                type: Number,
                default: null,
            },
        },
        data() {
            return {
                plans: [],
                selected_type: null,
            };
        },
        mounted() {
            axios.post('get_plans.php').then((response) => {
                if(response.data.result === 'Ok') {
                    this.plans = response.data.data.Instagram.Followers.plans;
                }
            });
        },
        computed: {
            types() {
                var result = [];
                this.plans.forEach((plan) => {
                    for(var type_k in plan.types) {
                        if(!+plan.types[type_k].disabled && !result.includes(plan.types[type_k].name)) {
                            result.push(plan.types[type_k].name);
                        }
                    }
                });
                return result;
            },
            filtered_plans() {
                var result = [];
                this.plans.forEach((plan) => {
                    for(var type_k in plan.types) {
                        if(!+plan.types[type_k].disabled && plan.types[type_k].name === this.selected_type && +plan.types[type_k].price) {

                            if(!this.limit || result.length < this.limit) {
                                result.push({
                                    count: plan.count,
                                    price: plan.types[type_k].price,
                                    discount: plan.types[type_k].discount,
                                    type_key: type_k,
                                    butt_id: (type_k === 't1' ? 'NORM' : 'PREMIUM')+plan.count+'F',
                                });
                            }
                        }
                    }
                });
                return result;
            },
        },
        watch: {
            types(val) {
                if(!val.includes(this.selected_type) && val[0]) {
                    this.selected_type = val[0];
                    //this.order_plan = this.filtered_plans[0];
                }
            },
        },
        methods: {
            order(plan) {
                var params = {
                    'plan[count]': plan.count,
                    'plan[price]': plan.price,
                    'plan[type_key]': plan.type_key,
                };
                params = new URLSearchParams(params);
                location.href = '/order/?'+params.toString();
            }
        },
    }
</script>

<style scoped>
    .types_wrap {
        display: flex;
        justify-content: center;
        margin: 0 0 3.125em;
    }
    .types_wrap .type {
        height: 3.75em;
        box-sizing: border-box;
        width: 17.25em;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: inherit;
        font-family: inherit;
        background-color: transparent;
        border: 0.125em solid #D0E0F3;
        cursor: pointer;
        font-weight: 700;
        color: #9297AB;
        line-height: 146.5%;
    }
    .types_wrap .type:first-child {
        border-radius: 1.875em 0 0 1.875em;
    }
    .types_wrap .type:last-child {
        border-radius: 0 1.875em 1.875em 0;
    }
    .types_wrap .type:first-child:last-child {
        border-radius: 1.875em;
    }
    .types_wrap .type.selected {
        background-color: #D0E0F3;
        color: #292E43;
    }
    .types_wrap .type_name {
        font-size: 1.125em;
    }
    .plans_wrap {
        margin: -1.25em -1em;
        display: flex;
        flex-wrap: wrap;
    }
    .plan {
        margin: 1.25em 1em;
        background-color: #FFFFFF;
        border-radius: 0.625em;
        width: calc(25% - 2em);
        padding: 1em 1.125em 5.625em;
        box-sizing: border-box;
        position: relative;
        transition-property: transform, box-shadow;
        transition-duration: 0.3s;
    }
    .plan:hover {
        z-index: 1;
        transform: scale(1.1);
        box-shadow: 0 0 2em 0.625em #81B3FF;
    }
    .pricing_page .plan {
        border: 1px solid #E7EFF6;
    }
    .plan .discount {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #F86262;
        color: #ffffff;
        height: 1.25em;
        padding: 0 0.75em;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        font-weight: 700;
        line-height: 146.5%;
        border-radius: 0.75em;
    }
    .plan .discount_label {
        font-size: 0.875em;
    }
    .plan .butt.go_butt {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        border-radius: 0 0 0.625em 0.625em;
        box-shadow: none;
    }
    .plan .count_wrap {
        margin: 0 0 1em;
        font-weight: 700;
        text-align: center;
        line-height: 1.465;
    }
    .plan .count {
        font-size: 4.375em;
    }
    .plan .count_insc {
        font-size: 1.25em;
    }
    .plan .price_wrap {
        margin: 0 0 1.75em;
        line-height: 1.465;
        text-align: center;
    }
    .plan .price {
        font-weight: 700;
        font-size: 1.125em;
    }
    .plan .price_insc {
        font-size: 0.8125em;
        color: #F86262;
    }
    .plan .attr {
        line-height: 1.235;
        margin: 0 0 1em;
        box-sizing: border-box;
        display: flex;
        align-items: center;
    }
    .plan .attr:before {
        content: '';
        display: block;
        width: 1.5em;
        height: 1.5em;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        background-image: url(../img/icons/check-mark-81b3ff.svg);
        margin-right: 0.75em;
    }
    .plan .attr:last-child {
        margin-bottom: 0;
    }
    @media(max-width: 767px) {
        .types_wrap {
            margin: 0 0 2.5em;
        }
        .types_wrap .type {
            height: 3.125em;
        }
        .types_wrap .type:first-child {
            border-radius: 1.5625em 0 0 1.5625em;
        }
        .types_wrap .type:last-child {
            border-radius: 0 1.5625em 1.5625em 0;
        }
        .types_wrap .type_name {
            font-size: 0.9375em;
        }
        .plans_wrap {
            display: block;
            margin: 0;
        }
        .plan {
            margin: 0 auto 3.5em;
            width: 100%;
            max-width: 16.5em;
        }
        .plan:last-child {
            margin-bottom: 0;
        }
    }
</style>