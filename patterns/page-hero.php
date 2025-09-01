<?php
/**
 * Title: Page hero
 * Slug: voyager/page-hero
 * Categories: Bannières
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":350,"className":"is-style-dynamic-height","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-1"}}},"layout":{"selfStretch":"fixed","flexSize":"56vw"}},"textColor":"grey-1","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-style-dynamic-height has-grey-1-color has-text-color has-link-color" style="min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"className":"is-style-short"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-short"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><?php single_post_title(); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->