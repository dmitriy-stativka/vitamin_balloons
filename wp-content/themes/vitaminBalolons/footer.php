<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package utg
 */

?>

	<footer class="footer">
        <div class="flex_container">
            <div class="footer-list">
                <a onclick="$('html, body').animate({scrollTop:$('header').offset().top}, '500', 'swing');" class="footer-up">Наверх</a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a onclick="$('html, body').animate({scrollTop:$('header').offset().top}, '500', 'swing');" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="$('html, body').animate({scrollTop:$('.example').offset().top}, '500', 'swing');" class="nav-link">Наши работы</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="$('html, body').animate({scrollTop:$('.about').offset().top}, '500', 'swing');" class="nav-link">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="$('html, body').animate({scrollTop:$('.reviews').offset().top}, '500', 'swing');" class="nav-link"> Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="$('html, body').animate({scrollTop:$('.questions').offset().top}, '500', 'swing');" class="nav-link">Вопросы</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="$('html, body').animate({scrollTop:$('.map').offset().top}, '500', 'swing');" class="nav-link">Контакты</a>
                    </li>
                </ul>
                <span class="footer-copywrite">©Vitamin balloons 2019.</span>
            </div>
        </div>
    </footer>

    <div class="popup__overlay">
        <div class="popup">
            <a class="popup__close"></a>
            <div class="text-center">
                <b>Поделитесь опытом с другими пользователями</b>
            </div>
            <div class="popup__body">
                <?php echo do_shortcode('[testimonial_view id="2"]');?>
                <span>Перед публикацией, отзывы проходят модерацию</span>
            </div>
        </div>
    </div>

    <div class="popup__call--back">
        <div class="popup popup__in">
            <img class="popup__in__balls popup__in__balls--one" src="/wp-content/themes/vitaminBalolons/images/ball_two.png" alt="">
            <a class="popup__close"></a>
            <div class="text-center">
                <div class="block-title">
                    <b>Перезвоним Вам с удовольствием</b>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
            </div>
            <div class="popup__body">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Форма заказа"]');?>               
            </div>

            <img class="popup__in__balls popup__in__balls--two" src="/wp-content/themes/vitaminBalolons/images/ball_one.png" alt="">
        </div>
    </div>


    <div class="popupProduct">
        <div class="popup">
            <div class="popupProduct-description">
                
            </div>
            <a class="popup__close"></a>
            <a class="balloons-button popup__call">Сделать заказ</a>
        </div>
    </div>


<?php wp_footer(); ?>

</body>
</html>