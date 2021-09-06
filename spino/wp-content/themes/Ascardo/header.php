<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">	

	<title><?php bloginfo('name'); ?><?php wp_title(" | "); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<!-- Template Basic Images Start -->	
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],a{background-color:transparent;text-decoration:none}a:active,a:hover{outline:0}h1,h2,h3,h4,h5,h6,p{margin:0}ul{list-style-type:none;margin:0;padding:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}hr{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;height:0}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{-webkit-tap-highlight-color:rgba(0,0,0,0)}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}figure{margin:0}img{vertical-align:middle}</style>

	<?php wp_head(); ?>

</head>

<body <?php body_class($class); ?>>

	<div class="wrapper">
		<div class="header_wrap" id="header">
			<header>
				<div class="row">
					<div class="col">
						<a href="<?php echo home_url(); ?>" class="custom-logo-link">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>">
						</a>						
					</div>
					<div class="col">
						<!-- <?php
						wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'container'       => false,
						'menu_class'      => 'main-menu',
						'menu_id'         => '',
						'echo'            => true,
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 0,
						) );
						?> -->
						<ul class="main-menu">
							<li class="menu-item"><a href="#about">О нас</a></li>
							<li class="menu-item"><a href="#catalog">Товары</a></li>
							<li class="menu-item"><a href="#main-advantages">Преимущества</a></li>
							<li class="menu-item"><a href="#reviews">Отзывы</a></li>
							<li class="menu-item"><a href="#footer">Контакты</a></li>
						</ul>
						<div class="menu-switch">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<a href="#cart" class="cart-btn popup">
							<span class="cart_num">0</span>
							<span class="cart-btn-inner">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="20" viewBox="0 0 16 20">                        
									<image id="корз" width="16" height="20" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAUCAQAAAAua3X8AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQflBQ4VHB/T8OnhAAABAUlEQVQoz32RsUrDYBSFv/x0qYYQhD+kU7u0g4OOnbqIrh31SaTPIL5Cd9Gho8/QByiOutXGlpCk6FLIcTCpCv1zznK4fHC49yL2HmimXLlmGvxODbX6zNkxZsyOOf167KlOj3hcV/kJcfMTW0DACXDBLb0KeOaeHpBSILSQSwuB0FaXCpVrpLDySLlCXWkrWrTxeSOjpCCrKgpKMl7xaaOupCOhM5n9ckbnQseSumiozz+3+O8vDQ2WFS69Yw0dPpzAmo7BNgAJ1hA3VCTEhohNQ0VkiFg6gSWRIWbtBDbEBkviBFZYg0/pBEp8Tw+cMjm4ScwdLyjQVOnBZ6eaKvgGLOu0MItOrCQAAAAASUVORK5CYII="/>
								</svg> 
							</span>
							<span id="basket">Корзина</span>
						</a>
					</div>
				</div>
			</header>
		</div>