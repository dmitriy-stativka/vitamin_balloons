<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package utg
 */

get_header(); ?>

	<div class="main">
        <div class="error-page">
            <div class="flex_container">
                <div class="flex_row">
                
                    <div class="flex_col--1-2">
                        <div class="error-text">
                            <b>404</b>
                            <span>Страница не найдена</span>
                            <p>Страница, на которую Вы пытаетесь перейти, временно недоступна. Пожалуйста перезагрузите страницу, либо посетите сайт позже.</p>
                            <a class="balloons-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">НА ГЛАВНУЮ</a>
                        </div>
                    </div>

                    <div class="flex_col--1-2">
                        <div class="error-image">
                            <img src="/wp-content/themes/vitaminBalolons/images/error_image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();