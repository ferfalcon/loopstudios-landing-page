<?php
/**
 * Title: Hero
 * Slug: loopstudios-landing-page/hero
 * Categories: banner
 * Description: Full-viewport hero with background image and heading.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/desktop/image-hero.jpg' ); ?>","dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","align":"full","className":"hero","layout":{"type":"constrained","contentSize":"1110px"}} -->
<div class="wp-block-cover alignfull hero" style="min-height:100vh">
	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/desktop/image-hero.jpg' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"level":1,"className":"hero__title","fontSize":"xx-large"} -->
		<h1 class="wp-block-heading hero__title has-xx-large-font-size">Immersive experiences that deliver</h1>
		<!-- /wp:heading -->
	</div>
</div>
<!-- /wp:cover -->
