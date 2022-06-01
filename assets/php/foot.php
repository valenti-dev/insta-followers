</main>
<? include 'footer.php'; ?>
</div>
</body>
<? $version = '1.0.15'; ?>
<? foreach ($styles as $style): ?>
    <link rel="<?= $style['rel']; ?>" href="<?= $style['href']; ?>?v=<?= $version; ?>" media="none" onload="if(media!='all')media='all'">
<? endforeach; ?>
<noscript>
    <? foreach ($styles as $style): ?>
        <link rel="<?= $style['rel']; ?>" href="<?= $style['href']; ?>?v=<?= $version; ?>">
    <? endforeach; ?>
</noscript>
<script src="/js/app.js?v=<?= $version; ?>"></script>
</html>