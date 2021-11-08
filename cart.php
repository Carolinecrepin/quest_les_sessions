<?php
require 'inc/head.php';
require 'inc/data/products.php';
if (empty($_SESSION['loginname'])) {
    header('location:login.php');
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        $products = $_SESSION['product'];
        foreach ($products as $key => $product) {
            echo "<img src='assets/img/product-" . $key . ".jpg' style = 'width: 50px; margin-right: 10px' alt='" . $catalog[$key]['name'] . "'>" . $catalog[$key]['name'] . " : " . $product . "<br>";
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
