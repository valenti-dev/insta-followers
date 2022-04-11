<?
$h1 = 'Example article title';
$page_class = 'article_page';
$title = $h1.' - Followerus';
$description = '';
?>
<? include __DIR__.'/../../assets/php/head.php'; ?>
    <section class="article_sect">
        <div class="wrap">
            <div class="row1"><a href="/">Home</a> / <a href="/blog">Blog</a> / <?= $h1; ?></div>
            <h1 class="row2">
                <?= $h1; ?>
            </h1>
            <div class="row3">
                <div class="author">
                    <div class="photo" style="background-image: url(/img/article_sect/authors/author1.png);"></div>
                    <div class="info">
                        <div class="name">Admin</div>
                        <div class="date">1 year ago</div>
                    </div>
                </div>
                <div class="shares">
                    <div class="label">Share post:</div>
                    <div class="links">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://<?= $_SERVER['SERVER_NAME']; ?>/<?= $_GET['q']; ?>" target="_blank" class="link"><img class="icon" alt="FB" src="/img/icons/fb-fff.svg"></a>
                        <a href="https://twitter.com/intent/tweet?url=https://<?= $_SERVER['SERVER_NAME']; ?>/<?= $_GET['q']; ?>&text=" target="_blank" class="link"><img class="icon" alt="Twitter" src="/img/icons/twitter-fff.svg"></a>
                        <a href="https://wa.me/?text=<?= urlencode('https://'.$_SERVER['SERVER_NAME'].'/'.$_GET['q']); ?>" target="_blank" class="link"><img class="icon" alt="WhatsApp" src="/img/icons/whatsapp-fff.svg"></a>
                        <a href="https://pinterest.com/pin/create/button/?url=https://<?= $_SERVER['SERVER_NAME']; ?>/<?= $_GET['q']; ?>&media=&description=" target="_blank" class="link"><img class="icon" alt="Pinterest" src="/img/icons/pinterest-fff.svg"></a>
                    </div>
                </div>
            </div>
            <div class="row4">
                <img alt="" src="/img/article_sect/example/img1.png">
                <p>
                    example article content
                </p>
            </div>
        </div>
    </section>
<?
$styles['article_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/article_sect.css',
];
?>
<? include __DIR__.'/../../assets/php/similar_articles.php'; ?>
<? include __DIR__.'/../../assets/php/foot.php'; ?>