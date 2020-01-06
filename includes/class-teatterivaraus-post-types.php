<?php

/**
 * The file that defines the class for handling custom post types
 *
 * @since      1.0.0
 *
 * @package    Teatterivaraus
 * @subpackage Teatterivaraus/includes
 */

/**
 * The post types class.
 *
 * This is used to define custom post types.
 *
 * @since      1.0.0
 * @package    Teatterivaraus
 * @subpackage Teatterivaraus/includes
 */
class Teatterivaraus_Post_Types {

	/**
	 * Register custom post types
	 * 
	 * @since	1.0.0
	 */
	public function register() {
        $this->register_production();
    }
    
    /**
     * Register the production post type
     * 
     * @since   1.0.0
     * @access  private
     */
    private function register_production() {
        register_post_type('tv_production', array(
			'labels'                =>  array(
                'name'          =>  __('Productions', 'teatterivaraus'),
                'singular_name' =>  __('Production', 'teatterivaraus'),
            ),
            'description'           =>  __('A set of shows with the same title, ticket types and other preferences.', 'teatterivaraus'),
            'public'                =>  true,
            'exclude_from_search'   =>  true,
            'show_in_nav_menus'     =>  false,
            'menu_position'         =>  0,
            'supports'              =>  array( 'title', 'revisions' ),
		));
    }

}
