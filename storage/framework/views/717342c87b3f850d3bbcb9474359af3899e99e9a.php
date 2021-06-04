<div class="order_item">
    <div class="order_item_image" style = "background: url(<?php echo e(asset('/images/'.$type.'s/'.$img)); ?>) no-repeat; background-size: contain;">
    </div>

    <div class="order_item_description">
        <div class="order_item_name">
            <p><?php echo e($name); ?></p>
        </div>
        <div class="order_item_ingredients">
            <p><?php echo e($ingredients); ?></p>
        </div>

        <div class="order_item_functions">
            <div class="order_item_count">
                <div productId="<?php echo e($id); ?>" type="<?php echo e($type); ?>" id="order-minus">-</div>
                <p><?php echo e($count); ?></p>
                <div productId="<?php echo e($id); ?>" type="<?php echo e($type); ?>" id="order-plus">+</div>
            </div>
            <div class="order_item_price"><p><?php echo e($price); ?> грн</p></div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/Components/orderItem.blade.php ENDPATH**/ ?>