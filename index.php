<?php 
require 'inc/data/products.php';
require 'inc/head.php';

if (!isset($_SESSION['product'])) {     // enregistrement de chaque cookie dans le panier
    $_SESSION['product'] = [];
}

if (isset($_GET['add_to_cart'])) {    // ajout d'un cookie au panier
    $cookieId = $_GET['add_to_cart'];

    if (!isset($_SESSION['product'][$cookieId])) {    // verification du panier user pour ajouter un cookie existant ou non
        $_SESSION['product'][$cookieId] = 1; 
        $cookieCount = $_SESSION['product'][$cookieId];
        $cookieCount += 1;
        $_SESSION['product'][$cookieId] = $cookieCount;
    }
}
?>
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
