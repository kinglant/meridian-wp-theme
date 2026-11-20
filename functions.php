<?php
/**
 * Meridian theme functions.
 *
 * Block themes need very little PHP: layout, colours and typography live in
 * theme.json, markup lives in templates/, parts/ and patterns/. This file only
 * wires up what theme.json cannot express.
 *
 * @package Meridian
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MERIDIAN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles.
 */
function meridian_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'meridian_setup' );

/**
 * Front-end stylesheet: the small set of rules theme.json can't express
 * (hover lift on cards, sticky header, details marker).
 */
function meridian_enqueue_assets() {
	wp_enqueue_style(
		'meridian-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		MERIDIAN_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'meridian_enqueue_assets' );

/**
 * Pattern categories so Meridian's sections are easy to find in the inserter.
 */
function meridian_register_pattern_categories() {
	register_block_pattern_category(
		'meridian',
		array(
			'label'       => __( 'Meridian', 'meridian' ),
			'description' => __( 'Landing-page sections from the Meridian theme.', 'meridian' ),
		)
	);
}
add_action( 'init', 'meridian_register_pattern_categories' );

/**
 * Extra block styles editors can pick from the sidebar.
 */
function meridian_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'card',
			'label' => __( 'Card', 'meridian' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'arrow',
			'label' => __( 'With arrow', 'meridian' ),
		)
	);
	register_block_style(
		'core/list',
		array(
			'name'  => 'checks',
			'label' => __( 'Checkmarks', 'meridian' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'eyebrow',
			'label' => __( 'Eyebrow', 'meridian' ),
		)
	);
}
add_action( 'init', 'meridian_register_block_styles' );

/**
 * Estimated reading time, used by the [meridian_reading_time] shortcode in
 * the single post template.
 *
 * @return string
 */
function meridian_reading_time() {
	$post = get_post();
	if ( ! $post ) {
		return '';
	}
	$words   = str_word_count( wp_strip_all_tags( $post->post_content ) );
	$minutes = max( 1, (int) ceil( $words / 220 ) );

	/* translators: %d: minutes */
	return esc_html( sprintf( _n( '%d min read', '%d min read', $minutes, 'meridian' ), $minutes ) );
}
add_shortcode( 'meridian_reading_time', 'meridian_reading_time' );
