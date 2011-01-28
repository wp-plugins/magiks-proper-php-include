<?php

/*
Plugin Name: MaGiKS Proper PHP Include
Plugin URI: http://magiksinc.com/proper-php-include-wp-plugin/
Description: Properly include PHP code into posts and pages, and maybe even widgets, in WordPress
Version: 1.0
Author: Keith James Lock
Author URI: http://keithjameslock.com
*/

class magiks_proper_php_include_shortcode_class
{

   /**
     * Handler for [m_include_file] shortcodes
     * Processes an include file that contains custom PHP code.
     * @param   array $atts         Attributes passed in by shortcode
     * @param   string $content     Contents of shortcode
     * @return  string              Contents of include file
     */
    function magiks_proper_php_include_file($atts, $content="")
    {
	    // Check the input and override the default filepath NULL.
		extract(shortcode_atts(array('filepath' => 'NULL'), $atts));

		// Check if the filepath was specified and if the file exists
		if ($filepath!='NULL' && file_exists(TEMPLATEPATH.$filepath))
		{
		    // Turn on output buffering to capture script output.
		    ob_start();

		    // Include the specified file.
		    include(TEMPLATEPATH.$filepath);

		    // Assign the file output to $content variable and clean buffer.
		    $content = ob_get_clean();

		    // Return the $content
			return $content;
		}
	}

}

// Instantiate an object of magiks_proper_php_include_shortcode_class.
$magiks_proper_php_include_shortcode_class = new magiks_proper_php_include_shortcode_class;

// Add shortcodes.
add_shortcode('m_include_file', array($magiks_proper_php_include_shortcode_class, 'magiks_proper_php_include_file'));
add_filter('widget_text', 'do_shortcode');

?>