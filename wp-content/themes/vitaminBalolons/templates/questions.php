<div class="questions">
    <div class="flex_container">
        <div class="block-title">
            <b>Вопрос/ответ</b>
            <span>Мы гордимся своей работой</span>
            <p>Люди доверяют нам украшение важных моментов в жизни, и мы благодарим их за доверие качественной работой.</p>
        </div>
        <div class="tabs-list">
            <ul class="tabs">
                <?php
                    $params = array(
                        'post_type' => 'questions',
                        'posts_per_page' => 4,
                    );
                    $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php $name_tab = get_field('name_tab'); ?>
                            

                            <li>
                                <a><?php echo $name_tab ?></a>
                            </li>
                        <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="tabs-content">
                <?php
                $params = array(
                    'post_type' => 'questions',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>

                <?php $description_tab = get_field('description_tab'); ?>

                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <div class="tabs-panel">
                                <div class="accordion">
                                    <?php while ( have_rows('tab') ) : the_row(); ?>
                                        <?php 
                                            if(get_sub_field('question')){ ?>
                                                <div class="accordion-item">
                                                    <a href="#" class="heading">
                                                        <div class="icon"></div>
                                                        <div class="title"><span class="ask">Вопрос:</span> <?php the_sub_field('question') ?></div>
                                                    </a>
                                                    <div class="content">
                                                        <span class="ask_red">Ответ:</span>
                                                        <p><?php the_sub_field('ask') ?> </p>
                                                    </div>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="accordion-item active description_tab">
                                                    <p><?php echo get_field('description_tab') ?></p>
                                                </div>
                                        <?php }
                                    endwhile; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>