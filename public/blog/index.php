<?
$page_class = 'blog_page';
$title = 'Blog - Followerus';
$description = 'Articles and publications';
$canonical = '/blog';
?>
<? include '../../assets/php/head.php'; ?>
    <section class="title_sect">
        <div class="wrap">
            <h1 class="row1">Blog</h1>
            <div class="row2">
                Articles and publications
            </div>
        </div>
    </section>
<?
$styles['title_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/title_sect.css',
];
?>
<?
$articles = require('../../assets/php/articles.php');
$limit = 4;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
?>
<section class="blog_sect">
    <div class="wrap">
        <div class="row1">
            <? foreach($articles as $indx => $article) : ?>
                <? if($indx >= ($limit*$page - $limit) && $indx < $limit*$page) : ?>
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
        <? if(count($articles) > $limit) : ?>
            <div class="row2">
                <? for ($i = 1; $i <= ceil(count($articles)/$limit); $i++) : ?>
                    <? if($i == $page) : ?>
                        <span class="page active"><?= $i; ?></span>
                    <? else : ?>
                        <a href="?page=<?= $i; ?>" class="page"><?= $i; ?></a>
                    <? endif; ?>
                <? endfor; ?>
            </div>
        <? endif; ?>
    </div>
</section>
<?
$styles['blog_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/blog_sect.css',
];
?>
<? include '../../assets/php/foot.php'; ?>