<?php
/**
 * Plugin Name:       addis-software-property-post-types
 * Plugin URI:        
 * Description:       for creating cpt and taxonomies for software-products and many more
 * Version:           1.0.0
 * Requires at least: 
 * Requires PHP:      
 * Author:            Ibraheem Khedir
 * Author URI:        https://www.github.com/ibranista/
 * License:           
 * License URI:       
 * Update URI:        
 * Text Domain:       property-post-types
 */

 if (!defined ('WPINC')){
     die;
 }

 define('PROPPATH',plugin_dir_path(__FILE__));
 define('PROPDOMAIN','property-post-types');

 require_once(PROPPATH.'./post-types-registry/register-post-type.php');
 add_action('init','property_registry');
 
 // taxonomy
 require_once(PROPPATH.'./taxonomy-registry/register-product-taxonomy.php');
 add_action('init','software_taxonomy');
 


