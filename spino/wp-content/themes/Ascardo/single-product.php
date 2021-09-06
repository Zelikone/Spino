<?php get_header(); ?>
<section id="product-<?php the_ID(); ?>" class="product-single">
	<div class="row">
		<div class="col">
			<div class="product-single-image-container">
				<div class="product-single-image">
					<?php $images = get_field('product_images'); $first_row = $images[0]; $image = $first_row['image']; ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
				<div class="product-single-slider-wrap">
					<div class="product-single-slider slick-load">
						<?php $c = 0; while ( have_rows('product_images') ) : the_row(); ?>
							<div class="product-single-view">
								<div class="product-single-view-inner<?php if ( $c == 0 ) echo ' active'; ?>">
									<?php $image = get_sub_field('image'); ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
								</div>
							</div>
						<?php $c++; endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="product-single-content">
				<h2 class="product-single-title">
					<span class="type"><?php the_field('product_subtitle'); ?></span>
					<span class="title"><?php the_title(); ?></span>
				</h2>
				<p class="product-single-availability">
					<span>Наличие:</span>
					<?php $a = get_field('product_availability'); ?>
					<span class="<?php if ( $a ) echo 'true'; else echo 'false'; ?>"><?php if ( $a ) echo 'Есть в наличии'; else echo 'Нет в наличии'; ?></span>
				</p>
				<p class="product-single-descr"><?php the_field('product_descr'); ?></p>
				<p class="product-single-price">
					<span class="product-single-price_value"><?php the_field('product_price'); ?></span>
					<span class="product-single-price_curr">руб.</span>
				</p>
				<a href="#" class="btn product-buy single-buy">Купить</a>
				<div class="product-single-features">
					<h3 class="product-single-features-title">Технические характеристики</h3>
					<?php the_field('product_features'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
