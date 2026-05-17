<?php
/**
 * Title: Interactive VR Section
 * Slug: loopstudios-landing-page/interactive-vr
 * Categories: featured
 * Description: Image and text section about interactive VR leadership.
 */
?>
<!-- wp:group {"className":"interactive-vr","layout":{"type":"constrained","contentSize":"1110px"}} -->
<div class="wp-block-group interactive-vr">
	<!-- wp:media-text {"mediaPosition":"left","mediaType":"image","className":"interactive-vr__content"} -->
	<div class="wp-block-media-text is-stacked-on-mobile interactive-vr__content">
		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/desktop/image-interactive.jpg' ); ?>" alt="Image of a person using VR" />
		</figure>
		<div class="wp-block-media-text__content">
			<!-- wp:heading {"className":"interactive-vr__title"} -->
			<h2 class="wp-block-heading interactive-vr__title">The leader in interactive VR</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"interactive-vr__text"} -->
			<p class="interactive-vr__text">Founded in 2011, Loopstudios has been producing world-class virtual reality projects for some of the best companies around the globe. Our award-winning creations have transformed businesses through digital experiences that bind to their brand.</p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->
