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

<body <?php body_class(); ?>>

<div class="wrapper">

    <header class="header">
        <div class="flex_container header_container">
            <div class="logo">
                <a href="#">
                    <img src="/wp-content/themes/vitaminBalolons/images/logo.svg" alt="">
                </a>
            </div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Наши работы</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">О компании</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> Отзывы</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Вопросы</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Контакты</a>
                </li>
            </ul>
            <div class="contact">
                <span class="time-work">Пн-пт: 09:00 - 18:00</span>
                <div class="contact-tell">
                    <a href="tel:+380 66 128 54 64">+38(066)128-54-64</a>
                    <a class="popup__toggle" href="#">Обратный звонок</a>
                </div>
            </div>
            <div class="header-left-button">
                <a class="balloons-button" href="#">Сделать заказ</a>
            </div>

        </div>

      

    </header>