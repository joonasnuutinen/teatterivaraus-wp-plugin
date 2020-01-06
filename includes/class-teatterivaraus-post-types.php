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
	 * An array that contains the custom post types associated with the plugin
	 * 
	 * @since	1.0.0
     * @access  private
	 */
    private $post_types;

    /**
	 * Require the custom post types and add them to the $post_types array
	 * 
	 * @since	1.0.0
	 */
    public function __construct() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/post-types/class-teatterivaraus-production.php';
        
        $this->$post_types = array(
            new Teatterivaraus_Production(),
        );
    }

	/**
	 * Register custom post types
	 * 
	 * @since	1.0.0
	 */
	public function register() {
        
        foreach ( $this->$post_types as $post_type ) {
            $post_type->register();
        }
        
    }

}
