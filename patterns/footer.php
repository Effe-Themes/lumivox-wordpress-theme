<?php
/**
 * Title: footer
 * Slug: lumivox/footer
 * Inserter: no
 */
?>
<!-- wp:group {"className":"footer-glow","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}},"backgroundColor":"custom-background-secondary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group footer-glow has-custom-background-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"75%","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sDriven by purpose. Defined by design.%2$s', 'lumivox' ), '<em>', '</em>' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Pages', 'lumivox');?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sAbout Us%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sServices%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sServices%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sNews%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTestimonials%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Legal', 'lumivox');?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sPrivacy Policy%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sConditions%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact Us%2$s', 'lumivox' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","className":"copy","style":{"typography":{"textDecoration":"none"}}} -->
<p class="has-text-align-left copy" style="text-decoration:none"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the start of a 'mark' HTML element, 3. is the end of a 'mark' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Proudly powered by WordPress | Designed by: %1$s%2$sEffe Themes%3$s%4$s', 'lumivox' ), '<a href="' . esc_url( 'https://effethemes.com/' ) . '" target="_blank" rel="noreferrer noopener">', '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">', '</mark>', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"custom-text-color","iconColorValue":"#f6f6f6","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->