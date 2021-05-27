<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

		<!--[if IE]> <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <![endif]-->
	</head>
	<body>
		<div class="top-pos-reference"></div>
		<header class="main-header">
			<div class="container">
				<a class="logo" href="<?php echo home_url(); ?>">
					<?php echo bloginfo('name'); ?>
					<!-- <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"> -->
				</a>
				<?php wp_nav_menu(array(
					'container' => 'nav',
					'container_class' => 'header-menu',
					'theme_location' => 'header_menu',
				)); ?>
				<div class="body-overlay"></div>
				<a href="#" class="mobile-menu-container__button mobile-menu-container__button--open" aria-label="Open Mobile Menu" aria-controls="mobile-menu-container">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 28 32" class="mobile-menu-container__icon">
					<title>Open Menu</title>
					<path d="M1 8.25h26c0.552 0 1-0.448 1-1v-2.5c0-0.552-0.448-1-1-1h-26c-0.552 0-1 0.448-1 1v2.5c0 0.552 0.448 1 1 1zM1 18.25h26c0.552 0 1-0.448 1-1v-2.5c0-0.552-0.448-1-1-1h-26c-0.552 0-1 0.448-1 1v2.5c0 0.552 0.448 1 1 1zM1 28.25h26c0.552 0 1-0.448 1-1v-2.5c0-0.552-0.448-1-1-1h-26c-0.552 0-1 0.448-1 1v2.5c0 0.552 0.448 1 1 1z"></path>
					</svg>
				</a>
				<div id="mobile-menu-container" class="mobile-menu-container" aria-label="Mobile Menu" aria-expanded="false" aria-hidden="true">
					<a href="#" class="mobile-menu-container__button mobile-menu-container__button--close" aria-label="Close Menu">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="22" height="32" viewBox="0 0 22 32" class="mobile-menu-container__icon">
							<title>Close</title>
							<path d="M15.17 16l6.254-6.254c0.767-0.768 0.767-2.012 0-2.78l-1.39-1.39c-0.767-0.768-2.012-0.768-2.78 0l-6.254 6.254-6.254-6.254c-0.768-0.768-2.012-0.768-2.78 0l-1.39 1.39c-0.767 0.768-0.767 2.012 0 2.78l6.254 6.254-6.254 6.254c-0.767 0.767-0.767 2.012 0 2.78l1.39 1.39c0.767 0.767 2.013 0.767 2.78 0l6.254-6.254 6.254 6.254c0.767 0.767 2.012 0.767 2.78 0l1.39-1.39c0.767-0.767 0.767-2.012 0-2.78l-6.254-6.254z"></path>
						</svg>
					</a>
					<?php wp_nav_menu(array(
						'container' => 'nav',
						'container_class' => 'mobile-menu',
						'theme_location' => 'header_menu',
					)); ?>
				</div>
			</div>
		</header>
		<main class="main-content">
