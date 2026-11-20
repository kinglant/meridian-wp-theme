<?php
/**
 * Title: Selected work (case studies)
 * Slug: meridian/latest-work
 * Categories: meridian, portfolio
 * Keywords: work, portfolio, case study, projects
 * Viewport Width: 1400
 * Description: Three case-study cards with gradient covers, results and tags.
 *
 * @package Meridian
 */

$meridian_work = array(
	array(
		'gradient' => 'linear-gradient(135deg,#3B5BFD 0%,#8A6CFF 100%)',
		'client'   => 'Northpeak',
		'title'    => __( 'Outdoor gear store, rebuilt as a block theme', 'meridian' ),
		'result'   => __( '+38% mobile conversions', 'meridian' ),
		'tags'     => 'WooCommerce · Block theme',
	),
	array(
		'gradient' => 'linear-gradient(135deg,#0F9D7A 0%,#7ED6B2 100%)',
		'client'   => 'Halcyon Health',
		'title'    => __( 'Clinic booking site with 14 location pages', 'meridian' ),
		'result'   => __( 'LCP 3.9s → 0.9s', 'meridian' ),
		'tags'     => 'Custom patterns · ACF',
	),
	array(
		'gradient' => 'linear-gradient(135deg,#F2994A 0%,#F2C94C 100%)',
		'client'   => 'Brightwell',
		'title'    => __( 'SaaS marketing site shipped in 12 days', 'meridian' ),
		'result'   => __( '2× demo requests', 'meridian' ),
		'tags'     => 'Landing pages · Analytics',
	),
);
?>
<!-- wp:group {"metadata":{"name":"Selected work"},"anchor":"work","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div id="work" class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'Selected work', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Results, not just pretty pages.', 'meridian' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Start yours', 'meridian' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $meridian_work as $meridian_item ) : ?><!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"var:preset|spacing|50","left":"0.6rem","right":"0.6rem"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card" style="padding-top:0.6rem;padding-right:0.6rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:0.6rem"><!-- wp:group {"style":{"color":{"gradient":"<?php echo esc_attr( $meridian_item['gradient'] ); ?>"},"border":{"radius":"18px"},"dimensions":{"minHeight":"220px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group has-background" style="border-radius:18px;background:<?php echo esc_attr( $meridian_item['gradient'] ); ?>;min-height:220px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"meridian-on-gradient","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"fontSize":"x-large"} -->
<p class="meridian-on-gradient has-x-large-font-size" style="font-weight:700;letter-spacing:-0.03em"><?php echo esc_html( $meridian_item['client'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"0.9rem","right":"0.9rem"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:0.9rem;padding-left:0.9rem"><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $meridian_item['tags'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $meridian_item['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="font-weight:600"><?php echo esc_html( $meridian_item['result'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
