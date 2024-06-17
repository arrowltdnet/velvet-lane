<?php
/**
 * Title: Featured Product
 * Slug: fashionfusion/featured-product
 * Categories: fashionfusion
 * Keywords: featured product
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
$pluginsList = get_option( 'active_plugins' );
$fashionfusion_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $fashionfusion_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"}}},"backgroundColor":"excerpt-link-bg-color","className":"animated fadeInUp","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group animated fadeInUp has-excerpt-link-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":1888,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-3.png" alt="" class="wp-image-1888"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":24,"query":{"perPage":"1","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"className":"products-block-post-template","layout":{"type":"default","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"animated fadeIn o-anim-custom-delay o-anim-value-delay-0.3s","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeIn o-anim-custom-delay o-anim-value-delay-0.3s has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"600"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"right","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#f08300"}}},"color":{"text":"#f08300"}}} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Phasellus ullamcorper ipsum rutrum nunc. Aenean...', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"style":{"border":{"radius":"8px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-fill","backgroundColor":"accent","textColor":"contrast","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo esc_html__( 'No product found', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } else { ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0","right":"25px","left":"25px"}}},"backgroundColor":"excerpt-link-bg-color","className":"animated fadeInUp","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group animated fadeInUp has-excerpt-link-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:25px;padding-bottom:0;padding-left:25px"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":1888,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-3.png" alt="" class="wp-image-1888"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"animated fadeIn o-anim-custom-delay o-anim-value-delay-0.3s","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeIn o-anim-custom-delay o-anim-value-delay-0.3s has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"0.7rem"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="margin-bottom:0.7rem;font-size:32px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Beanie', 'fashionfusion' ); ?></a> </h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}}} -->
<p style="font-size:18px;font-style:normal;font-weight:600;line-height:1.5"><?php echo esc_html__( '$ 18.00', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":2016,"width":"100px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/stars.png" alt="" class="wp-image-2016" style="width:100px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Phasellus ullamcorper ipsum rutrum nunc. Aenean...', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":1890,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-thumbnail has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-5.png" alt="" class="wp-image-1890" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:8px;padding-right:var(--wp--preset--spacing--30);padding-bottom:8px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php
} ?>