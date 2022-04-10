<?php
$articles = require('articles.php');
foreach ($articles as $indx => $article) {
    if(isset($_GET['q']) && 'blog/'.$article['slug'] === $_GET['q']) {
        unset($articles[$indx]);
        break;
    }
}
?>
<? if(count($articles)) : ?>
<section class="articles_sect">
    <div class="wrap">
        <h2 class="row1">
            Similar articles
        </h2>
        <div class="row2">
            <? foreach($articles as $indx => $article) : ?>
                <? if($indx <= 3) : ?>
                    <a href="/blog/<?= $article['slug']; ?>" class="card">
                        <div class="img" style="background-image: url(<?= $article['image']; ?>);"></div>
                        <div class="info">
                            <div class="cat">Instagram News</div>
                            <div class="name"><?= $article['title']; ?></div>
                            <div class="attrs">
                                <div class="attr">by <?= $article['author']; ?></div>
                                <div class="attr"><?= $article['date']; ?></div>
                            </div>
                        </div>
                    </a>
                <? endif; ?>
            <? endforeach; ?>
        </div>
    </div>
</section>
    <?
    $styles['articles_sect'] = [
        'rel' => 'stylesheet',
        'href' => '/css/articles_sect.css',
    ];
    ?>
<? endif; ?>