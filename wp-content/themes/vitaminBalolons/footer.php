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
		        <a href="#" class="popup__close"></a>
                <div class="text-center">
                    <b>Поделитесь опытом с другими пользователями</b>
                </div>
                <div class="popup__body">
                    <?php echo do_shortcode('[testimonial_view id="2"]');?>
                    <span>Перед публикацией, отзывы проходят модерацию</span>
                </div>
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
    
	



        



</script>

</body>
</html>