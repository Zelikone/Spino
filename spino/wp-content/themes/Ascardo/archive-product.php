<?php
/*
Template Name: Catalog Page
*/
get_header(); ?>
<section class="catalog-main section">
	<div class="row">
		<div class="col">
			<h2 class="section-title main-title no-margin"><?php wp_title("") ?></h2>					
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p class="section-subtitle"><?php the_field('catalog_subtitle'); ?></p>
		</div>
	</div>
	<div class="section-inner">
		<div class="row">
			<div class="col">
				<div class="catalog-list">

					<?php	$wp_query_items = new WP_Query(
						array(
							'post_type' => 'product',
							'posts_per_page' => 6,
							'orderby' => 'date'
						)
					); 
					while ( $wp_query_items->have_posts() ): $wp_query_items->the_post(); ?>

						<div class="catalog-item">
							<div id="product-<?php the_ID(); ?>" class="product-item">
								<a href="<?php the_permalink(); ?>" class="product-item-image">
									<?php $images = get_field('product_images'); $first_row = $images[0]; $image = $first_row['image']; ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
								</a>
								<div class="product-item-content">
									<a href="<?php the_permalink(); ?>" class="product-item-content-text">
										<p class="product-item-subtitle"><?php the_field('product_subtitle'); ?></p>
										<h3 class="product-item-title"><?php the_title(); ?></h3>
									</a>
									<p class="product-item-price">
										<span class="product-item-price_value"><?php the_field('product_price'); ?></span>
										<span class="product-item-price_curr">руб.</span>
									</p>
								</div>
								<div class="product-item-button">
									<a href="#" class="btn product-buy">Купить</a>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

				</div>
			</div>
		</div>
		<?php if (  $wp_query_items->max_num_pages > 1 ) : ?>
			<script>
				var ajaxurl = '<?php site_url() ?>/wp-admin/admin-ajax.php';
				var true_posts = '<?php echo serialize($wp_query_items->query_vars); ?>';
				var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
				var max_pages = '<?php echo $wp_query_items->max_num_pages; ?>';					
			</script>
			<div class="row">
				<div class="col catalog-main--btn">
					<a class="btn dark show-more">Показать еще</a>
				</div>
			</div>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</section>
<?php get_footer(); ?>