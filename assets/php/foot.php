</main>
<? include 'footer.php'; ?>
</div>
</body>
<? foreach ($styles as $style): ?>
    <link rel="<?= $style['rel']; ?>" href="<?= $style['href']; ?>">
<? endforeach; ?>
<script src="/js/app.js"></script>
</html>