<?php
/**
 * Title: search
 * Slug: coachben/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Search"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide"><?php esc_html_e('Search', 'coachben');?></h1>
<!-- /wp:heading -->

<!-- wp:search {"showLabel":false,"width":50,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":14,"query":{"perPage":10,"pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true,"parents":[]},"enhancedPagination":true,"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"3px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"metadata":{"name":"Title and meta"},"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:pattern {"slug":"coachben/pagination"} /-->
</div>
<!-- /wp:group -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'coachben');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"cta","area":"uncategorized","align":"wide"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
