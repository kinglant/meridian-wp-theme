<?php
/**
 * Title: FAQ
 * Slug: meridian/faq
 * Categories: meridian, text
 * Keywords: faq, questions, accordion, details
 * Viewport Width: 1400
 *
 * @package Meridian
 */

$meridian_faqs = array(
	array( __( 'How do you estimate tasks?', 'meridian' ), __( 'Every task gets a written hour range before work starts. If something turns out bigger, you hear about it the same day — not on the invoice.', 'meridian' ) ),
	array( __( 'Can my team edit the site after launch?', 'meridian' ), __( 'Yes. Every section is a WordPress block pattern, so text, images, colours and layout can be changed in the Site Editor without touching code.', 'meridian' ) ),
	array( __( 'Do you deploy to our own server?', 'meridian' ), __( 'We deploy to any host you use — VPS, cPanel or managed WordPress — over SSH or SFTP, with a staging copy for previews.', 'meridian' ) ),
	array( __( 'How do you use AI?', 'meridian' ), __( 'For the repetitive parts: scaffolding templates, converting designs to blocks, writing tests. Every line is reviewed by a person before it ships.', 'meridian' ) ),
	array( __( 'How fast do you reply?', 'meridian' ), __( 'Within 12 hours on working days, usually much sooner.', 'meridian' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"FAQ"},"anchor":"faq","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div id="faq" class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'FAQ', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Questions, answered.', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo wp_kses_post( __( 'Something else on your mind? <a href="#contact">Send us a note</a>.', 'meridian' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php foreach ( $meridian_faqs as $meridian_faq ) : ?><!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( $meridian_faq[0] ); ?></summary><!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $meridian_faq[1] ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
