<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package utg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<?php $work_time = get_field('work_time');?>

<body <?php body_class(); ?>>

<div class="wrapper">
    <header class="header">
        <div class="flex_container header_container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="/wp-content/themes/vitaminBalolons/images/logo.svg" alt="">
                </a>
            </div>
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
            <div class="contact">
                <span class="time-work"><?php echo $work_time;?></span>
                <div class="contact-tell">
                    <a href="tel:<?php the_field('tel_phone');?>"><?php the_field('tel_phone');?></a>
                    <a class="popup__call">Обратный звонок</a>
                </div>
            </div>
            <div class="header-left-button">
                <a class="balloons-button popup__call">Сделать заказ</a>
            </div>
        </div>
    </header>