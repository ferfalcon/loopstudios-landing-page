<?php
/**
 * @var array $attributes Block attributes.
 */

$items = isset( $attributes['items'] ) ? $attributes['items'] : array();

if ( empty( $items ) ) {
	$items = array(
		array(
			'title'            => __( 'Deep earth', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
		array(
			'title'            => __( 'Night arcade', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
		array(
			'title'            => __( 'Soccer team VR', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
		array(
			'title'            => __( 'The grid', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
		array(
			'title'            => __( 'From up above VR', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
		array(
			'title'            => __( 'Pocket borealis', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
		array(
			'title'            => __( 'The curiosity', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
		array(
			'title'            => __( 'Make it fisheye', 'loopstudios-landing-page' ),
			'mobileImageUrl'   => '',
			'desktopImageUrl'  => '',
		),
	);
}

$wrapper_attributes = get_block_wrapper_attributes();
?>

<section <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="creations__header">
		<h2 class="creations__title"><?php esc_html_e( 'Our creations', 'loopstudios-landing-page' ); ?></h2>
		<a class="creations__see-all" href="#"><?php esc_html_e( 'See all', 'loopstudios-landing-page' ); ?></a>
	</div>

	<ul class="creations__grid">
		<?php foreach ( $items as $item ) : ?>
			<?php
			$slug = sanitize_title( $item['title'] );
			?>
			<li class="creations__item">
				<a class="creations__link" href="#">
					<span class="creations__label"><?php echo esc_html( $item['title'] ); ?></span>
					<picture>
						<?php if ( ! empty( $item['desktopImageUrl'] ) ) : ?>
							<source media="(min-width: 64rem)" srcset="<?php echo esc_url( $item['desktopImageUrl'] ); ?>" />
						<?php endif; ?>
						<img
							class="creations__image"
							src="<?php echo esc_url( ! empty( $item['mobileImageUrl'] ) ? $item['mobileImageUrl'] : $item['desktopImageUrl'] ); ?>"
							alt="<?php echo esc_attr( $item['title'] ); ?>"
							loading="lazy"
						/>
					</picture>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>
