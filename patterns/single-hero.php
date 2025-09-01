<?php
/**
 * Title: Single hero
 * Slug: voyager/single-hero
 * Categories: Bannières
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":350,"className":"is-style-dynamic-height","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-1"}}},"layout":{"selfStretch":"fixed","flexSize":"56vw"}},"textColor":"grey-1","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-style-dynamic-height has-grey-1-color has-text-color has-link-color" style="min-height:350px" id="single-hero"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:separator {"className":"is-style-short"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-short"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h1 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php single_post_title(); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category","prefix":"| "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->