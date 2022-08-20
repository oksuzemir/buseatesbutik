<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<div class="top-nav">
		<div class="konten">
			<div class="top-nav-left">
				<div id="burger-menu">
					<span></span>
				</div>
			</div>
			<div class="logo">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
				</a>
			</div>
			<div class="top-nav-right">
				<ul>
					<li><a href="#" class="search-button"><i class="fa fa-search"></i></a></li>
					<li><a href="/hesabim"><i class="fa fa-user-o"></i></a></li>
					<li>
						<a class="shopping-wrap" href="/sepet">
							<i class="fa fa-shopping-cart"></i>
							<span><?php echo sprintf(_n('%d', '%d', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?>
						</span>
						</a>
						
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="bot-nav" id="bot-nav">
		<div class="konten">
			<div class="sidebar-close">
				<div class="sidebar-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/kiss-icon.png" alt="">
				</div>
				<span>X</span>
			</div>
			<nav>
				<?php html5blank_nav(); ?>
			</nav>
			<div class="bot-nav-socials">
				<ul>
					<li><a href="" rel="noreferrer" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="" rel="noreferrer" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="" rel="noreferrer" target="_blank"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="sidebar-overlay"></div>

	<main class="main-content">