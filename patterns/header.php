<?php
/**
 * Title: Header
 * Slug: fashionfusion/header
 * Categories: header, fashionfusion
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-7","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-accent-7-background-color has-background" id="sticky-header" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:25px;padding-bottom:var(--wp--preset--spacing--10);padding-left:25px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","className":"site-title","fontSize":"large","fontFamily":"playfair"} /-->

<!-- wp:site-tagline {"style":{"typography":{"fontStyle":"italic","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"textColor":"contrast","icon":"menu","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"25px"}}} /-->
<?php $pluginsList = get_option( 'active_plugins' );
$fashionfusion_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $fashionfusion_plugin , $pluginsList);
if ( $results )  { ?>
<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":false,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
<?php }?>
</div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

