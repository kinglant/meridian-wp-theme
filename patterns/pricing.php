<?php
/**
 * Title: Pricing tiers
 * Slug: meridian/pricing
 * Categories: meridian, call-to-action
 * Keywords: pricing, plans, packages
 * Viewport Width: 1400
 * Description: Three pricing cards; the middle one is highlighted.
 *
 * @package Meridian
 */

$meridian_plans = array(
	array(
		'name'     => __( 'Landing page', 'meridian' ),
		'price'    => '$900',
		'per'      => __( 'one-off', 'meridian' ),
		'blurb'    => __( 'A single high-converting page, designed and built in a week.', 'meridian' ),
		'features' => array( __( 'One custom page template', 'meridian' ), __( 'Mobile-first, 95+ Lighthouse', 'meridian' ), __( 'Contact form & analytics', 'meridian' ), __( 'Deployed to your server', 'meridian' ) ),
		'cta'      => __( 'Get started', 'meridian' ),
		'featured' => false,
	),
	array(
		'name'     => __( 'Business site', 'meridian' ),
		'price'    => '$3,400',
		'per'      => __( 'one-off', 'meridian' ),
		'blurb'    => __( 'A full custom block theme your team can edit forever.', 'meridian' ),
		'features' => array( __( 'Up to 8 page templates', 'meridian' ), __( 'Editable block patterns', 'meridian' ), __( 'Blog, SEO & schema basics', 'meridian' ), __( 'Staging + Git deploys', 'meridian' ), __( '30 days of free fixes', 'meridian' ) ),
		'cta'      => __( 'Book a call', 'meridian' ),
		'featured' => true,
	),
	array(
		'name'     => __( 'Ongoing care', 'meridian' ),
		'price'    => '$25',
		'per'      => __( 'per hour', 'meridian' ),
		'blurb'    => __( 'A weekly hours budget for new pages, updates and fixes.', 'meridian' ),
		'features' => array( __( 'Estimate before every task', 'meridian' ), __( 'Replies within 12 hours', 'meridian' ), __( 'Weekly progress report', 'meridian' ), __( 'Cancel any time', 'meridian' ) ),
		'cta'      => __( 'Ask about availability', 'meridian' ),
		'featured' => false,
	),
);
?>
<!-- wp:group {"metadata":{"name":"Pricing"},"anchor":"pricing","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div id="pricing" class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'Pricing', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Simple, upfront pricing.', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"large"} -->
<p class="has-text-align-center has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Fixed prices for defined projects, hourly for everything after launch.', 'meridian' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $meridian_plans as $meridian_plan ) : ?>
	<?php $meridian_card_class = $meridian_plan['featured'] ? 'is-style-card meridian-featured' : 'is-style-card'; ?><!-- wp:group {"className":"<?php echo esc_attr( $meridian_card_class ); ?>","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group <?php echo esc_attr( $meridian_card_class ); ?>" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $meridian_plan['name'] ); ?></h3>
<!-- /wp:heading -->

<?php if ( $meridian_plan['featured'] ) : ?><!-- wp:paragraph {"style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.7rem","right":"0.7rem"}},"typography":{"fontWeight":"600"}},"backgroundColor":"accent","textColor":"on-accent","fontSize":"small"} -->
<p class="has-on-accent-color has-accent-background-color has-text-color has-background has-small-font-size" style="border-radius:999px;padding-top:0.2rem;padding-right:0.7rem;padding-bottom:0.2rem;padding-left:0.7rem;font-weight:600"><?php esc_html_e( 'Most popular', 'meridian' ); ?></p>
<!-- /wp:paragraph --><?php endif; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $meridian_plan['blurb'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1","letterSpacing":"-0.03em"}},"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size" style="font-weight:700;letter-spacing:-0.03em;line-height:1"><?php echo esc_html( $meridian_plan['price'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $meridian_plan['per'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checks","style":{"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"small"} -->
<ul class="wp-block-list is-style-checks has-small-font-size"><?php foreach ( $meridian_plan['features'] as $meridian_feature ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $meridian_feature ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"<?php echo $meridian_plan['featured'] ? 'is-style-fill' : 'is-style-outline'; ?>"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 <?php echo $meridian_plan['featured'] ? 'is-style-fill' : 'is-style-outline'; ?>"><a class="wp-block-button__link wp-element-button" href="#contact"><?php echo esc_html( $meridian_plan['cta'] ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
