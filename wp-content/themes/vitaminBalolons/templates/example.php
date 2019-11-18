<div class="example">
    <div class="flex_container">
        <div class="block-title">
            <b>Последние работы</b>
            <span>Нам есть чем похвастаться!</span>
            <p>Люди доверяют нам украшение важных моментов в жизни, и мы благодарим их за доверие качественной работой.</p>
        </div>
        <div class="frame main-news__items-wrapp" id="cycleitems">
            <ul class="clearfix main-news__items-wrapp">
                <?php
                    $params = array(
                        'post_type' => 'products',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query( $params );
                    ?>
                    <?php if($query->have_posts()): ?>
                            <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php $gallery = get_field('gallery'); ?>
                            <?php $description = get_field('description'); ?>


                            <li class="news-slider__item example-item" data-id="<?php echo $post->ID?>">
                                <div class="product">
                                    <div class="example-image">
                                        <img src="<?php echo $gallery[0]['url'];?>" alt="">
                                    </div>
                                    <b class="example-name"><?php the_title();?></b>
                                    <span class="example-data"><?php the_time("d.m.Y"); ?></span>
                                </div>                                
                            </li>

                            

                            <?php endwhile; ?>
                    <?php endif; ?>
            </ul>
        </div>
        <div class="scrollbar-nav">
            <span class="prev"></span>
            <div class="scrollbar">
                <div class="handle"></div>
            </div>
            <span class="next"></span>
        </div>
        <div class="call-back">
            <b>Хотите так же?</b>
            <a class="balloons-button popup__call">Сделать заказ</a>
        </div>
    </div>
</div>