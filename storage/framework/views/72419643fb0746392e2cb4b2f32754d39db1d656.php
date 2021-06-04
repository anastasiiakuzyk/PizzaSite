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
                <!--<form action="<?php echo e(route('cart.remove')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="type" value="<?php echo e($type); ?>" />
                    <input type="hidden" name="value" value="<?php echo e($id); ?>" />
                    <button>-</button>
                </form>-->
                <p><?php echo e($count); ?></p>
            </div>
            <div class="order_item_price"><p><?php echo e($price); ?> грн</p></div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/clients/client43/web50/web/resources/views/Components/orderItem.blade.php ENDPATH**/ ?>