<?
$page_class = 'home_page';
$title = 'Buy Instagram followers and grow your account faster';
$description = '';
?>
<? include '../assets/php/head.php'; ?>
<section class="banner_sect">
    <div class="wrap">
        <div class="row1">
            <h1 class="line1">
                Buy Instagram followers and<br>
                <b>grow your account faster</b>
            </h1>
            <div class="line2">
                Tired of spending loads of time trying to grow your Instagram? Buy Instagram followers safely and securely through Upleap. Fill in your username to get started:
            </div>
            <div class="line3">
                <butt class="go_butt" href="/pricing">Simple Pricing</butt>
            </div>
            <div class="line4">
                <div class="option">
                    <div class="label">Fast delivery</div>
                </div>
                <div class="option">
                    <div class="label">24/7 support</div>
                </div>
                <div class="option">
                    <div class="label">From $3!</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
$styles['banner_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/banner_sect.css',
];
?>
<section class="how_work_sect">
    <div class="wrap">
        <h2 class="row1">How It Works?</h2>
        <div class="row2">
            Make your account stand out through a combination of automated likes and story views, and through buying followers.
        </div>
        <div class="row3">
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/how_work_sect/icon1.svg">
                </div>
                <div class="text_wrap">
                    <div class="title">Grow organically</div>
                    <div class="desc">
                        Real likes and story views will help you increase your reach and engagement.
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/how_work_sect/icon2.svg">
                </div>
                <div class="text_wrap">
                    <div class="title">Smart targeting</div>
                    <div class="desc">
                        Focus on your target audience based on their interests, location and hashtags.
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="icon_wrap">
                    <img class="icon" alt="" src="/img/how_work_sect/icon3.svg">
                </div>
                <div class="text_wrap">
                    <div class="title">Security first</div>
                    <div class="desc">
                        You'll never have to worry about your account being put at risk, we protect your reputation.
                    </div>
                </div>
            </div>
        </div>
        <div class="row4">
            <butt class="go_butt" href="/get-started">Get Started</butt>
        </div>
    </div>
</section>
<?
$styles['how_work_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/how_work_sect.css',
];
?>
<section class="buy_sect">
    <div class="wrap">
        <h2 class="row1">
            Buy Instagram Followers with Instant Delivery
        </h2>
        <div class="row2">
            At Namesite, you can buy Instagram followers quickly, safely and easily with just a few clicks. See our deals below!
        </div>
        <pricing :limit="4" class="row3"></pricing>
        <div class="row4">
            <butt class="transparent lg" href="/pricing">Learn More About Shopping</butt>
        </div>
    </div>
</section>
<?
$styles['buy_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/buy_sect.css',
];
?>
<section class="deals_sect">
    <div class="wrap">
        <h2 class="row1">Sitename has been Featured in</h2>
        <div class="row2">
            At Namesite, you can buy Instagram followers quickly, safely and easily with just a few clicks. See our deals below!
        </div>
        <div class="row3">
            <? for ($i = 1; $i <= 12; $i++) : ?>
                <div class="item">
                    <img class="img" src="/img/deals_sect/image-<?= $i; ?>.png" alt="">
                </div>
            <? endfor; ?>
        </div>
    </div>
</section>
<?
$styles['deals_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/deals_sect.css',
];
?>
<div class="questions_sect">
    <div class="wrap">
        <h2 class="row1">
            Frequently Asked Questions
        </h2>
        <div class="row2">
            Have a different question about how Likes.io works or the pricing plans available? Get in touch with one of our specialists.
        </div>
        <div class="row3">
            <? foreach (include('../assets/php/questions.php') as $indx => $item): ?>
            <div class="item" :class="questions.opened === <?= $indx + 1 ?> ? 'opened' : ''">
                <div class="item_h" @click="questions.opened = (questions.opened === <?= $indx + 1 ?> ? null : <?= $indx + 1 ?>)">
                    <div class="num"><?= $indx + 1 ?>.</div>
                    <div class="question">
                        <?= $item['question']; ?>
                    </div>
                    <div class="toggle">
                        <img class="icon" alt="" src="/img/icons/chevron-bottom-fff.svg">
                    </div>
                </div>
                <div class="item_b">
                    <div class="answer">
                        <?= $item['answer']; ?>
                    </div>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    </div>
</div>
<?
$styles['questions_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/questions_sect.css',
];
?>
<section class="img_text_sect">
    <div class="wrap">
        <div class="row1">
            <div class="item">
                <h2 class="title">How do you choose my likes?</h2>
                <img class="image" alt="" src="/img/img_text_sect/img1.png">
                <div class="desc">
                    <p>
                        We target accounts from people who are highly likely to want to see, like and engage with your own content.
                        Our automated likes service takes your inputs for similar brands, competitor sites and key influencer profiles and sends likes to their posts.
                        If you buy 50 Instagram likes, each one will be sent to a carefully selected account for maximum impact.
                    </p>
                    <p>
                        With a service that uses location, hashtags and demographics to target your audience, you can be sure that every like counts.
                        We maximize the possibility of return engagement by only liking posts that are deeply connected with your target market.
                        It’s an efficient way to grow your brand on social media with no wasted effort.
                    </p>
                </div>
            </div>
            <div class="item">
                <h2 class="title">Why are Instagram likes valuable?</h2>
                <img class="image" alt="" src="/img/img_text_sect/img2.png">
                <div class="desc">
                    <p>
                        Alongside comments, likes are the principal currency spent on Instagram.
                        A like is an affirmation to the social media community that your post is useful, interesting or fun, and might be enjoyed by someone else too.
                    </p>
                    <p>
                        Not only do likes indicate the quality of your post and brand in general, they also show that many people think your account is worth following.
                        The more likes your account receives, the better the ‘social proof’ of your popularity and quality. More likes also mean more exposure.
                        Instagram uses an algorithm to choose which posts to show to larger audiences and having a more popular post will encourage Instagram to organically boost your brand.
                    </p>
                </div>
            </div>
            <div class="item">
                <h2 class="title">Why is it a monthly service ideal?</h2>
                <img class="image" alt="" src="/img/img_text_sect/img3.png">
                <div class="desc">
                    <p>
                        One of the key problems that people and businesses face on social media is consistency.
                        Initial interest in growth is often high but can become more challenging to maintain over time, especially if growth begins to slow.
                    </p>
                    <p>
                        If your brand is inconsistent in the way you engage on social media, it will be hard to attract long-term followers who provide real value.
                        If your efforts are sporadic, it will also be a challenge to build a reputation or sense of expertise in a market.
                        By automating the monthly service, your followers will see your consistent approach and have faith that you are an account to be trusted.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?
$styles['img_text_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/img_text_sect.css',
];
?>
<section class="reviews_sect">
    <div class="wrap">
        <h2 class="row1">Reviews</h2>
        <div class="row2">
            Have a different question about how Likes.io works or the pricing plans available? Get in touch with one of our specialists.
        </div>
        <reviews class="row3"></reviews>
    </div>
</section>
<?
$styles['reviews_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/reviews_sect.css',
];
?>
<? include '../assets/php/foot.php'; ?>