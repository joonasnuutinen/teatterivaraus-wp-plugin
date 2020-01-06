<?php

/**
 * The file that defines the class for the generic custom post type
 *
 * @since      1.0.0
 *
 * @package    Teatterivaraus
 * @subpackage Teatterivaraus/includes/post-types
 */

/**
 * An abstract class that contains generic post type functionality
 * 
 * @since	1.0.0
 */
abstract class Teatterivaraus_Post_Type {

    /**
	 * Register the custom post type
	 * 
	 * @since	1.0.0
	 */
    abstract public function register();

}