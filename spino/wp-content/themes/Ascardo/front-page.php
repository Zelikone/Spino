<?php
/*
Template Name: Front-Page
*/
get_header(); ?>
<section id="intro" class="intro">
	<div class="intro-content">
		<div class="row">
			<div class="col">
			<div class="preview-image">
				<?php $image = get_field('preview_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				
				<button class="btn btn-mob popup-link-call">Подобрать</button>
			</div>
			<div class="text">
				<h1 id="text__title"><?php the_field( 'intro_title' ); ?></h1>
				<p><?php the_field( 'intro_subtitle' ); ?></p>
				<button class="btn btn-group popup-link-call">Подобрать</button>
				<!-- <div class="social">
					<ul class="social-list">
						<li class="social-item"><a href="#"><?php $image = get_field('instagram_icon'); ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
					</li>
					<li class="social-item"><a href="#"><?php $image = get_field('youtube_icon'); ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
					</li>
					<li class="social-item"><a href="#"><?php $image = get_field('facebook_icon'); ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
					</li>
					</ul>
				</div> -->
			</div>
			</div>
		</div>
	</div>
	<div id="advantages" class="advantages section">
	<div class="row">
		<div class="col">
			<ul class="advantages-list">
				<?php while ( have_rows('adv_list') ) : the_row(); ?>
					<li>
						<div class="advantages-icon">
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
						<h3 class="advantages-title"><?php the_sub_field('title'); ?></h3>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
</section>
<section id="about" class="about section">
	<div class="row" >
			<div class="about-content">
				<h2><?php the_field('about_title'); ?></h2>
				<?php the_field('about_text'); ?>
			</div>
			
	
		<div class="about-wrapper">
		<div class="about-image">
				<?php $image = get_field('about_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
			<h3 class="slider-title"><?php the_field('slider_title'); ?></h3>
			<div class="slider-wrapper">
			<div class="about-slider">
			<?php while ( have_rows('about_slider') ) : the_row(); ?>
			<div class="about-slide">
			
				<p class="number"><?php the_sub_field('number'); ?></p>
				<h4><?php the_sub_field('title'); ?></h4>
				<p><?php the_sub_field('text'); ?></p>
				
			</div>
			<?php endwhile; ?>
			
		  </div>
		<div class="btn popup-link-call">Получить консультацию</div>
		</div>
		
		
	</div>
</section>
<!-- <section id="order" class="order section">
	<div class="row">
		<div class="col">
			<h2 class="section-title"><?php the_field('order_title'); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<ul class="order-list">
				<?php $c = 1; while ( have_rows('order_list') ) : the_row(); ?>
				<li>
					<div class="order-num">0<?php echo $c; ?></div>
					<h3 class="order-title"><?php the_sub_field('title'); ?></h3>
					<p class="order-descr"><?php the_sub_field('descr'); ?></p>
				</li>
				<?php $c++; endwhile; ?>
			</ul>
		</div>
	</div>
</section> -->
<section id="catalog" class="catalog section">
	<div class="row">
		<div class="col">
			<h2 class="section-title"><?php the_field('catalog_title'); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col catalog-wrapper">
			<div class="catalog-list">
				
				<?php $index = 0;
				$wp_query_items = new WP_Query(
					array(
						'post_type' => 'product',
						'posts_per_page' => 8,
						'orderby' => 'date'
					)
				); 
				while ( $wp_query_items->have_posts() ): $wp_query_items->the_post(); ?>

					<div class="catalog-item">
						<div id="product-<?php the_ID(); ?>" class="product-item">
						<div class="product-inner">
							<div class="product-item-content-text">
									<p class="product-item-subtitle"><?php the_field('product_subtitle'); ?></p>
									<h3 class="product-item-title"><?php the_title(); ?></h3>
								</div>
							<div class="product-item-image" data-index="<?php echo $index;?>">
								<?php $images = get_field('product_images'); $first_row = $images[0]; $image = $first_row['image']; ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>
							<div class="product-item-content-mob">
								<div class="product-item-name">
								<p class="product-item-subtitle product-item-subtitle-mob"><?php the_field('product_subtitle'); ?></p>
								<h3 class="product-item-title product-item-title-mob"><?php the_title(); ?></h3>
								</div>
								<div class="product-item-price-mob">
								<p class=" product-item-price_value-mob"><?php the_field('product_price'); ?></p>
									<span class="product-item-price_curr product-item-price_curr-mob">руб.</span>
									<p class="product-old-price product-old-price-mob" >19000 руб.</p>
									</div>
									<div class="product-item-button product-item-button-mob">
								<a href="#" class="btn product-buy">Купить</a>
								</div>
							</div>
							<div class="product-item-content">
								<div class="product-item-price">
									<p class="product-item-price_value"><?php the_field('product_price'); ?> руб.</p>
									<p class="product-old-price" ><?php the_field('product_oldprice'); ?> руб.</p>
								</div>
								
							</div>
							
							<?php if(get_field('product_availability') == true){ ?>
								<p class="product-stock">☑ В наличии</p>
							<?php }else{ ?>
								<p class="product-stock">Нет в наличии</p>
							<?php }?>

							

							<div class="product-item-button">
								<a href="#" class="btn product-buy btn-product">Купить</a>
							</div>
							<button class="product-item-button-oneclick btn popup-link-buy btn-product">
								Купить в 1 клик
							</button>
							</div>
						</div>
					</div>

				<?php $index++; endwhile; wp_reset_postdata(); ?>				

			</div>
			
		</div>
	</div>
	<div class="btn btn-add">Больше товаров</div>
</section>
<section id="main-advantages" class="main-advantages">
<h2 class="section-title">Главные преимущества</h2>
	<div class="row">
	<ul class="main-advantages-list">
				<?php while ( have_rows('main_adv_list') ) : the_row(); ?>
					<li>
						<div class="main-advantages-item-image">
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
						<h3 class="main-advantages-item-title"><?php the_sub_field('title'); ?></h3>
						<p class="main-advantages-item-text"><?php the_sub_field('text'); ?></p>
					</li>
				<?php endwhile; ?>
			</ul>
	</div>
</section>
<section id="reviews" class="reviews">
	<h2 class="section-title">Отзывы</h2>
	<div class="row">
	<div class="reviews-content">
		<div class="reviews-slider">
		<?php echo do_shortcode('[testimonial_view id="1"]') ?>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="contacts-form-wrap">
				<h3 class="contacts-form-title"><?php the_field('contacts_title'); ?></h3>
				<?php echo do_shortcode('[testimonial_view id="2"]') ?>
			</div>
		</div>
		<div class="contacts-image">
				<?php $image = get_field('contacts_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>				
	</div>
	
</section>
<?php get_footer(); ?>