<?php
require 'inc/data/products.php';
session_start();
if (!empty($_GET['add_to_cart']) && is_numeric($_GET['add_to_cart'])) {
    if (!empty($catalog[$_GET['add_to_cart']])) {
        $product = $catalog[$_GET['add_to_cart']]['name'];
        if (!empty($_SESSION['cart'][$product])) {
            $_SESSION['cart'][$product]['total']++;
        } else {
            $_SESSION['cart'][$product]['name'] = $product;
            $_SESSION['cart'][$product]['total'] = 1;
        }
    }
}
?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
