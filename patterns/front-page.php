<?php
/**
 * Title: front-page
 * Slug: lumivox/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"main"},"layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"tagName":"main","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero.jpg","id":2166,"source":"file","title":"hero"},"backgroundSize":"cover","backgroundPosition":"51% 90%"},"spacing":{"padding":{"top":"16rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:16rem;padding-bottom:4rem"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"63px"}}} -->
<h1 class="wp-block-heading has-text-align-left" style="font-size:63px"><?php esc_html_e('Creative Work That Actually Works', 'lumivox');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#e1ecf7a1"}}},"color":{"text":"#e1ecf7a1"}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#e1ecf7a1"><?php esc_html_e('We blend strategy, design and technology to craft digital experiences that go beyond aesthetics. Our focus is on creating websites that connect, convert and leave a lasting impression. Every project is grounded in purpose, shaped by creativity and built to deliver real impact for your brand.', 'lumivox');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"className":"hero-cta-buttons","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group hero-cta-buttons"><!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"backgroundColor":"custom-primary","className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"width":"0px","style":"none","radius":"5px"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:5px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Get Started', 'lumivox');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"5px","width":"2px"}},"borderColor":"custom-primary"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-custom-primary-border-color wp-element-button" href="#" style="border-width:2px;border-radius:5px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('About Us', 'lumivox');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about.jpg" alt="" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|custom-primary","width":"1px"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
<h2 class="wp-block-heading" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--custom-primary);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('About Us', 'lumivox');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('We are a team of designers, developers and strategists driven by a shared passion for creating meaningful digital experiences. With a focus on clarity, innovation and impact, we help brands define their voice, elevate their presence and connect with people in powerful ways. Every project is a collaboration and every detail matters.', 'lumivox');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hero-button","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons hero-button"><!-- wp:button {"backgroundColor":"custom-primary","className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"width":"0px","style":"none","radius":"5px"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:5px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Read More', 'lumivox');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->