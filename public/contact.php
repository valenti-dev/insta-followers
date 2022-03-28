<?
$page_class = 'contact_page';
$title = 'Contact';
$description = '';
?>
<? include '../assets/php/head.php'; ?>
<section class="contact_sect">
    <div class="wrap">
        <div class="row1">
            <h1 class="line1">Contact</h1>
            <contact-form class="line2"></contact-form>
        </div>
    </div>
</section>
<?
$styles['contact_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/contact_sect.css',
];
?>
<? include '../assets/php/foot.php'; ?>