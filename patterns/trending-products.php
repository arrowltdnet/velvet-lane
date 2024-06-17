<?php
/**
 * Title: Trending Products
 * Slug: fashionfusion/trending-products
 * Categories: fashionfusion
 * Keywords: trending-products
 */
$pluginsList = get_option( 'active_plugins' );
$fashionfusion_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $fashionfusion_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"link-color","className":"animated fadeInUp product-trending","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp product-trending has-link-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"has-border-radius animated fadeInUp o-anim-custom-delay fast o-anim-value-delay-0.5s"} -->
<div class="wp-block-column is-vertically-aligned-top has-border-radius animated fadeInUp o-anim-custom-delay fast o-anim-value-delay-0.5s" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-6.png","id":1892,"dimRatio":60,"customOverlayColor":"#055118","minHeight":267,"minHeightUnit":"px","contentPosition":"top center","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);min-height:267px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#055118"></span><img class="wp-block-cover__image-background wp-image-1892" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-6.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-text-align-center has-base-2-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( "Find Your Perfect Collection's", 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"accent","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"15px","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop Now', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-3.png","id":1888,"dimRatio":40,"customOverlayColor":"#b10085","minHeight":381,"minHeightUnit":"px","contentPosition":"bottom center","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);min-height:381px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#b10085"></span><img class="wp-block-cover__image-background wp-image-1888" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-3.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-text-align-center has-base-2-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( "Find Your Summer Collection's", 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"button-hover-color","textColor":"base-2","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"15px","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-base-2-color has-button-hover-color-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop Now', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( "Man's Fashion", 'fashionfusion' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"className":"products-block-post-template","layout":{"type":"default","columnCount":1},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"},"typography":{"fontSize":"14px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);font-size:14px"><!-- wp:group {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="font-size:14px"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100px","className":"has-border-radius"} /-->

<!-- wp:group {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="font-size:14px"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#f08300"}}},"color":{"text":"#f08300"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"},"padding":{"top":"4px","bottom":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|excerpt-link-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"excerpt-link-color","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( "Women's Fashion", 'fashionfusion' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"className":"products-block-post-template","layout":{"type":"default","columnCount":1},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100px","className":"has-border-radius"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#f08300"}}},"color":{"text":"#f08300"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"},"padding":{"top":"4px","bottom":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|excerpt-link-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"excerpt-link-color","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } else { ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"link-color","className":"animated fadeInUp product-trending","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp product-trending has-link-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"has-border-radius animated fadeInUp o-anim-custom-delay fast o-anim-value-delay-0.5s"} -->
<div class="wp-block-column is-vertically-aligned-top has-border-radius animated fadeInUp o-anim-custom-delay fast o-anim-value-delay-0.5s" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-5.png","id":873,"dimRatio":60,"customOverlayColor":"#055118","minHeight":267,"minHeightUnit":"px","contentPosition":"top center","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);min-height:267px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#055118"></span><img class="wp-block-cover__image-background wp-image-873" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-5.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-text-align-center has-base-2-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( "Find Your Perfect Collection's", 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"accent","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"15px","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop Now', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-6.png","id":875,"dimRatio":40,"customOverlayColor":"#b10085","minHeight":381,"minHeightUnit":"px","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);min-height:381px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#b10085"></span><img class="wp-block-cover__image-background wp-image-875" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-6.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<h2 class="wp-block-heading has-text-align-center has-base-2-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( "Find Your Summer Collection's", 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"button-hover-color","textColor":"base-2","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"15px","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-base-2-color has-button-hover-color-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Shop Now', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( "Man's Fashion", 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Blazer', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 20</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Bag', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 22</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Ice Watch', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Fabric One Piece', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 32</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( "Women's Fashion", 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#">Fabric One Piece</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 32</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#">Ice Watch</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#">Bag</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 22</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","className":"treanding-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group treanding-product has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1945,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:6px;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-color"}}}},"textColor":"button-hover-color"} -->
<p class="has-button-hover-color-color has-text-color has-link-color"><?php echo esc_html__( '★★★★★', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"3px","bottom":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading product-heading has-contrast-color has-text-color has-link-color" style="padding-top:3px;padding-bottom:3px;font-size:16px;font-style:normal;font-weight:600"><a href="#">Blazer</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
<p style="font-size:14px;line-height:1.5">$ 20</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } ?>