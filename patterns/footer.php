<?php
/**
 * Title: footer
 * Slug: voyager/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange-4"},":hover":{"color":{"text":"var:preset|color|orange-3"}}}}},"backgroundColor":"contrast","textColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div id="footer" class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color">
    
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">
        <?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
        echo sprintf( esc_html__( 'Proudly Powered by %1$sWordPress%2$s', 'voyager' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:navigation {"overlayMenu":"never","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
    </div>
    <!-- /wp:group -->
    
</div>
<!-- /wp:group -->