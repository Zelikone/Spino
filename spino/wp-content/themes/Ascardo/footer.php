		<footer id="footer" class="footer">
			<div class="row">
				<div class="footer-contacts">
				<h3 class="footer-contacts-title"><?php the_field('title-contacts'); ?></h3>
					<ul class="footer-contacts-list">
						<li class="footer-contacts-item">
					<div class="footer-contacts-icon">
						<?php $image = get_field('image-address'); ?>
						<img class="swiper-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
					<div class="footer-contacts-text">
						<p><?php the_field('address'); ?></p>
						<a class="footer-contacts-link-map" href="<?php the_field('link-address'); ?>">(Открыть в картах)</a>
					</div>
						</li>
						<li class="footer-contacts-item">
					<div class="footer-contacts-icon">
						<?php $image = get_field('image-phone'); ?>
						<img class="swiper-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
					<div class="footer-contacts-text">
						<a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
						<p><?php the_field('text'); ?></p>
					</div>
						</li>
						<li class="footer-contacts-item">
					<div class="footer-contacts-icon">
						<?php $image = get_field('image-mail'); ?>
						<img class="swiper-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
					<div class="footer-contacts-text">
						<p>Электронная почта: <a href="mailto:<?php the_field('mail-1'); ?>"><?php the_field('mail-1'); ?></a></p>
						<p>Если Вам не понравилась работа консультанта: <a href="mailto:<?php the_field('mail-2'); ?>"><?php the_field('mail-2'); ?></a></p>
					</div>
						</li>
					</ul>
					<button class="btn popup-link-call" type="submit">Заказать обратный звонок</button>
				</div>
				<div class="footer-service">
				<h3 class="footer-service-title"><?php the_field('title-service'); ?></h3>
				<p class="footer-service-text"><?php the_field('text1'); ?></p>
				<p class="footer-service-text"><?php the_field('text2'); ?></p>
				<button class="btn popup-link-call" type="submit">Заполнить форму заявки</button>
				</div>
			</div>
		</footer>
	</div>

	<div id="cart" class="dialog mfp-hide">
		<div id="step-1" class="cart-step active">
			<div class="dialog-header">Корзина</div>
			<div class="dialog-content custom-scroll">
				<div class="dialog-content-inner">
					<div class="cart-list" data-sum="0">
						
					</div>
				</div>
			</div>
			<div class="dialog-footer">
				<div class="dialog-footer-col">
					<a href="#" class="cart-step-btn back disabled">
						<i class="fa fa-angle-left"></i>
					</a>
				</div>
				<div class="dialog-footer-col">
					<div class="cart-total">
						<p class="cart-total-price">
							<span class="cart-total-price_text">Сумма:</span>
							<span class="cart-total-price_value">0.00</span>
							<span class="cart-total-price_curr">руб.</span>
						</p>
						<p class="cart-total-credit">
							<span class="cart-total-credit_text">Кредит:</span>
							<span class="cart-total-credit_value">0.00</span>
							<span class="cart-total-credit_curr">руб.</span>
							<span class="cart-total-credit_period">(0 месяцев)</span>
						</p>
					</div>
					<a href="#step-3" class="cart-step-btn next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
		<!-- <div id="step-2" class="cart-step">
			<div class="dialog-header">Оформление кредита</div>
			<div class="dialog-content custom-scroll">
				<div class="dialog-content-inner">
					<div class="credit">
						<div class="credit-col">
							<div class="credit-group main">
								<h4 class="credit-title">Оформить кредит</h4>
								<div class="credit-switch">
									<span></span>
									<span class="active"></span>
								</div>
							</div>
							<div class="credit-group">
								<h4 class="credit-title">Срок кредитования</h4>
								<div class="group-select">
									<?php $c = true; while ( have_rows('credit_period', 'option') ) : the_row(); ?>
									<?php for ($i = get_sub_field('start'); $i <= get_sub_field('end'); $i++) : ?>
									<div class="group-select-option<?php if ($c) { echo ' active'; $c = false; } ?>"><?php echo $i; ?></div>
								<?php endfor; ?>
							<?php endwhile; ?>					
						</div>
					</div>
				</div>
				<div class="credit-col">
					<div class="credit-group">
						<h4 class="credit-title">Годовая ставка</h4>
						<div class="select">
							<?php $pers = get_field('credit_per', 'option'); $first_row = $pers[0]; $per = $first_row['per']; ?>
							<div class="select-value"><?php echo $per; ?>%</div>
							<div class="select-options">
								<?php while ( have_rows('credit_per', 'option') ) : the_row(); ?>
									<div class="select-option"><?php the_sub_field('per'); ?>%</div>
								<?php endwhile; ?>
							</div>
						</div>
						<div class="credit-div"></div>
						<h4 class="credit-title">Страхование</h4>
						<div class="checkbox-select">
							<?php $c = 1; while ( have_rows('credit_save', 'option') ) : the_row(); ?>
							<label for="add<?php echo $c; ?>">
								<input type="checkbox" id="add<?php echo $c; ?>" name="add<?php echo $c; ?>" value="<?php the_sub_field('value'); ?>">
								<span class="checkbox-select-input"></span>
								<span><?php the_sub_field('title'); ?></span>
							</label>
							<?php $c++; endwhile; ?>
						</div>
					</div>
					<div class="credit-group">
						<p class="credit-result">
							<span class="credit-result_text">ЕЖЕМЕСЯЧНАЯ СУММА ПЛАТЕЖА ПО КРЕДИТУ:</span>
							<span class="credit-result_value">0.00</span>
							<span class="credit-result_curr">руб.</span>
							<span class="credit-result_text">СРОКОМ НА</span>
							<span class="credit-result_period">0 месяцев</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="dialog-footer">
		<div class="dialog-footer-col">
			<a href="#step-1" class="cart-step-btn back">
				<i class="fa fa-angle-left"></i>
			</a>
		</div>
		<div class="dialog-footer-col">
			<div class="cart-total">
				<p class="cart-total-price">
					<span class="cart-total-price_text">Сумма:</span>
					<span class="cart-total-price_value">184 300</span>
					<span class="cart-total-price_curr">руб.</span>
				</p>
				<p class="cart-total-credit">
					<span class="cart-total-credit_text">Кредит:</span>
					<span class="cart-total-credit_value">0.00</span>
					<span class="cart-total-credit_curr">руб.</span>
					<span class="cart-total-credit_period">(6 месяцев)</span>
				</p>
			</div>
			<a href="#step-3" class="cart-step-btn next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div>
</div> -->
<div id="step-3" class="cart-step">
	<div class="dialog-header">Оформление заказа</div>
	<div class="dialog-content">
		<div class="dialog-content-inner" style="height: 100%;">
			<form class="cart-form">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="tel" name="phone" placeholder="Телефон" required>
				<input type="email" name="email" placeholder="E-mail" required>
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Spino Shop">
				<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
				<input type="hidden" name="form_subject" value="Новый заказ">
				<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email'); ?>">
				<!-- END Hidden Required Fields -->
				<button class="btn" type="submit">Отправить</button>
			</form>
		</div>
	</div>
	<div class="dialog-footer">
		<div class="dialog-footer-col">
			<a href="#step-1" class="cart-step-btn back">
				<i class="fa fa-angle-left"></i>
			</a>
		</div>
		<div class="dialog-footer-col">
			<div class="cart-total">
				<p class="cart-total-price">
					<span class="cart-total-price_text">Сумма:</span>
					<span class="cart-total-price_value">184 300</span>
					<span class="cart-total-price_curr">руб.</span>
				</p>
				<p class="cart-total-credit">
					<span class="cart-total-credit_text">Кредит:</span>
					<span class="cart-total-credit_value">0.00</span>
					<span class="cart-total-credit_curr">руб.</span>
					<span class="cart-total-credit_period">(6 месяцев)</span>
				</p>
			</div>
			<a href="#" class="cart-step-btn next disabled">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div>
</div>
</div>
<div class="call-popup popup-base">
	<div class="call-popup__wrapper popup__wrapper">
		<div class="call-popup__content popup__content">
			<div class="call-btn-close btn-close"></div>
			<h3 class="call-popup__title popup__title">Заказать звонок</h3>
			<form class="popup-form" action="/message.php" method="POST">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="tel" name="phone" placeholder="Телефон" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="city" placeholder="Город" required>
				
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Spino Shop">
				<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
				<input type="hidden" name="form_subject" value="Форма обратного звонка">
				<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email'); ?>">
				<!-- END Hidden Required Fields -->
				<button class="btn" type="submit">Заказать</button>
			</form>
			
		</div>
	</div>
</div>
<div class="buy-popup popup-base">
	<div class="buy-popup__wrapper popup__wrapper">
		<div class="buy-popup__content popup__content">
			<div class="buy-btn-close btn-close">
			<span></span>
			<span></span>
			</div>
			<h3 class="buy-popup__title popup__title">Купить в 1 клик</h3>
			<form class="popup-form buy-popup-oneclick" action="/message.php" method="POST">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="tel" name="phone" placeholder="Телефон" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="city" placeholder="Город" required>
				
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Spino Shop">
				<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
				<input type="hidden" name="form_subject" value="Форма обратного звонка">
				<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
				<!-- END Hidden Required Fields -->
				<button class="btn" type="submit">Заказать</button>
			</form>
		</div>
	</div>
</div>

<div class="product-popup">
	<div class="product-popup-swiper">
	
		<div class="swiper-wrapper">
			<?php 
				$wp_query_items = new WP_Query(
					array(
						'post_type' => 'product',
						'posts_per_page' => 8,
						'orderby' => 'date'
					)
				); 
				while ( $wp_query_items->have_posts() ): $wp_query_items->the_post(); ?>

					
					<div class="swiper-slide">
						<div class="swiper-slide-content">
							<div class="swiper-slide-content-image">
							<h2 class="swiper-slide-content-title"><?php the_field('product_subtitle'); ?> <span><?php the_title(); ?></span></h2>

							<div class="swiper-gallery">
								<?php while ( have_rows('product_images') ) : the_row(); ?>
									<div class="swiper-slide">
										<?php $image = get_sub_field('image'); ?>
										<img class="swiper-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
									</div>
									<?php endwhile; ?>
							</div>
							<div class="swiper-thumbs">
								<?php while ( have_rows('product_images') ) : the_row(); ?>
									<div class="swiper-slide">
										<?php $image = get_sub_field('image'); ?>
										<img class="swiper-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
									</div>
									<?php endwhile; ?>
							</div>
							</div>
							
							
							<div class="swiper-slide-content-priceinfo">
							<div class="price">
								<div>
							<p class="swiper-slide-content-price"><?php the_field('product_price'); ?> <span>руб.</span></p>
							<p class="swiper-slide-content-oldprice"><?php the_field('product_oldprice'); ?> <span>руб.</span></p>
							</div>
							<div>
							<?php if(get_field('product_availability') == true){ ?>
								<p class="swiper-slide-content-stock">☑ В наличии</p>
							<?php }else{ ?>
								<p class="swiper-slide-content-stock">Нет в наличии</p>
							<?php }?>
							</div>
							</div>
							<div class="swiper-slide-content-info">
							<div class="content-tab content-tab--active">
								<h3 class="content-title">Описание</h3>
								<p class="content-text"><?php the_field('product_descr'); ?></p>
							</div>
							</div>
							<div class="content-tab">
							<h3 class="content-title">Харатеристики</h3>
								<div class="content-text"><?php the_field('product_features'); ?></div>
							</div>
							
							</div>
							<form class="popup-form swiper-slide-content-form buy-popup-oneclick" action="">
								<h3 class="form-title">Оформить заказ</h3>
								<input type="text" name="name" placeholder="Имя" required>
								<input type="tel" name="phone" placeholder="Телефон" required>
								<input type="email" name="email" placeholder="E-mail" required>
								<input type="text" name="city" placeholder="Город" required>
								<!-- Hidden Required Fields -->
								<input type="hidden" name="project_name" value="Spino Shop">
								<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
								<input type="hidden" name="form_subject" value="Форма покупки в 1 клик">
								<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email'); ?>">
								<!-- END Hidden Required Fields -->
								<button class="btn" type="submit">Оформить заказ</button>
							</form>
							
							<div class="product-btn-close"></div>
						</div>
					</div>
					

				<?php endwhile; wp_reset_postdata(); ?>	
		</div>
	</div>
</div>
<div class="not-found">404 Not Found</div>

<script>
	var temp_url = '<?php echo get_template_directory_uri(); ?>';
</script>

<?php wp_footer(); ?>

</body>
</html>
