<div class="container">
    <div class="result">
        <div class="pizza_template">
            <img class="pizza_template_img" src="<?php echo e(asset('/images/constructor/parts/base_cl.svg')); ?>" />
            <div class="pizza_template_title">
                <h3>Конструктор піци</h3>
                <p>Виберіть розмір, соус і топінги</p>
            </div>

            <div class="buy_row">
                <p class="template_price">150 грн</p>
                <p class="submit_btn">Замовити</p>
            </div>
        </div>

        <div class="pizza_parts">
            <div class="part_types">
                <ul>
                    <li><div class="type_img type_img1"></div> Розмір</li>
                    <li><div class="type_img type_img2"></div> Топінг</li>
                    <li><div class="type_img type_img3"></div> Бортик</li>
                </ul>
            </div>
            <div class="line"></div>
            <div class="template_sizes">
                <div class="size">
                    <div class="size_img_section">
                        <img src="<?php echo e(asset('/images/constructor/medium.svg')); ?>" class="medium_size_img" />
                    </div>
                    <p>Середня</p>
                </div>
                <div class="size">
                    <div class="size_img_section">
                        <img class="big_size_img" src="<?php echo e(asset('/images/constructor/big.svg')); ?>" />
                    </div>
                    <p>Велика</p>
                </div>
            </div>

            <h5>Соуси</h5>

            <div class="souses">
                <div class="radio_with_label">
                    <input checked type="radio" name="souse" value="classic" class="radio" id="classic" />
                    <label for="classic">Соус класичний</label>
                </div>
                <div class="radio_with_label">
                    <input type="radio" name="souse" value="bbq" class="radio" id="bbq" />
                    <label for="bbq">Соус BBQ</label>
                </div>
                <div class="radio_with_label">
                    <input type="radio" name="souse" value="rikota" class="radio" id="rikota" />
                    <label for="rikota">Соус рікота</label>
                </div>
            </div>

            <div class="line"></div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/clients/client43/web50/web/resources/views/constructorContent.blade.php ENDPATH**/ ?>