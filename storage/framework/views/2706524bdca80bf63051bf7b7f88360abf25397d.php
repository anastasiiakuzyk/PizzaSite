<div class="container">
    <form action="<?php echo e(route('order.create')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="order_column">
                <h2>Оформлення замовлення</h2>

                <div class="order">
                    <div class="order_user_info">
                        <input type="text" name="name" class="textblock" placeholder="Ім’я" required>
                        <input type="text" name="surname" class="textblock" placeholder="Прізвище" required>
                        <input type="text" name="street" class="textblock" placeholder="Адреса" required>
                        <input type="email" name="email" class="textblock" placeholder="Email" required>
                        <div class="payment_label">
                            <p>Спосіб оплати</p>

                            <div class="payments">
                                <div class="payment">
                                    <input type="radio" id="cardPayment" checked class="defRadio" name="payment" value="0">
                                    <label for="cardPayment">Оплата кур'єру банківською картою</label>
                                </div>
                                <div class="payment">
                                    <input type="radio" id="onlinePayment" class="defRadio" name="payment" value="1">
                                    <label for="onlinePayment">Оплата онлайн</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="user_cart">
                        <p id="users_order">Ваше замовлення:</p>

                        <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__env->startComponent('Components.orderItem'); ?>
                                <?php $__env->slot('name'); ?>
                                    <?php echo e($item->name); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('price'); ?>
                                    <?php echo e($item->price); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('type'); ?>
                                    pizza
                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('count'); ?>
                                    <?php echo e($item->count == 0 ? 1 : $item->count); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('ingredients'); ?>
                                    Test
                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('img'); ?>
                                    <?php echo e($item->image_title); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('id'); ?>
                                    <?php echo e($item->id); ?>

                                <?php $__env->endSlot(); ?>
                            <?php if (isset($__componentOriginal064878e0342619491e332e997f81c85efe64a0f6)): ?>
<?php $component = $__componentOriginal064878e0342619491e332e997f81c85efe64a0f6; ?>
<?php unset($__componentOriginal064878e0342619491e332e997f81c85efe64a0f6); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $drinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__env->startComponent('Components.orderItem'); ?>
                                <?php $__env->slot('name'); ?>
                                    <?php echo e($item->name); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('type'); ?>
                                    drink
                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('price'); ?>
                                    <?php echo e($item->price); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('count'); ?>
                                    <?php echo e($item->count == 0 ? 1 : $item->count); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('ingredients'); ?>
                                    Test
                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('img'); ?>
                                    <?php echo e($item->image_title); ?>

                                <?php $__env->endSlot(); ?>
                                <?php $__env->slot('id'); ?>
                                    <?php echo e($item->id); ?>

                                <?php $__env->endSlot(); ?>
                            <?php if (isset($__componentOriginal064878e0342619491e332e997f81c85efe64a0f6)): ?>
<?php $component = $__componentOriginal064878e0342619491e332e997f81c85efe64a0f6; ?>
<?php unset($__componentOriginal064878e0342619491e332e997f81c85efe64a0f6); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <p id="total">Всього: <?php echo e($sum); ?> грн</p>
                    </div>
                </div>

                <div class="btn">
                    <input type="submit" class="submit_btn" value="Оформити замовлення">
                </div>


        </div>
    </form>
</div>
<?php /**PATH /var/www/clients/client43/web50/web/resources/views/cartContent.blade.php ENDPATH**/ ?>