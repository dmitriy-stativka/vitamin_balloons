<div class="about">
    <div class="flex_container">
        <div class="flex_row">
            <div class="flex_col-desk--1-2">
                <div class="block-title">
                    <b>О компании</b>
                    <span>Мы гордимся своей работой!</span>
                    <?php 
                        wp_reset_postdata();
                        global $post;
                    ?>
                    <p><?php the_field('text_about');?></p>
                </div>
            </div>
            <div class="flex_col-desk--1-2">
                <ul class="about-list">
                    <?php 
                        $params = array(
                            'post_type' => 'utp_text',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query( $params );
                        ?>
                        <?php if($query->have_posts()): ?>
                            <?php $number = 0; ?>
                                <?php while ($query->have_posts()): $query->the_post() ?>
                                <?php $number++?>
                                    <?php $utp_item = get_field('text_utp');
                                    echo $params->posts_per_page; ?>
                                    <li class="about-item">
                                        <span>0<?php echo $number;?></span>
                                        <p><?php echo $utp_item;?></p>
                                    </li>
                                <?php endwhile; ?>
                        <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <a class="balloons-button popup__call">Сделать заказ</a>
        </div>
    </div>
</div>