<?
$page_class = 'order_page';
$title = 'Order';
$description = '';
$canonical = 'https://'.$_SERVER['SERVER_NAME'].'/order/';
if(!$_GET['payment_id']) {
    header("Location: /",TRUE,301);
    exit();
}
?>
<? include __DIR__.'/../../assets/php/head.php'; ?>
<section class="order_sect">
    <div class="wrap">
        <order-form :init_step="3" :init_payment_id='<?= json_encode($_GET['payment_id']); ?>'></order-form>
    </div>
</section>
<? include __DIR__.'/../../assets/php/foot.php'; ?>