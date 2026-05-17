<?php
/**
 * @var array $attributes Block attributes.
 */

$theme_uri = get_template_directory_uri() . '/assets/images';

$default_items = array(
	'deep-earth'      => __( 'Deep earth', 'loopstudios-landing-page' ),
	'night-arcade'    => __( 'Night arcade', 'loopstudios-landing-page' ),
	'soccer-team'     => __( 'Soccer team VR', 'loopstudios-landing-page' ),
	'grid'            => __( 'The grid', 'loopstudios-landing-page' ),
	'from-above'      => __( 'From up above VR', 'loopstudios-landing-page' ),
	'pocket-borealis' => __( 'Pocket borealis', 'loopstudios-landing-page' ),
	'curiosity'       => __( 'The curiosity', 'loopstudios-landing-page' ),
	'fisheye'         => __( 'Make it fisheye', 'loopstudios-landing-page' ),
);

$items = isset( $attributes['items'] ) && is_array( $attributes['items'] ) ? $attributes['items'] : array();

if ( empty( $items ) ) {
	$items = array();
	foreach ( $default_items as $slug => $title ) {
		$items[] = array(
			'title'           => $title,
			'mobileImageUrl'  => $theme_uri . '/mobile/image-' . $slug . '.jpg',
			'desktopImageUrl' => $theme_uri . '/desktop/image-' . $slug . '.jpg',
		);
	}
}

$items = array_values( array_filter( array_map(
	static function ( $item ) {
		if ( ! is_array( $item ) || empty( $item['title'] ) ) {
			return null;
		}

		return array(
			'title'           => (string) $item['title'],
			'mobileImageUrl'  => ! empty( $item['mobileImageUrl'] ) ? (string) $item['mobileImageUrl'] : '',
			'desktopImageUrl' => ! empty( $item['desktopImageUrl'] ) ? (string) $item['desktopImageUrl'] : '',
		);
	},
	$items
) ) );

$wrapper_attributes = get_block_wrapper_attributes();
?>

<section <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="creations__header">
		<h2 class="creations__title"><?php esc_html_e( 'Our creations', 'loopstudios-landing-page' ); ?></h2>
		<a class="creations__see-all" href="#"><?php esc_html_e( 'See all', 'loopstudios-landing-page' ); ?></a>
	</div>

	<ul class="creations__grid">
		<?php foreach ( $items as $item ) : ?>
			<?php $image_src = ! empty( $item['mobileImageUrl'] ) ? $item['mobileImageUrl'] : $item['desktopImageUrl']; ?>
			<?php if ( empty( $image_src ) ) : ?>
				<?php continue; ?>
			<?php endif; ?>
			<li class="creations__item">
				<a class="creations__link" href="#">
					<span class="creations__label"><?php echo esc_html( $item['title'] ); ?></span>
					<picture>
						<?php if ( ! empty( $item['desktopImageUrl'] ) ) : ?>
							<source media="(min-width: 64rem)" srcset="<?php echo esc_url( $item['desktopImageUrl'] ); ?>" />
						<?php endif; ?>
						<img
							class="creations__image"
							src="<?php echo esc_url( $image_src ); ?>"
							alt="<?php echo esc_attr( $item['title'] ); ?>"
							loading="lazy"
						/>
					</picture>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>
