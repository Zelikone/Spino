<?php
/*
Template Name: Contacts Page
*/
get_header(); ?>
<section id="contacts" class="contacts main-contacts">
	<div class="row">
		<div class="col">
			<div class="contacts-form-wrap">				
				<h3 class="contacts-form-title"><?php the_field('contacts_title', 'option'); ?></h3>
				<p class="contacts-form-descr"><?php the_field('contacts_descr', 'option'); ?></p>
				<form class="contacts-form">
					<input type="text" name="name" placeholder="Имя" required>
					<input type="tel" name="phone" placeholder="Телефон" required>
					<input type="email" name="email" placeholder="E-mail" required>
					<textarea name="message" placeholder="Сообщение" required></textarea>
					<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
					<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
					<input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
					<button class="btn" type="submit">Отправить</button>
				</form>
			</div>
		</div>				
	</div>
</section>
<?php get_footer(); ?>
