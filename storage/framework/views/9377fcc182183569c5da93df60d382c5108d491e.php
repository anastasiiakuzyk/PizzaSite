<script>
    const toping = <?php echo $ingredients->toJson(); ?>;
</script>
<div class="container">
    <div class="result">
        <div class="pizza_template">
            <div class="pizza_template_title">
                <h3>Конструктор піци</h3>
                <p>Виберіть розмір, соус і топінги</p>
                <p class="template_requires">До замовлення входить:</p>
                <ul id="option-list">
                </ul>
            </div>
            <div class="buy_row">
                <p id="price" class="template_price">0 грн</p>
                <p id="submit_c" class="submit_btn">Замовити</p>
            </div>
        </div>

        <div class="pizza_parts">
            <div class="part_types">
                <ul>
                    <li id="size-tab" class="active"><div class="type_img type_img1"></div> Розмір</li>
                    <li id="toping-tab"><div class="type_img type_img2"></div> Топінг</li>
                    <li id="round-tab"><div class="type_img type_img3"></div> Бортик</li>
                </ul>
            </div>
            <div class="line"></div>
            <div id="tab-content">
                <div id="tab-content-slider">
                    <div class="template_sizes">
                        <div id="small-size" value="80" class="size">
                            <div class="size_img_section">
                                <img src="<?php echo e(asset('/images/constructor/medium.svg')); ?>" class="medium_size_img" />
                            </div>
                            <p>Середня (60грн)</p>
                        </div>
                        <div id="big-size" value="100" class="size">
                            <div class="size_img_section">
                                <img class="big_size_img" src="<?php echo e(asset('/images/constructor/big.svg')); ?>" />
                            </div>
                            <p>Велика (80грн)</p>
                        </div>
                    </div>
                    <div class="toping__wrapper">
                        <div class="toping__grid">
                            <?php $__currentLoopData = $ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="toping" value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?> (<?php echo e($item->price); ?>грн)</div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="toping__wrapper">
                        <div class="borders__grid">
                            <div class="border" value="1">З сосикою (30грн)</div>
                            <div class="border" value="2">З сиром (20грн)</div>
                            <div class="border" value="3">Подвійна сосика (50грн)</div>
                            <div class="border" value="4">Без бортику (0грн)</div>
                        </div>
                    </div>
                </div>

                <div id="tab-next" class="submit_btn">Наступний пункт</div>
            </div>
            <div class="line"></div>

            <div id="sw" class="souses__wrapper">
                <h2>Соуси</h2>
                <div class="souses">
                    <div class="radio_with_label">
                        <input type="radio" name="souse" value="classic" class="radio" id="classic" />
                        <label class="souse" value="1" for="classic">Соус класичний (10грн)</label>
                    </div>
                    <div class="radio_with_label">
                        <input type="radio" name="souse" value="bbq" class="radio" id="bbq" />
                        <label class="souse" value="2" for="bbq">Соус BBQ (10грн)</label>
                    </div>
                    <div class="radio_with_label">
                        <input type="radio" name="souse" value="rikota" class="radio" id="rikota" />
                        <label class="souse" value="3" for="rikota">Соус рікота (10грн)</label>
                    </div>
                </div>
            </div>


            <div class="line"></div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/constructorContent.blade.php ENDPATH**/ ?>