<template>
    <slick-slider v-bind="slick" v-if="reviews.length">
        <div class="review" v-for="review in reviews">
            <div class="review_head">
                <div class="review_name">{{ review.name }}</div>
                <div class="review_stars_wrap">
                    <img v-for="n in 5" class="star" alt="" :src="'/img/icons/star-'+(n <= review.star ? 'ffc107' : 'cdcdcd')+'.svg'">
                </div>
            </div>
            <div class="review_content" v-html="review.text"></div>
        </div>
    </slick-slider>
</template>

<script>
    import VueSlickCarousel from 'vue-slick-carousel';
    import 'vue-slick-carousel/dist/vue-slick-carousel.css';

    export default {
        name: "reviews",
        components: {
            'slick-slider': VueSlickCarousel,
        },
        data() {
            return {
                slick: {
                    arrows: true,
                    dots: true,
                    slidesToShow: 2,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                        },
                    }],
                },
                reviews: [],
            };
        },
        mounted() {
            var form_data = new FormData();
            form_data.append('system', 'Instagram');
            form_data.append('service', 'Followers');
            axios.post('review_list.php', form_data).then((response) => {
                switch(response.data.result) {
                    case 'Ok': {
                        if(response.data.data) {
                            this.reviews = response.data.data;
                        }
                    } break;
                }
            });
        }

    }
</script>

<style scoped>
    .review {
        background-color: #FFFFFF;
        border-radius: 0.625em;
        padding: 1.25em 1em 1.5em 1.75em;
        box-sizing: border-box;
        height: 100%;
    }
    .review_head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 0 1em;
    }
    .review_name {
        font-weight: 500;
        line-height: 1.465;
        font-size: 1.25em;
    }
    .review_stars_wrap {
        display: flex;
    }
    .review_stars_wrap .star {
        margin: 0 0.125em;
        height: 1.125em;
    }
    .review_stars_wrap .star:first-child {
        margin-left: 0;
    }
    .review_stars_wrap .star:last-child {
        margin-right: 0;
    }
</style>
<style>
    .slick-slider {
        margin: 0 -1em 2.75em;
        position: relative;
    }
    .slick-slide {
        padding: 0 1em;
        box-sizing: border-box;
    }
    .slick-arrow {
        position: absolute;
        top: 50%;
        width: 2em;
        height: 2em;
        z-index: 1;
        transform: translate(0, -50%);
        box-sizing: border-box;
        display: block;
        font-size: inherit;
        border: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        color: transparent;
        background-color: transparent;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        cursor: pointer;
    }
    .slick-prev {
        left: -2em;
        background-image: url(../img/icons/chevron-left-ccd0e1.svg);
    }
    .slick-next {
        left: 100%;
        background-image: url(../img/icons/chevron-right-ccd0e1.svg);
    }
    .slick-dots {
        display: flex !important;
        padding: 0;
        margin: 0;
        position: absolute;
        top: calc(100% + 1.75em);
        width: 100%;
        box-sizing: border-box;
        list-style-type: none;
        justify-content: center;
        flex-wrap: wrap;
    }
    .slick-dots li {
        margin: 0.25em 0.5em;
    }
    .slick-dots button {
        display: block;
        font-size: inherit;
        margin: 0;
        padding: 0;
        border: 1px solid #DBDCDD;
        box-sizing: border-box;
        width: 0.75em;
        height: 0.75em;
        overflow: hidden;
        color: transparent;
        border-radius: 50%;
        background-color: transparent;
        cursor: pointer;
    }
    .slick-dots button:hover {
        border-color: #81B3FF;
    }
    .slick-dots .slick-active button {
        background-color: #81B3FF;
        border-color: #81B3FF;
    }
    .slick-slide {
        height: auto !important;
    }
    .slick-slide > div {
        height: 100%;
    }
    .slick-track {
        display: flex !important;
    }
    @media(max-width: 767px) {
        .slick-dots {
            top: calc(100% + 1.5em);
        }
        .slick-slider {
            margin: 0 -1em 4em;
        }
    }
</style>