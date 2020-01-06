<?php

/**
 * The file that defines the class for the Production post type
 *
 * @since      1.0.0
 *
 * @package    Teatterivaraus
 * @subpackage Teatterivaraus/includes/post-types
 */

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'post-types/class-teatterivaraus-post-type.php';


/**
 * The production post type
 * 
 * @since	1.0.0
 */
class Teatterivaraus_Production extends Teatterivaraus_Post_Type {
    
    /**
	 * Register the Production post type
	 * 
	 * @since	1.0.0
	 */
    public function register() {
        register_post_type('tv_production', array(
			'labels'                =>  array(
                'name'                      =>  __( 'Productions', 'teatterivaraus' ),
                'singular_name'             =>  __( 'Production', 'teatterivaraus' ),
                'add_new'                   =>  _x( 'Add New', 'production', 'teatterivaraus' ),
                'add_new_item'              =>  __( 'Add New Production', 'teatterivaraus' ),
                'edit_item'                 =>  __( 'Edit Production', 'teatterivaraus' ),
                'new_item'                  =>  __( 'New Production', 'teatterivaraus' ),
                'view_item'                 =>  __( 'View Production', 'teatterivaraus' ),
                'view_items'                =>  __( 'View Productions', 'teatterivaraus' ),
                'search_items'              =>  __( 'Search Productions', 'teatterivaraus' ),
                'not_found'                 =>  __( 'No productions found', 'teatterivaraus' ),
                'not_found_in_trash'        =>  __( 'No productions found in Trash', 'teatterivaraus' ),
                'all_items'                 =>  __( 'All Productions', 'teatterivaraus' ),
                'attributes'                =>  __( 'Production attributes', 'teatterivaraus' ),
                'filter_items_list'         =>  __( 'Filter productions list', 'teatterivaraus' ),
                'item_published'            =>  __( 'Production published', 'teatterivaraus' ),
                'item_published_privately'  =>  __( 'Production published privately', 'teatterivaraus' ),
                'item_reverted_to_draft'    =>  __( 'Production reverted to draft', 'teatterivaraus' ),
                'item_scheduled'            =>  __( 'Production scheduled', 'teatterivaraus' ),
                'item_updated'              =>  __( 'Production updated', 'teatterivaraus' ),
            ),
            'description'           =>  __( 'A set of shows with the same title, ticket types and other preferences.', 'teatterivaraus' ),
            'public'                =>  true,
            'exclude_from_search'   =>  true,
            'show_in_nav_menus'     =>  false,
            'menu_position'         =>  0,
            'supports'              =>  array( 'title', 'revisions' ),
		));
    }

} 