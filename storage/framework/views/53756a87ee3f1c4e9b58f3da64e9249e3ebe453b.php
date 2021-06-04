<div class="container">
    <div class="our_contacts">
        <h2>Наші контакти</h2>

        <div class="about_us_contact_details">
            <div class="about_us_contacts">
                <div class="about_us_contacts_row">
                    <div class="about_us_contacts_row_item">
                        <img src="/images/phone_black.svg" alt="">
                        <p>+ 380 (66) 42 065 73</p>
                    </div>
                    <div class="about_us_contacts_row_item">
                        <img src="/images/gps.svg" alt="">
                        <ul>
                            <li>Україна, Київ</li>
                            <li>вул. Мистецька, 123</li>
                        </ul>
                    </div>
                    <div class="about_us_contacts_row_item">
                        <img src="/images/clock.svg" alt="">
                        <ul>
                            <li>пн-пт: 9:00-22:00</li>
                            <li>сб-нд: 8:00-23:00</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about_us_features">
                <div class="about_us_features_item">
                    <img src="/images/about1.png" alt="">
                    <p>Доставка за 30 хвилин. Швидко та якісно готуємо наші смачні та соковиті піци</p>
                </div>
                <div class="about_us_features_item">
                    <img src="/images/about2.png" alt="">
                    <p>Незалежно від карантинних умов дезінфікуємо приміщення, кухню та руки. Чистота - запорука нашого успіху</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about_us_team">
        <h2>Наша команда</h2>
        <div class="about_us_features about_us_team_main_items">
            <div class="about_us_features_item about_us_team_item">
                <img src="/images/about3.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu bibendum enim, id dictum ante. Ut dictum velit ac laoreet commodo.</p>
            </div>
            <div class="about_us_features_item about_us_team_item">
                <img src="/images/about4.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu bibendum enim, id dictum ante. Ut dictum velit ac laoreet commodo.</p>
            </div>
        </div>

        <div class="about_us_teamates">
            <div class="about_us_team_row">
                <div class="about_us_team_row_item">
                    <div class="about_us_team_row_item__image">
                        <img src="/images/about5.png" alt="">
                    </div>
                    <p>Lorem ipsum</p>
                </div>
                <div class="about_us_team_row_item">
                    <div class="about_us_team_row_item__image">
                        <img src="/images/about6.png" alt="">
                    </div>
                    <p>Lorem ipsum</p>
                </div>
            </div>
            <div class="about_us_team_row">
                <div class="about_us_team_row_item">
                    <div class="about_us_team_row_item__image">
                        <img src="/images/about7.png" alt="">
                    </div>
                    <p>Lorem ipsum</p>
                </div>
                <div class="about_us_team_row_item">
                    <div class="about_us_team_row_item__image">
                        <img src="/images/about8.png" alt="">
                    </div>
                    <p>Lorem ipsum</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about_us_certificates_block">
        <h2>Сертифікати якості</h2>

        <div class="about_us_certificates">
            <img src="/images/certificate1.png" alt="">
            <img src="/images/certificate2.png" alt="">
            <img src="/images/certificate3.png" alt="">
        </div>
    </div>

        <div class="form">
        <h2>Залиште нам свій відгук</h2>

        <form action="#">
            <?php echo csrf_field(); ?>
            <div class="user_info">
                <input type="text" name="userName" placeholder="Ім'я" class="input textblock">
                <input type="text" name="email" placeholder="E-mail" class="input textblock">
            </div>
            <textarea name="message" cols="50" rows="5" class="textblock" placeholder="Повідомлення"></textarea>
            <input type="submit" class="submit_btn" value="Відправити">
        </form>
    </div>
</div>
<?php /**PATH /var/www/clients/client43/web50/web/resources/views/aboutContent.blade.php ENDPATH**/ ?>