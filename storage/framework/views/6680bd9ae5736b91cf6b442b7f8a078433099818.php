<div class="container">
    <script>
        const top_scroll = localStorage.getItem("scroll") ?? 0;
        console.log(top_scroll);
        if (top_scroll !== null && document.location.search !== "") {
            setTimeout(() => {
                window.scroll(0,top_scroll);
                localStorage.removeItem('scroll')
            }, 300)
        }
    </script>
    <div class="our_pizzas">
        <h2>Наші піци</h2>

        <form method="get" action="">
            <input type="hidden" name="more" value="<?php echo e($more); ?>" />
            <select onchange="this.form.submit()" name="sort" class ="combik" title="Сортування">
                <option value="all" selected>Сортування</option>
                <option value="meat" <?php echo e($sort === "meat" ? "selected" : ""); ?>>М'ясні</option>
                <option value="hot" <?php echo e($sort === "hot" ? "selected" : ""); ?>>Гострі</option>
                <option value="veg" <?php echo e($sort === "veg" ? "selected" : ""); ?>>Вегетаріанські</option>
            </select>
        </form>

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
                    <?php $__env->slot('ingredients'); ?>
                        <?php $__currentLoopData = $pizzas[$i]->ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($item->name); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php if(!$all): ?>
            <form style="display: flex" onsubmit="localStorage.setItem('scroll', document.documentElement.scrollTop)" method="get" action="">
                <input type="hidden" name="sort" value="<?php echo e($sort); ?>" />
                <input type="hidden" name="more" value="<?php echo e($more + 10); ?>" />
                <input type="submit" value="Load more" id="btn_more" class="loadMore" />
            </form>
        <?php endif; ?>

    </div>
</div>
<div class="container ctor_image">
    <h3>Або збери сам у нашому конструкторі</h3>

    <p class="ctorBtn"><a href="/constructor">Перейти до конструктора</a></p>
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
<?php /**PATH /var/www/html/resources/views/menuContent.blade.php ENDPATH**/ ?>