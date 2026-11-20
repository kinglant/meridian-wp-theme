<?php
/**
 * Demo content importer, used only by the WordPress Playground blueprint.
 * Not loaded by the theme itself.
 *
 * @package Meridian
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Create demo categories and posts with featured images.
 */
function meridian_demo_import() {
	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/taxonomy.php';

	global $wp_rewrite;
	$wp_rewrite->set_permalink_structure( '/%postname%/' );
	$wp_rewrite->flush_rules( true );

	$hello = get_page_by_path( 'hello-world', OBJECT, 'post' );
	if ( $hello ) {
		wp_delete_post( $hello->ID, true );
	}

	// Static front page + a "Journal" page for the post index.
	$home_id    = wp_insert_post( array( 'post_title' => 'Home', 'post_type' => 'page', 'post_status' => 'publish' ) );
	$journal_id = wp_insert_post( array( 'post_title' => 'Journal', 'post_name' => 'journal', 'post_type' => 'page', 'post_status' => 'publish' ) );
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $home_id );
	update_option( 'page_for_posts', $journal_id );

	$posts = array(
		array( 'Shipping a block theme in two weeks', 'Process', 'What a realistic two-week WordPress build looks like, from scope to deploy, and where the time actually goes.' ),
		array( 'Why we stopped using page builders', 'WordPress', 'Page builders feel fast on day one and slow on day ninety. Block themes give editors the same freedom with a fraction of the weight.' ),
		array( 'How we estimate tasks (and keep to it)', 'Process', 'Hour ranges, buffers and the one-line daily update that keeps clients from ever being surprised by an invoice.' ),
		array( 'Getting LCP under one second on WordPress', 'Performance', 'Fonts, images and render-blocking plugins: the three fixes that took a clinic site from 3.9s to 0.9s.' ),
		array( 'Using AI without shipping AI slop', 'AI', 'Where AI tooling saves us real hours, where it does not, and the review step every generated line goes through.' ),
		array( 'Deploying WordPress with Git and SSH', 'Deployment', 'A simple, boring deploy pipeline for any VPS: Git push, rsync, cache flush — and a one-command rollback.' ),
	);

	$dir = get_stylesheet_directory() . '/demo/images/';

	foreach ( $posts as $i => $p ) {
		$cat_id = wp_create_category( $p[1] );

		$body  = '<!-- wp:paragraph --><p>Most projects stall not because the work is hard, but because nobody wrote down what “done” means. We start every build with a one-page scope: the templates, the patterns, the integrations, and an hour range next to each.</p><!-- /wp:paragraph -->';
		$body .= '<!-- wp:heading --><h2 class="wp-block-heading">The short version</h2><!-- /wp:heading -->';
		$body .= '<!-- wp:list {"className":"is-style-checks"} --><ul class="wp-block-list is-style-checks"><!-- wp:list-item --><li>Write the scope before writing code.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ship a staging link in the first week.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Keep every section editable as a block pattern.</li><!-- /wp:list-item --></ul><!-- /wp:list -->';
		$body .= '<!-- wp:quote --><blockquote class="wp-block-quote"><!-- wp:paragraph --><p>Clients don’t need fewer hours. They need fewer surprises.</p><!-- /wp:paragraph --></blockquote><!-- /wp:quote -->';
		$body .= '<!-- wp:paragraph --><p>From there, the build is mostly about restraint: one stylesheet, no jQuery, system-aware fonts, and images sized for the slot they sit in. The result is a site that scores well on Core Web Vitals without a caching plugin doing the heavy lifting.</p><!-- /wp:paragraph -->';
		$body .= '<!-- wp:code --><pre class="wp-block-code"><code>git push production main' . "\n" . '# → rsync to /var/www/site, flush cache, done</code></pre><!-- /wp:code -->';
		$body .= '<!-- wp:paragraph --><p>If you’d like the same approach on your site, the contact link is at the bottom of every page.</p><!-- /wp:paragraph -->';

		$post_id = wp_insert_post(
			array(
				'post_title'    => $p[0],
				'post_excerpt'  => $p[2],
				'post_content'  => $body,
				'post_status'   => 'publish',
				'post_category' => array( $cat_id ),
				'post_date'     => gmdate( 'Y-m-d H:i:s', strtotime( '-' . ( $i * 6 + 2 ) . ' days' ) ),
			)
		);

		$file = $dir . 'post-' . ( $i + 1 ) . '.jpg';
		if ( $post_id && file_exists( $file ) ) {
			$upload = wp_upload_bits( basename( $file ), null, file_get_contents( $file ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
			if ( empty( $upload['error'] ) ) {
				$att_id = wp_insert_attachment(
					array(
						'post_mime_type' => 'image/jpeg',
						'post_title'     => $p[0],
						'post_status'    => 'inherit',
					),
					$upload['file'],
					$post_id
				);
				wp_update_attachment_metadata( $att_id, wp_generate_attachment_metadata( $att_id, $upload['file'] ) );
				set_post_thumbnail( $post_id, $att_id );
			}
		}
	}
}
