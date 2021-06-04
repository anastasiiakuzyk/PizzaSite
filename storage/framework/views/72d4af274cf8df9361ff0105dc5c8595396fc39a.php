<div class="pizza">
    <img src="/images/drinks/<?php echo e($img); ?>" alt="<?php echo e($name); ?>">
    <div class="pizza_tag">
        <p><?php echo e($name); ?></p>
        <p><?php echo e($price); ?>/<?php echo e($volume); ?>l</p>
    </div>

    <p class="cart_btn" type="drink" value="<?php echo e($id); ?>">У кошик</p>
</div>
<?php /**PATH /var/www/html/resources/views/Components/drink.blade.php ENDPATH**/ ?>