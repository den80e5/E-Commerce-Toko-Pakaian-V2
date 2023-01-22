<?php if (isset($_SESSION["pelanggan"])): ?>
    <?php require 'navbar_pelanggan.php'; ?>
<?php else: ?>
    <?php require 'navbar.php'; ?>
<?php endif ?>