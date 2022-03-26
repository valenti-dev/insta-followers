<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? $title : ''; ?></title>
    <meta name="description" content="<?= isset($description) ? $description : ''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/styles.css">

    <? if(isset($canonical)): ?>
        <link rel="canonical" href="<?= $canonical; ?>"/>
    <? endif; ?>
</head>
<body>
    <div class="body <?= isset($page_class) ? $page_class : ''; ?>" id="app" :class="(scrolled || payment.success !== null) ? 'scrolled' : ''">
        <pay-status-popup v-if="payment.success !== null" :success="payment.success" @close="payment.success = null"></pay-status-popup>
        <? include 'header.php'; ?>
        <main class="main">