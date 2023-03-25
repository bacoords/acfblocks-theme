<?php
/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 *
 * @package UnderstrapChild
 */

$class_name = 'acf-block-hero  bg-primary text-white';

if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
?>
<section class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container">
		<div class="row py-5 align-items-center">

			<div class="col-12 col-md-6">
				<span>Home &gt; <?php echo esc_html( get_the_title() ); ?></span>
				<h1 class="mb-md-5"><?php the_field( 'headline' ); ?></h1>
				<p class="lead"><?php the_field( 'content' ); ?></p>
			</div>


			<div class="col-12 col-md-6">
				<?php $image = get_field( 'image' ); ?>
				<?php echo wp_get_attachment_image( $image, 'full' ); ?>
			</div>

		</div>
	</div>
</section>
