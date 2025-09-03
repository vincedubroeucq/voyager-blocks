<?php
/**
 * Title: Search no results
 * Slug: voyager/search-no-results
 * Categories: Publications
 */
global $wp_query;

if( $wp_query->post_count > 0){
    return '';
}
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"placeholder":"Ajouter un texte ou des blocs qui s’afficheront lorsqu’une requête ne renverra aucun résultat."} -->
<p><?php esc_html_e('Sorry, but your search returned no results. Please try again.', 'voyager');?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->