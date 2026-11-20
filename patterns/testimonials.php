<?php
/**
 * Title: Testimonials
 * Slug: meridian/testimonials
 * Categories: meridian, testimonials
 * Keywords: quotes, reviews, testimonials, social proof
 * Viewport Width: 1400
 *
 * @package Meridian
 */

$meridian_quotes = array(
	array( __( 'Every task came with an hour estimate, and every estimate held. That alone made them the easiest vendor we work with.', 'meridian' ), 'Dana R.', __( 'Marketing lead, Northpeak', 'meridian' ), 'DR' ),
	array( __( 'Our old site took four seconds to load. The new one is under one, and our team can edit every section without calling a developer.', 'meridian' ), 'Marcus L.', __( 'Operations, Halcyon Health', 'meridian' ), 'ML' ),
	array( __( 'Fast replies, weekly previews and zero drama. We went from Figma to live in under two weeks.', 'meridian' ), 'Priya S.', __( 'Founder, Brightwell', 'meridian' ), 'PS' ),
);
?>
<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"backgroundColor":"accent-soft","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-soft-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'Kind words', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Clients stay because it’s easy.', 'meridian' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $meridian_quotes as $meridian_quote ) : ?><!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em"}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="letter-spacing:0.1em">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"large"} -->
<p class="has-large-font-size">“<?php echo esc_html( $meridian_quote[0] ); ?>”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"meridian-avatar","style":{"typography":{"fontWeight":"700"}},"backgroundColor":"contrast","textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center meridian-avatar has-base-color has-contrast-background-color has-text-color has-background has-small-font-size" style="font-weight:700"><?php echo esc_html( $meridian_quote[3] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html( $meridian_quote[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $meridian_quote[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
