<?php
/**
 * Plugin Name:       Gutenpride
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenpride
 *
 * @package           create-block
 */

/**
 * Render method of SSR Block example
 */
function ssr_block_render($attrs) {
	$albums = new WP_Query( array(
		'post_type' => 'album'
	) );
  $data = array(
    'title' => $attrs['title'],
	'album' => $albums
  );

	return view( __DIR__ . '/views/ssr-block/render.blade.php', $data)->render();
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_gutenpride_block_init() {
	register_block_type( __DIR__ . '/build/hello-world' );
	register_block_type( __DIR__ . '/build/plain-text' );
	register_block_type( __DIR__ . '/build/plain' );
	register_block_type( __DIR__ . '/build/texte-blanc' );
	register_block_type( __DIR__ . '/build/text-image' );
	register_block_type( __DIR__ . '/build/ssr-block', array(
		'render_callback' => 'ssr_block_render'
	) );
}
add_action( 'init', 'create_block_gutenpride_block_init' );
