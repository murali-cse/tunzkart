<div class="col-6 col-md-4 col-lg-3">
    <div class="product product-2">
        <figure class="product-media">
            <?php if($sale) { ?>
            <span class="product-label label-circle label-sale">Sale</span>
            <?php } ?>
            <a href="<?php echo base_url('product'); ?>">
                <img src="<?php echo $image ?>" alt="Product image" class="product-image">
            </a>

            <div class="product-action-vertical">
                <a href="#" style="background-color:white;border:0" class="btn-product-icon btn-wishlist"
                    title="Add to wishlist"></a>
            </div>

            <div class="product-action">
                <a href="#" class="btn-product btn-cart" title="add to cart"><span>Add to
                        Cart</span></a>
            </div>
        </figure>

        <div class="product-body">
            <div class="product-cat">
                <a href="#"><?php echo $category; ?></a>
            </div>
            <h3 class="product-title"><a href="<?php echo base_url('product') ?>"><?php echo $name ?></a></h3>
            <div class="product-price">
                <?php if($discount_price > 0) { ?>
                <span class="new-price"> ₹<?php echo $discount_price; ?></span>
                <span class="old-price">Was ₹<?php echo $original_price ?></span>
                <?php } else { ?>
                <span> ₹<?php echo $original_price; ?></span>
                <?php } ?>
            </div>
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width: <?php echo $rating ?>;"></div>
                </div>
                <span class="ratings-text">( <?php echo $review ?> Reviews )</span>
            </div>

            <div class="product-nav product-nav-dots">
                <?php
                    foreach($colors as $color=>$index){
                ?>
                <a href="#" class="<?php echo $color == 0 ? 'active' : '' ?>"
                    style="background: <?php echo $colors[$color] ?>;"><span class="sr-only">Color name</span>
                    <?php } ?>
            </div>
        </div>
    </div>
</div>