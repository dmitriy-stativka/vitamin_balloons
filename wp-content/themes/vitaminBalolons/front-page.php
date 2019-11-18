<?php get_header();?>

<?php include( locate_template('templates/top-site.php') ); ?>

<?php include( locate_template('templates/example.php') ); ?>

<?php include( locate_template('templates/about.php') ); ?>

<?php include( locate_template('templates/reviews.php') ); ?>

<div class="sale">
    <div class="flex_container">
        <div class="text-center">
            <b>Сделайте заказ сейчас, и получите скидку 15%! </b>
            <a class="balloons-button popup__call">Сделать заказ</a>
        </div>
    </div>
</div>

<?php include( locate_template('templates/questions.php') ); ?>

<?php wp_reset_postdata(); ?>

<div class="map">
    <div class="map--info">
        <div class="map-logo">
            <img src="/wp-content/themes/vitaminBalolons/images/logo.svg" alt="">
        </div>
        <div class="map-text">
            <b>Всегда рады Вас видеть у себя в гостях.</b>
        </div>
        <div class="map-adress">
            <span><?php the_field('adress');?></span>
            <a href="tel:<?php the_field('tel_phone');?>"><?php the_field('tel_phone');?></a>
            <span><?php the_field('work_time');?></span>
        </div>
    </div>
</div>

<div class="section-social">
    <div class="flex_container">
        <div class="block-title">
            <b>Мы в сетях</b>
            <span>Следите за нами в соц.сетях</span>
        </div>

        <div class="top-site-social">
            <ul class="top-site-social-list">
                    <?php
                    wp_reset_postdata();
                    global $post;
                    
                    while ( have_rows('social_list', $post->ID) ) : the_row(); ?>
                        <?php $icon_social = get_sub_field('icon_social');?>
                        <li class="top-site-social-item">
                            <a class="top-site-social-link" target="_blank" href="<?php the_sub_field('social_link');?>" style="background: url(<?php echo $icon_social['url']?>) no-repeat center center;"></a>
                            
                        </li> 
                    <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>

<?php get_footer();?>

<script>
    const tabLinks = document.querySelectorAll(".tabs a");
    const tabPanels = document.querySelectorAll(".tabs-panel");

    for (let el of tabLinks) {
    el.addEventListener("click", e => {
        e.preventDefault();

        document.querySelector(".tabs li.active").classList.remove("active");
        document.querySelector(".tabs-panel.active").classList.remove("active");

        const parentListItem = el.parentElement;
        parentListItem.classList.add("active");
        const index = [...parentListItem.parentElement.children].indexOf(parentListItem);

        const panel = [...tabPanels].filter(el => el.getAttribute("data-index") == index);
        panel[0].classList.add("active");
        });
    }
</script>