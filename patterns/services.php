<?php
/**
 * Title: Services grid
 * Slug: meridian/services
 * Categories: meridian, services
 * Keywords: services, features, grid, cards
 * Viewport Width: 1400
 * Description: Section heading and six service cards in a responsive grid.
 *
 * @package Meridian
 */

$meridian_services = array(
	array( '01', __( 'Custom WordPress themes', 'meridian' ), __( 'Block themes built from your design, with every section editable in the Site Editor. No page builder lock-in.', 'meridian' ) ),
	array( '02', __( 'Landing pages', 'meridian' ), __( 'Campaign pages that load in under a second and are built to convert, with A/B-ready sections.', 'meridian' ) ),
	array( '03', __( 'AI-assisted builds', 'meridian' ), __( 'We use AI tooling for the repetitive parts, so you pay for judgement and polish, not boilerplate.', 'meridian' ) ),
	array( '04', __( 'Deployment & hosting', 'meridian' ), __( 'Git-based deploys to your server, staging environments, SSL, backups and uptime monitoring.', 'meridian' ) ),
	array( '05', __( 'Performance tuning', 'meridian' ), __( 'Core Web Vitals audits, image pipelines, caching and plugin clean-ups for slow existing sites.', 'meridian' ) ),
	array( '06', __( 'Ongoing care', 'meridian' ), __( 'A weekly hours budget for updates and new pages, with a written estimate before each task.', 'meridian' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"Services"},"anchor":"services","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div id="services" class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'What we do', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Everything you need to launch, nothing you don’t.', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Pick a single service or bundle them. Every project starts with a written scope and an hour estimate.', 'meridian' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $meridian_services as $meridian_service ) : ?><!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"accent","fontFamily":"mono","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-mono-font-family has-small-font-size" style="font-weight:600"><?php echo esc_html( $meridian_service[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $meridian_service[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $meridian_service[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
