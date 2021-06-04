<div class="container title_image">
    <h3>Роби замовлення та отримай знижку -30% на другу</h3>
</div>

<div class="container">

    <div class="top_pizzas">

        <h2>Наші ТОП-3 піци</h2>

        <div class="pizzas">
            <?php $__env->startComponent('Components/pizza'); ?>
                <?php $__env->slot('img'); ?>
                    karbonara.png
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('name'); ?>
                    Карбонара
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('price'); ?>
                    195
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('ingredients'); ?>
                    твердий сир, бекон, яйце, гриби,
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('id'); ?>
                    25
                <?php $__env->endSlot(); ?>
            <?php if (isset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf)): ?>
<?php $component = $__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf; ?>
<?php unset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            <?php $__env->startComponent('Components/pizza'); ?>
                <?php $__env->slot('img'); ?>
                    4cheese.png
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('name'); ?>
                    4 сири
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('price'); ?>
                    175
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('ingredients'); ?>
                    твердий сир, томатний соус,
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('id'); ?>
                    26
                <?php $__env->endSlot(); ?>
            <?php if (isset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf)): ?>
<?php $component = $__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf; ?>
<?php unset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            <?php $__env->startComponent('Components/pizza'); ?>
                <?php $__env->slot('img'); ?>
                    chikenMushrooms.png
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('name'); ?>
                    З куркою та грибами
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('ingredients'); ?>
                    твердий сир, курятина, кукурудза, гриби,
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('price'); ?>
                    205
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('id'); ?>
                    27
                <?php $__env->endSlot(); ?>
            <?php if (isset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf)): ?>
<?php $component = $__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf; ?>
<?php unset($__componentOriginalca61cadcdd852e22c8b243052cc377facf1f9adf); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
        </div>
    </div>
</div>

<div class="container treasures">
    <h2>Цінності піцерії</h2>

    <div class="treasure_rects">
        <div class="first_treasure_rect">
            <ul>
                <li>Повернемо кошти, якщо клієнт незадоволений</li>
                <li>Перероблюємо 87% сміття та використаних матеріалів</li>
                <li>Незалежно від карантинних умов дезінфікуємо приміщення, кухню та руки. Чистота - запорука нашого
                    успіху
                </li>
                <li>Швидко та якісно готуємо наші смачні та соковиті піци</li>
            </ul>
        </div>

        <div class="second_treasure_rect">
            <ul>
                <li>Швидко та якісно готуємо наші смачні та соковиті піци</li>
                <li>Ми за усвідомлене споживання пластику! Тому наші коробки та пакети з картону, столові прибори з
                    крохмалю, вологі та сухі серветки з бавовни, а напої в картонних упаковках Tetra Pak
                </li>
                <li>Можете відправити нам назад усе сміття та ми відправимо його на переробку!</li>
            </ul>
        </div>
    </div>
</div>
<div class="container expander"></div>
<div class="container make_order">
    <h3>Безконтактна доставка за 30 хвилин</h3>

    <p class="make_order_btn"><a href="/constructor">Зробити замовлення</a></p>
</div>

<div class="container">
    <div class="comments">
        <h2>Відгуки</h2>

        <div class="comment_clouds">
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__env->startComponent('Components.comment'); ?>
                    <?php $__env->slot('img'); ?>
                        <?php echo e($comment['user_image']); ?>

                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('comment'); ?>
                        <?php echo e($comment['comment']); ?>

                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('username'); ?>
                        <?php echo e($comment['user_name']); ?>

                    <?php $__env->endSlot(); ?>
                <?php if (isset($__componentOriginal0f9367a7dc8fac1007ad0390bba94e4ddd8dc54f)): ?>
<?php $component = $__componentOriginal0f9367a7dc8fac1007ad0390bba94e4ddd8dc54f; ?>
<?php unset($__componentOriginal0f9367a7dc8fac1007ad0390bba94e4ddd8dc54f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>


    <div class="form">
        <h2>Залиште нам свій відгук</h2>
        <form action="<?php echo e(route('comment.add')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="user_info">
                <input type="text" name="userName" placeholder="Ім'я" class="input textblock" required>
                <input type="email" name="email" placeholder="E-mail" class="input textblock" required>
            </div>
            <textarea name="message" cols="50" rows="5" class="textblock" placeholder="Повідомлення" required></textarea>
            <input type="submit" class="submit_btn" value="Відправити">
        </form>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/mainPageContent.blade.php ENDPATH**/ ?>