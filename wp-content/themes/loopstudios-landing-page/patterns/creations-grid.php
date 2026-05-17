<?php
/**
 * Title: Creations Grid
 * Slug: loopstudios-landing-page/creations-grid
 * Categories: gallery
 * Description: Grid of Loopstudios creation items with images and labels.
 */

$creations = array(
	'deep-earth'      => __( 'Deep earth', 'loopstudios-landing-page' ),
	'night-arcade'    => __( 'Night arcade', 'loopstudios-landing-page' ),
	'soccer-team'     => __( 'Soccer team VR', 'loopstudios-landing-page' ),
	'grid'            => __( 'The grid', 'loopstudios-landing-page' ),
	'from-above'      => __( 'From up above VR', 'loopstudios-landing-page' ),
	'pocket-borealis' => __( 'Pocket borealis', 'loopstudios-landing-page' ),
	'curiosity'       => __( 'The curiosity', 'loopstudios-landing-page' ),
	'fisheye'         => __( 'Make it fisheye', 'loopstudios-landing-page' ),
);

$images_uri = get_template_directory_uri() . '/assets/images';
?>
<!-- wp:group {"tagName":"section","className":"creations","layout":{"type":"constrained","contentSize":"1110px"}} -->
<section class="wp-block-group creations">
	<!-- wp:group {"className":"creations__header","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group creations__header">
		<!-- wp:heading {"className":"creations__title"} -->
		<h2 class="wp-block-heading creations__title"><?php esc_html_e( 'Our creations', 'loopstudios-landing-page' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"creations__see-all-wrapper"} -->
		<p class="creations__see-all-wrapper"><a class="creations__see-all" href="#"><?php esc_html_e( 'See all', 'loopstudios-landing-page' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<ul class="creations__grid">
		<?php foreach ( $creations as $slug => $title ) : ?>
			<li class="creations__item">
				<a class="creations__link" href="#">
					<span class="creations__label"><?php echo esc_html( $title ); ?></span>
					<picture>
						<source media="(min-width: 64rem)" srcset="<?php echo esc_url( $images_uri . '/desktop/image-' . $slug . '.jpg' ); ?>" />
						<img class="creations__image" src="<?php echo esc_url( $images_uri . '/mobile/image-' . $slug . '.jpg' ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy" />
					</picture>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>
<!-- /wp:group -->
