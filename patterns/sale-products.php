<?php
/**
 * Title: Sale Products
 * Slug: fashionfusion/sale-products
 * Categories: fashionfusion
 * Keywords: sale products
 */
$pluginsList = get_option( 'active_plugins' );
$fashionfusion_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $fashionfusion_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-7-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Deals Of The Month', 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Duis lobortis massa imperdiet quam. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-primary-background-color has-background has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Buy Now', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%","className":"animated fadeInUp o-anim-custom-delay o-anim-value-delay-0.3s"} -->
<div class="wp-block-column animated fadeInUp o-anim-custom-delay o-anim-value-delay-0.3s" style="flex-basis:65%"><!-- wp:query {"queryId":10,"query":{"perPage":"3","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"className":"have-responsive","style":{"border":{"radius":"8px"}}} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"6px","top":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|excerpt-link-color"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"excerpt-link-color","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"typography":{"fontSize":"16px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-fill","backgroundColor":"accent","textColor":"primary","fontSize":"small","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"6px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } else { ?>
   <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-7-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Deals Of The Month', 'fashionfusion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Duis lobortis massa imperdiet quam. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:300"><a class="wp-block-button__link has-primary-background-color has-background has-text-align-center wp-element-button" style="padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Buy Now', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%","className":"animated fadeInUp o-anim-custom-delay o-anim-value-delay-0.3s"} -->
<div class="wp-block-column animated fadeInUp o-anim-custom-delay o-anim-value-delay-0.3s" style="flex-basis:65%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"10px","bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading has-text-align-center product-heading has-contrast-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Beanie', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="font-size:16px;line-height:1.5"><?php echo esc_html__( '$ 15', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:button {"textAlign":"center","backgroundColor":"accent","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"10px","bottom":"10px"}},"border":{"radius":"6px"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="border-radius:6px;padding-top:10px;padding-bottom:10px"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"10px","bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading has-text-align-center product-heading has-contrast-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Blazer', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="font-size:16px;line-height:1.5"><?php echo esc_html__( '$ 20', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:button {"textAlign":"center","backgroundColor":"accent","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"10px","bottom":"10px"}},"border":{"radius":"6px"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="border-radius:6px;padding-top:10px;padding-bottom:10px"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":1945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/placeholder.jpg" alt="" class="wp-image-1945" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|button-hover-color"}}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"10px","bottom":"6px"}}},"textColor":"contrast","className":"product-heading"} -->
<h3 class="wp-block-heading has-text-align-center product-heading has-contrast-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><a href="#"><?php echo esc_html__( 'Fabric One Piece', 'fashionfusion' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="font-size:16px;line-height:1.5"><?php echo esc_html__( '$ 18', 'fashionfusion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:button {"textAlign":"center","backgroundColor":"accent","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"10px","bottom":"10px"}},"border":{"radius":"6px"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="border-radius:6px;padding-top:10px;padding-bottom:10px"><?php echo esc_html__( 'Add to cart', 'fashionfusion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php
} ?>