<?php
/*
Template Name: Reviews Page
*/
get_header(); ?>
<section id="reviews" class="reviews main-reviews">
    <div class="row">
        <div id="fadeBlock">
            <div class="text-center">
                <b class="title-name">Оставьте свой отзыв!</b>
                <p class="desc-title">Пользователи смогут видеть Ваше сообщение после <br>прохождения модерации.</p>
                <div class="green-line-block">
                    <span class="green-line"></span>
                </div>
            </div>
            <?php echo do_shortcode('[testimonial_view id="2"]'); ?>
        </div>
        <?php echo do_shortcode('[testimonial_view id="3"]'); ?>
    </div>
</section>
<?php get_footer(); ?>
