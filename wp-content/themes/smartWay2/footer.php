
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer class="relative bg-dark border-t-2 border-white">

	<div class="container mx-auto z-10 items-start relative grid grid-cols-1 md:grid-cols-12 py-14 gap-10">
		<div class="md:col-span-4 grid  px-2">
			<h2 class="text-white text-2xl text-center mb-3">Про Нас</h2>
			<div class="bg-brown p-5 rounded-2xl h-96 grid place-content-around">
				<p class="justify-self-center text-center  text-white text-md pb-5">Вироби художньої ковки для вашого дому.</p>
				<div class="grid place-content-center"><?php if (is_front_page()) : ?>
					<img class="max-h-44 h-auto"
						src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option( 'footer_logo' ), 'full') ; ?>"
						alt="художня Ковка">
					<?php else : ?>
					<a href="<?php echo get_home_url(); ?>"><img class="max-h-44 h-auto"
							src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option( 'footer_logo' ), 'full') ; ?>"
							alt="SmartWay"></a>
					<?php endif ?></div>
				<ul class="list-none md:mt-5 flex flex-row justify-center pt-10">
<!-- 					<li class="text-center"><a href="#" target="_blank"><i
								class="fab fa-facebook-square fa-3x text-grey hover:text-blue-600"></i></a></li> -->
					<li class="text-center px-4"><a href="<?php echo $GLOBALS['site_global']['instagram']; ?>"
							target="_blank"><i class="fab fa-instagram fa-3x text-gray-100 hover:text-pink-400"></i></a>
					</li>
					<li class="text-center"><a href="<?php echo $GLOBALS['site_global']['viber']; ?>" target="_blank"><i
								class="fab fa-viber fa-3x text-gray-100 hover:text-indigo-400"></i></a></li>
					<!-- <li class="text-center px-4"><a href="#"><i class="fab fa-whatsapp fa-3x text-blight hover:text-green-600"></i></a></li> -->
				</ul>
			</div>

		</div>
		<adress class="md:col-span-3 contact-footer text-white grid md:place-content-center place-content-center px-2">
			<h2 class="text-white text-2xl text-center mt-10 md:mt-0 mb-3">Контакти</h2>
			<div class="bg-brown p-5 rounded-2xl grid place-content-center">
				<a class="flex flex items-center " href="mailto:<?php echo $GLOBALS['site_global']['email']; ?>"><i
						class="fas fa-envelope fa-2x pr-5"></i><?php echo $GLOBALS['site_global']['email']; ?></a>
				<a class="py-10 flex items-center " href="tel:<?php echo $GLOBALS['site_global']['phone']; ?>"><i
						class="fas fa-phone fa-2x pr-5"></i><?php echo $GLOBALS['site_global']['phone']; ?></a>
				<!-- <a class="pb-10 flex items-center " href="tel:<?php echo $GLOBALS['site_global']['phone2']; ?>"><i
						class="fas fa-phone fa-2x pr-5"></i><?php echo $GLOBALS['site_global']['phone2']; ?></a> -->
				<a href="#" class="flex items-center "><i
						class="fas fa-map-marker-alt fa-2x pr-5"></i><?php echo $GLOBALS['site_global']['adres']; ?></a>
			</div>


		</adress>
		<div class="md:col-span-5 ">
			<h2 class="text-white text-2xl mt-10 md:mt-0 mb-3 grid place-content-center ">Де Ми Працюємо</h2>
			<iframe class="h-96  px-2 filter grayscale opacity-90 "
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42266.17764820575!2d22.95792562463229!3d48.54020513981529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4739bb075a24be6b%3A0x56b4d8fa5fa4c656!2z0KHQstCw0LvRj9Cy0LAsINCX0LDQutCw0YDQv9Cw0YLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1636123960377!5m2!1suk!2sua"
				width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			<!-- <div class=" footer-menu w-full flex justify-center md:justify-end py-3 text-blight">
			<?php wp_nav_menu(array( 'theme_location' => 'footer-menu', 'menu_class' => 'link-list last-child' )); ?>
		</div> -->
		</div>


	</div>

	<div class="copyright p-3 z-10 relative" style="background-color: #000;">
		<div class="container mx-auto grid grid-cols-1 md:grid-cols-2">
			<div class="absolut text-gray-500 flex justify-center md:justify-start">&#169 Copyrights
				<?php echo date('Y'); ?> | Design by&#160;<a class="text-white" href="/" target="_blank">smartWay</a>
			</div>
			<div class="flex justify-center md:justify-end">
				<ul class="list-none flex flex-col md:flex-row mt-4 md:mt-0">
					<li class="text-gray-500 text-center"><a href="https://betonni-skhody.com/privacy-policy/">Політика Приватності</a></li>
					<!-- <li class="text-gray-500 text-center px-4">Cookie Policy </li>
					<li class="text-gray-500 text-center">Personal data consent</li> -->
				</ul>
			</div>
		</div>

	</div>



</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
