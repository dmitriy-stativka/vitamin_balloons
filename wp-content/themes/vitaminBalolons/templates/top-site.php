<div class="top-site">
    <div class="flex_container">
        <div class="flex_row top-site-row">
            <div class="flex_col-desk--1-2">
                <b><?php the_field('title_on_first_screen');?></b>
                <p><?php the_field('text_on_first_screen');?></p>
                <div class="top-button">
                    <a class="balloons-button popup__call">ПЕРЕЗВОНИТЕ МНЕ</a>
                </div>
            </div>
            <div class="flex_col-desk--1-2">
                <div class="top-image">
                    <img src="/wp-content/themes/vitaminBalolons/images/balloons.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="top-site-social">
        <span>Мы в соц. сетях</span>
        <ul class="top-site-social-list">
            <?php while ( have_rows('social_list') ) : the_row(); ?>
                <?php $icon_social = get_sub_field('icon_social');?>
                <li class="top-site-social-item">
                    <a class="top-site-social-link" target="_blank" href="<?php the_sub_field('social_link');?>" style="background: url(<?php echo $icon_social['url']?>) no-repeat center center;"></a>
                </li> 
            <?php endwhile; ?>
        </ul>
    </div>
</div>