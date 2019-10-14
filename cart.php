<?php require 'inc/head.php';
require 'inc/data/products.php';
?>


    <section class="cookies container-fluid">
        <div class="row">
            <?php
            $cookieArrayAllValues = explode(',', $_COOKIE['add_to_cart']);
            $cookieArray = array_unique($cookieArrayAllValues);
            $totalPrice = 0;
            $totalQuantity = 0;
            foreach ($cookieArray as $productId) { ?>
                <?php if (!empty($productId) && isset($productId)) {?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?= $productId; ?>.jpg"
                                 alt="<?= $productId; ?>" class="img-responsive">
                            <figcaption class="caption">
                                <h3><?= $catalog[$productId]['name']; ?></h3>
                                <p><?= $catalog[$productId]['description']; ?></p>
                                <p><strong>Quantity: <?php $countValues = array_count_values($cookieArrayAllValues);
                                    echo $countValues[$productId];
                                    $totalQuantity+=$countValues[$productId];
                                    ?></strong></p>
                                <p><strong>Total Price For All <?php echo $catalog[$productId]['name'].'s';?>: <?php
                                    $itemTotalPrice = $countValues[$productId] * $catalog[$productId]['price'];
                                    echo $itemTotalPrice;
                                    $totalPrice+= $itemTotalPrice;
                                    ?>&#8364</strong></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php }
            } ?>
        </div>
    </section>
    <section>
        <div class="card-footer">
            <p>Total Quantity:<?php echo $totalQuantity;?> Articles</p>
            <p>Total Price:<?php echo $totalPrice;?>&#8364</p>
        </div>
    </section>


<?php require 'inc/foot.php'; ?>