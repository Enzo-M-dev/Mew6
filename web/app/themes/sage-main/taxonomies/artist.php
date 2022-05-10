<?php

/**
 * Registers the `artist` taxonomy,
 * for use with 'album'.
 */
function artist_init() {
	register_taxonomy( 'artist', [ 'album' ], [
		'hierarchical'          => false,
		'public'                => true,
		'show_in_nav_menus'     => true,
		'show_ui'               => true,
		'show_admin_column'     => false,
		'query_var'             => true,
		'rewrite'               => true,
		'capabilities'          => [
			'manage_terms' => 'edit_posts',
			'edit_terms'   => 'edit_posts',
			'delete_terms' => 'edit_posts',
			'assign_terms' => 'edit_posts',
		],
		'labels'                => [
			'name'                       => __( 'Artists', 'sage-main' ),
			'singular_name'              => _x( 'Artist', 'taxonomy general name', 'sage-main' ),
			'search_items'               => __( 'Search Artists', 'sage-main' ),
			'popular_items'              => __( 'Popular Artists', 'sage-main' ),
			'all_items'                  => __( 'All Artists', 'sage-main' ),
			'parent_item'                => __( 'Parent Artist', 'sage-main' ),
			'parent_item_colon'          => __( 'Parent Artist:', 'sage-main' ),
			'edit_item'                  => __( 'Edit Artist', 'sage-main' ),
			'update_item'                => __( 'Update Artist', 'sage-main' ),
			'view_item'                  => __( 'View Artist', 'sage-main' ),
			'add_new_item'               => __( 'Add New Artist', 'sage-main' ),
			'new_item_name'              => __( 'New Artist', 'sage-main' ),
			'separate_items_with_commas' => __( 'Separate artists with commas', 'sage-main' ),
			'add_or_remove_items'        => __( 'Add or remove artists', 'sage-main' ),
			'choose_from_most_used'      => __( 'Choose from the most used artists', 'sage-main' ),
			'not_found'                  => __( 'No artists found.', 'sage-main' ),
			'no_terms'                   => __( 'No artists', 'sage-main' ),
			'menu_name'                  => __( 'Artists', 'sage-main' ),
			'items_list_navigation'      => __( 'Artists list navigation', 'sage-main' ),
			'items_list'                 => __( 'Artists list', 'sage-main' ),
			'most_used'                  => _x( 'Most Used', 'artist', 'sage-main' ),
			'back_to_items'              => __( '&larr; Back to Artists', 'sage-main' ),
		],
		'show_in_rest'          => true,
		'rest_base'             => 'artist',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	] );

}

add_action( 'init', 'artist_init' );

/**
 * Sets the post updated messages for the `artist` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `artist` taxonomy.
 */
function artist_updated_messages( $messages ) {

	$messages['artist'] = [
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Artist added.', 'sage-main' ),
		2 => __( 'Artist deleted.', 'sage-main' ),
		3 => __( 'Artist updated.', 'sage-main' ),
		4 => __( 'Artist not added.', 'sage-main' ),
		5 => __( 'Artist not updated.', 'sage-main' ),
		6 => __( 'Artists deleted.', 'sage-main' ),
	];

	return $messages;
}

add_filter( 'term_updated_messages', 'artist_updated_messages' );
