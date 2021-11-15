<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>


	<header class=" fixed w-full z-30" style="">

		<div class="mx-auto container">
			<div class="nav lg:flex lg:justify-between lg:items-center ">
				<div class="flex justify-between items-center">
				<div class="my-2">
					<?php if (is_front_page()) : ?>
						<img class="max-h-20 h-auto" src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option( 'site_logo' ), 'full') ; ?>" alt="SmartWay">
					<?php else : ?>
						<a href="<?php echo get_home_url(); ?>"><img class="max-h-20 h-auto" src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option( 'site_logo' ), 'full') ; ?>" alt="SmartWay"></a>
					<?php endif ?>
				</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
						
						<div id="nav-icon3" class="menu-toggle relative z-50" aria-controls="primary-menu" aria-expanded="false">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
							<!-- <svg viewBox="0 0 20 20" class="inline-block w-8 h-8 text-white" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg> -->
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 bg-transparent lg:block h-full',
						'menu_class'      => 'lg:flex lg:-mx-4 text-white dropdown h-full',
						'submenu_class'   => '',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4 text-xl h-full',
						'fallback_cb'     => false,
					)
				);
				?>
				
				<a href="" class="hidden lg:block border-2 border-green rounded-full font-bold text-green px-4 py-3 transition duration-300 ease-in-out hover:bg-green hover:text-white mr-6"><i class="fas fa-mobile-alt"></i> +38 050 927 50 86</a>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">


		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
