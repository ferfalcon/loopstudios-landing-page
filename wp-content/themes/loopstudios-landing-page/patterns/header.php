<?php
/**
 * Title: Header
 * Slug: loopstudios-landing-page/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with logo and navigation.
 */
?>
<!-- wp:group {"tagName":"header","className":"site-header","layout":{"type":"constrained"}} -->
<header class="wp-block-group site-header">
	<!-- wp:group {"className":"site-header__inner","layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} -->
	<div class="wp-block-group site-header__inner">
		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>","width":192,"height":32,"sizeSlug":"full","linkDestination":"none","className":"site-header__logo"} -->
		<figure class="wp-block-image size-full is-resized site-header__logo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>" alt="loopstudios logo" width="192" height="32"/></figure>
		<!-- /wp:image -->

		<!-- wp:navigation {"className":"site-header__nav","layout":{"type":"flex","setCascadingMenu":true,"justifyContent":"right","orientation":"horizontal"}} -->
			<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Careers","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Events","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Products","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Support","url":"#","kind":"custom","isTopLevelLink":true} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
