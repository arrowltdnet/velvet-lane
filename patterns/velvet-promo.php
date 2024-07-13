<?php
/**
 * Title: Velvet Promo
 * Slug: fashionfusion/velvet-promo
 * Categories: fashionfusion
 * Keywords: velvet, promo, call-to-action
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"velvet","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-velvet-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'The Velvet Collection', 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Wrap your store in rich, luxurious tones. Discover pieces crafted for comfort and styled for the season.', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button"><?php echo esc_html__( 'EXPLORE THE COLLECTION', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->