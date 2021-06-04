<div class="pizza">
    <img src="<?php echo e(asset('images/pizzas/'.$img)); ?>" alt="<?php echo e($name); ?>">
    <div class="pizza_tag">
        <p><?php echo e($name); ?></p>
        <p><?php echo e($price); ?>грн</p>
    </div>
    <div class="ingredients"><b>Інгредієнти:</b> <?php echo e($ingredients); ?></div>


    <div class="cart_btn" type="pizza" value="<?php echo e($id); ?>">У кошик</div>
</div>
<?php /**PATH /var/www/html/resources/views/Components/pizza.blade.php ENDPATH**/ ?>