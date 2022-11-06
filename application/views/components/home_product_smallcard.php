<div class="product product-2">
    <figure class="product-media">
        <?php if($isLabel){ ?>
        <span class="product-label label-circle label-sale"><?php echo $labelText ?></span>
        <?php } ?>
        <a href="<?php echo base_url('product') ?>">
            <img src="<?php echo $image ?>" alt="Product image" class="product-image">
        </a>
        <div class="product-action-vertical">
            <a href="#" class="btn-product-icon btn-wishlist" style="background-color: white;border: white"
                title="Add to wishlist"></a>
        </div>
        <div class="product-action">
            <a href="#" class="btn-product btn-cart" title="Add to cart">
                <span>add to cart</span>
            </a>
        </div>
    </figure>

    <div class="product-body">
        <div class="product-cat">
            <a href="#"><?php echo $category; ?></a>
        </div>
        <h3 class="product-title"><a href="<?php echo base_url('product') ?>"><?php echo $title ?></a></h3>

        <div class="product-price">
            ₹ <?php echo $price ?>
        </div>
        <div class="ratings-container">
            <div class="ratings">
                <div class="ratings-val" style="width: <?php echo $rating ?>;"></div>
            </div>
            <span class="ratings-text">( <?php echo $review_count ?> Reviews )</span>
        </div>
    </div>
</div>