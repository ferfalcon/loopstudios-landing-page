<?php
/**
 * Title: Footer
 * Slug: loopstudios-landing-page/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with logo, navigation, social links, and copyright.
 */
?>
<!-- wp:group {"className":"site-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group site-footer">
	<!-- wp:group {"className":"site-footer__inner","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"center"}} -->
	<div class="wp-block-group site-footer__inner">
		<!-- wp:group {"className":"site-footer__nav-group","layout":{"type":"flex","flexDirection":"column","alignItems":"flex-start"}} -->
		<div class="wp-block-group site-footer__nav-group">
			<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>","width":144,"height":24,"sizeSlug":"full","linkDestination":"none","className":"site-footer__logo"} -->
			<figure class="wp-block-image size-full is-resized site-footer__logo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>" alt="loopstudios logo" width="144" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:navigation {"overlayMenu":"never","className":"site-footer__nav","layout":{"type":"flex","setCascadingMenu":true,"orientation":"horizontal"}} -->
				<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Careers","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Events","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Products","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Support","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"site-footer__social-group","layout":{"type":"flex","flexDirection":"column","alignItems":"flex-end"}} -->
		<div class="wp-block-group site-footer__social-group">
			<!-- wp:social-links {"className":"site-footer__social","iconColor":"white","iconColorValue":"#ffffff","size":"has-normal-icon-size","style":{"spacing":{"blockGap":"1rem"}}} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only site-footer__social">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->

			<!-- wp:paragraph {"className":"site-footer__copyright","align":"right","fontSize":"small"} -->
			<p class="has-text-align-right site-footer__copyright has-small-font-size">&copy; 2021 Loopstudios. All rights reserved.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","className":"site-footer__attribution","fontSize":"small"} -->
	<p class="has-text-align-center site-footer__attribution has-small-font-size">
		Challenge by <a href="https://www.frontendmentor.io?ref=challenge">Frontend Mentor</a>.
		Coded by <a href="https://www.ferfalcon.com/">Fernando Falcon</a>.
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
