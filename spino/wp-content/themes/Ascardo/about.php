<?php
/*
Template Name: About Page
*/
get_header(); ?>
		<section class="about-main section">
			<div class="row">

				<div class="about-text">
					<img src="/wp-content/themes/ascardo/img/about.jpg" alt="">
					<h2><?php the_title(); ?></h2>
					<?php the_field('about_text'); ?>
				</div>


			</div>
		</section>
<?php get_footer(); ?>
