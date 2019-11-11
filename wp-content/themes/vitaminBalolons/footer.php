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
    


<?php wp_footer(); ?>

<script>

$('.reviews-list').slick({
  infinite: false,
  slidesToShow: 3,
  slidesToScroll: 2,
  dots: true
});







var p = $('.popup__overlay')
$('.popup__toggle').click(function() {
    p.addClass('popup_open')
})
p.click(function(event) {
    e = event || window.event
    if (e.target == this) {
        $(p).removeClass('popup_open');
    }
})
$('.popup__close').click(function() {
    p.removeClass('popup_open')
})
$(function() {
    $('.popup__toggle').bind('click', function(e) {
        e.preventDefault();
    });
});
    
	



var m = $('.popup__call--back')
$('.popup__call').click(function() {
    m.addClass('popup_open_in')
})
m.click(function(event) {
    t = event || window.event
    if (t.target == this) {
        $(m).removeClass('popup_open_in');
    }
})
$('.popup__close').click(function() {
    m.removeClass('popup_open_in')
})
$(function() {
    $('.popup__call').bind('click', function(t) {
        t.preventDefault();
    });
});
    

$('.accordion-item .heading').on('click', function(e) {
    e.preventDefault();

    // Add the correct active class
    if($(this).closest('.accordion-item').hasClass('active')) {
        // Remove active classes
        $('.accordion-item').removeClass('active');
    } else {
        // Remove active classes
        $('.accordion-item').removeClass('active');

        // Add the active class
        $(this).closest('.accordion-item').addClass('active');
    }

    // Show the content
    var $content = $(this).next();
    $content.slideToggle(100);
    $('.accordion-item .content').not($content).slideUp('fast');
});







        



</script>

</body>
</html>