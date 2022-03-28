</main>
<? include 'footer.php'; ?>
</div>
</body>
<script src="/js/app.js"></script>
<? foreach ($styles as $style): ?>
    <link rel="<?= $style['rel']; ?>" href="<?= $style['href']; ?>">
<? endforeach; ?>
</html>