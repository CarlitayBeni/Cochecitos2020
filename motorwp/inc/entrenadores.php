<?php 

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Entrenador', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Entrenador', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Entrenadores', 'text_domain' ),
		'name_admin_bar'        => __( 'Entrenador', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos los entrenadores', 'text_domain' ),
		'add_new_item'          => __( 'Agregar un nuevo entrenador', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor','slug', 'thumbnail' ),
	//	'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'entrenador', $args );

}
add_action( 'init', 'custom_post_type', 0 );

/*-------------------------Taxonomias para entrenadores---------------------------------------*/

// Register Custom Taxonomy
function especialidad_entrenador() {

	$labels = array(
		'name'                       => _x( 'Especialidades', 'Taxonomy General Name', 'gymclub' ),
		'singular_name'              => _x( 'Especialidad', 'Taxonomy Singular Name', 'gymclub' ),
		'menu_name'                  => __( 'Especilaidad', 'gymclub' ),
		'all_items'                  => __( 'Todas las Especialidades', 'gymclub' ),
		'parent_item'                => __( 'Parent Especialidad', 'gymclub' ),
		'parent_item_colon'          => __( 'Parent Especialidad:', 'gymclub' ),
		'new_item_name'              => __( 'Nueva Especialidad', 'gymclub' ),
		'add_new_item'               => __( 'Agregar Nueva Especialidad', 'gymclub' ),
		'edit_item'                  => __( 'Editar Especialidad', 'gymclub' ),
		'update_item'                => __( 'Update Genre', 'gymclub' ),
		'view_item'                  => __( 'View Item', 'gymclub' ),
		'separate_items_with_commas' => __( 'Separate genres with commas', 'gymclub' ),
		'add_or_remove_items'        => __( 'Add or remove genres', 'gymclub' ),
		'choose_from_most_used'      => __( 'Choose from the most used genres', 'gymclub' ),
		'popular_items'              => __( 'Popular Items', 'gymclub' ),
		'search_items'               => __( 'Search genres', 'gymclub' ),
		'not_found'                  => __( 'Not Found', 'gymclub' ),
		'no_terms'                   => __( 'No items', 'gymclub' ),
		'items_list'                 => __( 'Items list', 'gymclub' ),
		'items_list_navigation'      => __( 'Items list navigation', 'gymclub' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
	//	'show_tagcloud'              => true,
	);
	register_taxonomy( 'especialidad', array( 'entrenador' ), $args );

}
add_action( 'init', 'especialidad_entrenador', 0 );

?>