<?
$page_class = 'support_page';
$title = 'How Can We Help You? Support';
$description = 'If you have any questions, please reach out to our support team. You can get in touch with us through the complaint form';
?>
<? include '../assets/php/head.php'; ?>
<section class="title_sect">
    <div class="wrap">
        <h1 class="row1">Support center.</h1>
        <div class="row2">
            Here you can ask any questions you may have.
        </div>
        <div class="row3">
            <butt class="go_butt" href="/get-started">Get Started</butt>
        </div>
    </div>
</section>
<?
$styles['title_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/title_sect.css',
];
?>
<section class="support_items_sect">
    <div class="wrap">
        <div class="row1">
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-1.svg">
                </div>
                <div class="name">How to Start</div>
            </div>
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-2.svg">
                </div>
                <div class="name">About Orders</div>
            </div>
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-3.svg">
                </div>
                <div class="name">Payment & Billing</div>
            </div>
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-4.svg">
                </div>
                <div class="name">Security & Privacy</div>
            </div>
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-5.svg">
                </div>
                <div class="name">About discount</div>
            </div>
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-6.svg">
                </div>
                <div class="name">Affiliate program</div>
            </div>
        </div>
    </div>
</section>
<?
$styles['support_items_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/support_items_sect.css',
];
?>
<section class="support_form_sect">
    <div class="wrap">
        <div class="row1">
            <h2 class="line1">
                You can ask any question to our customer service
            </h2>
            <div class="line2">
                Just fill out the form below and we will contact you
            </div>
            <support-form></support-form>
        </div>
    </div>
</section>
<?
$styles['support_form_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/support_form_sect.css',
];
?>
<? include '../assets/php/foot.php'; ?>