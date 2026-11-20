<?php
/**
 * Title: Call to action band
 * Slug: meridian/cta
 * Categories: meridian, call-to-action
 * Keywords: cta, contact, banner
 * Viewport Width: 1400
 *
 * @package Meridian
 */

?>
<!-- wp:group {"metadata":{"name":"Contact CTA"},"anchor":"contact","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group alignfull" style="margin-top:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"accent","textColor":"on-accent","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignwide has-on-accent-color has-accent-background-color has-text-color has-background" style="border-radius:28px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","fontSize":"display"} -->
<h2 class="wp-block-heading has-text-align-center has-display-font-size"><?php esc_html_e( 'Have a project in mind?', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#dfe5ff"}},"fontSize":"large"} -->
<p class="has-text-align-center has-text-color has-large-font-size" style="color:#dfe5ff"><?php esc_html_e( 'Tell us what you need. You’ll get a scope and an hour estimate within one working day — free, no strings.', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"surface","textColor":"contrast","className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link has-contrast-color has-surface-background-color has-text-color has-background wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'hello@example.com', 'meridian' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
