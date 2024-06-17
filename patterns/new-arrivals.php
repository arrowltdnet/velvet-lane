<?php
/**
 * Title: New Arrivals
 * Slug: fashionfusion/new-arrivals
 * Categories: fashionfusion
 * Keywords: new arrivals
 */
$pluginsList = get_option( 'active_plugins' );
$fashionfusion_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $fashionfusion_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'New Arrivals', 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Duis lobortis massa imperdiet quam. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:query {"queryId":10,"query":{"perPage":"6","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"8px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"6px","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|excerpt-link-color"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"excerpt-link-color","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"right","style":{"typography":{"fontSize":"18px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#f08300"}}},"color":{"text":"#f08300"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-fill","backgroundColor":"accent","textColor":"contrast","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-primary-background-color has-background has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'View All', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:25px;padding-bottom:var(--wp--preset--spacing--50);padding-left:25px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'New Arrivals', 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Duis lobortis massa imperdiet quam. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"","className":"new-arrivals-column"} -->
<div class="wp-block-column new-arrivals-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px" title="s"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"13px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Beanie', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
<p style="font-size:18px;line-height:1.5"><?php echo esc_html__( '$ 15', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":2016,"width":"100px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/stars.png" alt="" class="wp-image-2016" style="width:100px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"new-arrivals-column"} -->
<div class="wp-block-column new-arrivals-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"13px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Blazer', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
<p style="font-size:18px;line-height:1.5"><?php echo esc_html__( '$ 15', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":2016,"width":"100px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/stars.png" alt="" class="wp-image-2016" style="width:100px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"new-arrivals-column"} -->
<div class="wp-block-column new-arrivals-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"13px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Abric One Piece', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
<p style="font-size:18px;line-height:1.5"><?php echo esc_html__( '$ 15', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":2016,"width":"100px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/stars.png" alt="" class="wp-image-2016" style="width:100px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"","className":"new-arrivals-column"} -->
<div class="wp-block-column new-arrivals-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"13px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Ice Watch', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
<p style="font-size:18px;line-height:1.5"><?php echo esc_html__( '$ 15', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":2016,"width":"100px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/stars.png" alt="" class="wp-image-2016" style="width:100px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"new-arrivals-column"} -->
<div class="wp-block-column new-arrivals-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"13px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Jeans Jacket', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
<p style="font-size:18px;line-height:1.5"><?php echo esc_html__( '$ 15', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":2016,"width":"100px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/stars.png" alt="" class="wp-image-2016" style="width:100px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"new-arrivals-column"} -->
<div class="wp-block-column new-arrivals-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"13px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Jeans Jacket', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}}} -->
<p style="font-size:18px;line-height:1.5"><?php echo esc_html__( '$ 15', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":2016,"width":"100px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/stars.png" alt="" class="wp-image-2016" style="width:100px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:var(--wp--preset--spacing--20);padding-bottom:10px;padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-primary-background-color has-background has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'View All', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php } ?>