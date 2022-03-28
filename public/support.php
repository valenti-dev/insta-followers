<?
$page_class = 'support_page';
$title = 'How can we help you?';
$description = '';
?>
<? include '../assets/php/head.php'; ?>
<section class="title_sect">
    <div class="wrap">
        <h1 class="row1">How can we help you?</h1>
        <div class="row2">
            Here you will find answers to any questions you may have.
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
            <a href="#" class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-1.svg">
                </div>
                <div class="name">Getting Started</div>
                <div class="count">5 articles</div>
            </a>
            <a href="#" class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-2.svg">
                </div>
                <div class="name">My Account</div>
                <div class="count">5 articles</div>
            </a>
            <a href="#" class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-3.svg">
                </div>
                <div class="name">Payment & Billing</div>
                <div class="count">4 articles</div>
            </a>
            <a href="#" class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-4.svg">
                </div>
                <div class="name">Security & Privacy</div>
                <div class="count">2 articles</div>
            </a>
            <a href="#" class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-5.svg">
                </div>
                <div class="name">Subscriptions</div>
                <div class="count">1 article</div>
            </a>
            <a href="#" class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/support_items_sect/icon-6.svg">
                </div>
                <div class="name">Troubleshooting</div>
                <div class="count">1 article</div>
            </a>
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