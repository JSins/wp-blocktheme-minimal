<?php

/**
 * Title: List of posts, 3 columns
 * Slug: bts/posts-3-col
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query">

	<!-- wp:query-no-results -->

	<!-- wp:paragraph -->
	<p>No posts were found.</p>
	<!-- /wp:paragraph -->

	<!-- /wp:query-no-results -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0">

		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->

		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
		<!-- wp:post-title {"isLink":true} /-->
		<!-- wp:template-part {"slug":"post-meta","theme":"blocktheme-minimal"} /-->
		<!-- wp:post-excerpt /-->

		<!-- /wp:post-template -->


		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->

		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-next /-->

		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->