<?php
session_start();
if (empty($_SESSION['name'])) {
    header('Location: /login.php');
    die('Please log in first');
}
?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) :?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $product) : ?>
                <li><?= $product['name'] ?> x <?= $product['total'] ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif;?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
