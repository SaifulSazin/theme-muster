<?php 
/*--------------------------------------------------
	   Functions For Custom Post
---------------------------------------------------*/


	add_action( 'init', 'home_custom_post' );

function home_custom_post() {
    

    	register_post_type( 'portfolio',
				array(
					'labels' => array(
						'name' => __( 'Portfolio' ),
						'singular_name' => __( 'Portfolio' ),
						'add_new' => __( 'Add New' ),
						'add_new_item' => __( 'Add New Portfolio' ),
						'edit_item' => __( 'Edit Portfolio' ),
						'new_item' => __( 'New Portfolio' ),
						'view_item' => __( 'View Portfolio' ),
						'not_found' => __( 'Sorry, we couldn\'t find the Portfolio you are looking for.' )
					),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
	//			'menu_icon' => get_template_directory_uri() . '/img/icons/en.gif',
	//			'show_in_menu' => false,
				'menu_position' => 14,
				'has_archive' => true,
				'hierarchical' => true, 
				'capability_type' => 'post',
				'rewrite' => array( 'slug' => 'portfolio' ),
				'supports' => array( 'title', 'thumbnail','excerpt','editor' )
				)
			);
    
    

} 



/*--------------------------------------------------
	Portfolio Post Taxonomy
---------------------------------------------------*/

	function portfolio_taxonomy() {
		register_taxonomy(
			'portfoliocat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
			'portfolio',                  //post type name
				array(
					'hierarchical' => true,
					'show_admin_column' => true, // showing post tag, category in admin column.
					'label'        => 'Portfolio Category',  //Display name
					'query_var'    => true,
					'rewrite'      => array(
						'slug'     => 'Portfolio-cat', // This controls the base slug that will display before each term
						'with_front'    => true // Don't display the category base before
						)
					)
		);
	}
	add_action( 'init', 'portfolio_taxonomy');  
?>