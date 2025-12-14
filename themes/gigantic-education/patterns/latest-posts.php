<?php
/**
 * Title: Latest Posts
 * Slug: gigantic-education/latest-posts
 * Categories: latest posts
 */
?>

<!-- wp:group {"metadata":{"name":"Latest Posts"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large","margin":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:100px;margin-bottom:100px;padding-top:0;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#ff6464"},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-center has-text-color has-x-small-font-size" style="color:#ff6464;text-transform:uppercase"><?php esc_html_e( 'Latest Posts', 'gigantic-education' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#0a294d"},"elements":{"link":{"color":{"text":"#0a294d"}}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-xx-large-font-size" style="color:#0a294d;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Checkout Our Blog', 'gigantic-education' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--medium);font-style:normal;font-weight:300"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'gigantic-education' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"style":{"border":{"radius":"15px"}}} /-->

<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"15px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blog-admin.png' ) ); ?>" alt="" style="width:15px"/></figure>
<!-- /wp:image -->

<!-- wp:post-author-name {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"15px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blog-calendar.png' ) ); ?>" alt="" style="width:15px"/></figure>
<!-- /wp:image -->

<!-- wp:post-date {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#0a294d"},"elements":{"link":{"color":{"text":"#0a294d"}}}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"excerptLength":15,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->