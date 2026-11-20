<?php
/**
 * Title: Process and numbers (dark)
 * Slug: meridian/stats
 * Categories: meridian, about
 * Keywords: stats, numbers, process, dark
 * Viewport Width: 1400
 *
 * @package Meridian
 */

$meridian_stats = array(
	array( '120+', __( 'Sites shipped', 'meridian' ) ),
	array( '3 wks', __( 'Average launch time', 'meridian' ) ),
	array( '12 h', __( 'Max reply time', 'meridian' ) ),
	array( '98%', __( 'Tasks on estimate', 'meridian' ) ),
);
$meridian_steps = array(
	array( __( 'Scope', 'meridian' ), __( 'A short call, then a written scope with an hour range for each piece.', 'meridian' ) ),
	array( __( 'Build', 'meridian' ), __( 'Weekly previews on a staging link. You comment, we adjust.', 'meridian' ) ),
	array( __( 'Launch', 'meridian' ), __( 'Deployed to your server, with a handover video and docs.', 'meridian' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"Process"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'How we work', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Clear timelines. No surprises.', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"meridian-soft","fontSize":"large"} -->
<p class="meridian-soft has-large-font-size"><?php esc_html_e( 'You always know what is being built, how long it will take and what it will cost — before we start.', 'meridian' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php foreach ( $meridian_steps as $meridian_i => $meridian_step ) : ?><!-- wp:group {"className":"meridian-soft-border","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"},"border":{"bottom":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group meridian-soft-border" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"accent","fontFamily":"mono","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-mono-font-family has-small-font-size" style="font-weight:600"><?php echo esc_html( sprintf( '%02d', $meridian_i + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $meridian_step[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"meridian-soft"} -->
<p class="meridian-soft"><?php echo esc_html( $meridian_step[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"10rem"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70)"><?php foreach ( $meridian_stats as $meridian_stat ) : ?><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1","letterSpacing":"-0.03em"}},"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size" style="font-weight:700;letter-spacing:-0.03em;line-height:1"><?php echo esc_html( $meridian_stat[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"meridian-soft","fontSize":"small"} -->
<p class="meridian-soft has-small-font-size"><?php echo esc_html( $meridian_stat[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
