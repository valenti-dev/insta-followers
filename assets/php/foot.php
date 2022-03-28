</main>
<? include 'footer.php'; ?>
</div>
</body>
<? foreach ($styles as $style): ?>
    <link rel="<?= $style['rel']; ?>" href="<?= $style['href']; ?>" media="none" onload="if(media!='all')media='all'">
<? endforeach; ?>
<noscript>
    <? foreach ($styles as $style): ?>
        <link rel="<?= $style['rel']; ?>" href="<?= $style['href']; ?>">
    <? endforeach; ?>
</noscript>
<script src="/js/app.js"></script>
</html>