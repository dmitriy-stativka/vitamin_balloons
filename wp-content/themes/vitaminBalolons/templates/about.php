<div class="about">
    <div class="flex_container">
        <div class="flex_row">
            <div class="flex_col--1-2">
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
            <div class="flex_col--1-2">
                <ul class="about-list">
                    <li class="about-item">
                        <span>01</span>
                        <p>Единственные даем гарантию на полет латексных шаров 3 дня</p>
                    </li>
                    <li class="about-item">
                        <span>02</span>
                        <p>Наши цены дешевле чем у конкурентов.</p>
                    </li>
                    <li class="about-item">
                        <span>03</span>
                        <p>Быстрое изготовление заказа (в теч 2х часов)</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <a class="balloons-button popup__call">Сделать заказ</a>
        </div>
    </div>
</div>