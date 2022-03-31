let mix = require('laravel-mix');

mix.js('assets/js/app.js', 'public/js')
    .vue()
    .copyDirectory('assets/img', 'public/img')
    .options({
        processCssUrls: false,
    })
    .css('assets/css/styles.css', 'public/css')
    .css('assets/css/header.css', 'public/css')
    .css('assets/css/footer.css', 'public/css')
    .css('assets/css/banner_sect.css', 'public/css')
    .css('assets/css/how_work_sect.css', 'public/css')
    .css('assets/css/buy_sect.css', 'public/css')
    .css('assets/css/deals_sect.css', 'public/css')
    .css('assets/css/questions_sect.css', 'public/css')
    .css('assets/css/img_text_sect.css', 'public/css')
    .css('assets/css/prices_text_sect.css', 'public/css')
    .css('assets/css/title_sect.css', 'public/css')
    .css('assets/css/free_order_sect.css', 'public/css')
    .css('assets/css/seo_text_sect.css', 'public/css')
    .css('assets/css/contact_sect.css', 'public/css')
    .css('assets/css/terms_seo_sect.css', 'public/css')
    .css('assets/css/support_items_sect.css', 'public/css')
    .css('assets/css/support_form_sect.css', 'public/css')
    .css('assets/css/get_started_sect.css', 'public/css')
    .css('assets/css/reviews_sect.css', 'public/css')
    .disableNotifications();