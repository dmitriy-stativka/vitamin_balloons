<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package utg
 */

get_header();
?>

	<div class="main">
        <div class="error-page">
            <div class="flex_container">
                <div class="flex_row">
                    <div class="flex_col--1-2">
                        <img src="/wp-content/themes/utg/images/error_image.png" alt="">
                    </div>
                    <div class="flex_col--1-2">
                        <div class="error-text">
                            <b>Страница не найдена</b>
                            <p>Похоже что страница, на которую Вы пытались перейти временно не доступна, или ее не существует. Проверьте правильность ввода адреса либо вернитесь на главную.</p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
