<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make( 'custom-block', __('Банер', 'your-site-textdomain') )
	->add_fields( array(
		Field::make( 'text', 'heading', __( 'Заголовок' ) ),
		Field::make( 'image', 'image', __( 'Фонове Зображення' ) ),
		Field::make( 'rich_text', 'content', __( 'Опис' ) ),
		Field::make( 'text', 'button', __( 'Кнопка' ) ),
	) )
	->set_category( 'custom-category', __( 'smartWey theme' ), 'smiley' )
	->set_icon( 'slides' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>

		<div class=" bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo wp_get_attachment_image_url( $fields['image'], 'full') ; ?>');">
			<div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center relative flex-col">
				<div class="mx-4 w-full md:w-3/4 lg:w-1/2 text-center text-white">
					<h1 class="font-bold text-6xl mb-4"><?php echo esc_html( $fields['heading'] ); ?></h1>
					<h2 class="font-bold text-3xl mb-12"><?php echo apply_filters( 'the_content', $fields['content'] ); ?></h2>
				</div>
				<div class="">
					<a href="" class="border-2 border-white rounded-md font-bold text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
					<?php echo esc_html( $fields['button'] ); ?>
					</a>
				</div>
			</div>
		</div>

	

		<?php
	} );