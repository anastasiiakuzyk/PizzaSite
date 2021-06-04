<div class="container">
    <div class="our_pizzas">
        <h2>Наші піци</h2>

        <select name="sort" class ="combik" title="Сортування">
            <option value="all" selected hidden>Сортування</option>
            <option value="meat">М'ясні</option>
            <option value="hot">Гострі</option>
            <option value="veg">Вегетаріанські</option>
        </select>

        <div class="pizza_row">
            <?php for($i = 0; $i < count($pizzas); $i++): ?>
                <?php $__env->startComponent('Components/pizza'); ?>
                    <?php $__env->slot('img'); ?>
                        <?php echo e($pizzas[$i]['image_title']); ?>

                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('name'); ?>
                        <?php echo e($pizzas[$i]['name']); ?>

                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('price'); ?>
                        <?php echo e($pizzas[$i]['price']); ?>

                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('id'); ?>
                        <?php echo e($pizzas[$i]['id']); ?>

                    <?php $__env->endSlot(); ?>
                <?php if (isset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf)): ?>
<?php $component = $__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf; ?>
<?php unset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            <?php endfor; ?>
        </div>

        <p class="loadMore">Load more</p>
    </div>
</div>
<div class="container ctor_image">
    <h3>Або збери сам у нашому конструкторі</h3>

    <p class="ctorBtn"><a href="constructor">Перейти до конструктора</a></p>
</div>

<div class="container drinks">
    <h2>Напої</h2>
    <div class="pizza_row">
    <?php for($i = 0; $i < count($drinks); $i++): ?>
        <?php $__env->startComponent('Components.drink'); ?>
            <?php $__env->slot('img'); ?>
                <?php echo e($drinks[$i]['image_title']); ?>

            <?php $__env->endSlot(); ?>
            <?php $__env->slot('name'); ?>
                <?php echo e($drinks[$i]['name']); ?>

            <?php $__env->endSlot(); ?>
            <?php $__env->slot('price'); ?>
                <?php echo e($drinks[$i]['price']); ?>

            <?php $__env->endSlot(); ?>
            <?php $__env->slot('volume'); ?>
                <?php echo e($drinks[$i]['volume']); ?>

            <?php $__env->endSlot(); ?>
            <?php $__env->slot('id'); ?>
                <?php echo e($drinks[$i]['id']); ?>

            <?php $__env->endSlot(); ?>
        <?php if (isset($__componentOriginald0f7e6feacac44ac05e961851a2f7ac6e4d59422)): ?>
<?php $component = $__componentOriginald0f7e6feacac44ac05e961851a2f7ac6e4d59422; ?>
<?php unset($__componentOriginald0f7e6feacac44ac05e961851a2f7ac6e4d59422); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    <?php endfor; ?>
    </div>
</div>
<?php /**PATH /var/www/clients/client43/web50/web/resources/views/menuContent.blade.php ENDPATH**/ ?>