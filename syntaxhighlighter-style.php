<?php
/*
Plugin Name: SyntaxHighlighter Evolved Stylesheets
Plugin URI: http://philkovacs.com
Description: A plugin to register stylesheets for SyntaxHighlighter Evolved
Version: 0.1.2
Author: Philip Kovacs
Author URI: http://philkovacs.com
License: GPL2
*/

if (!class_exists("SyntaxhighlighterStyle")) {

    class SyntaxhighlighterStyle {

        var $pluginversion = '0.1.0';  // Plugin version

        function __construct() {
	    
	    //
 	    // Register syntaxhighlighter-theme-mist style
            //
            wp_register_style(
		'syntaxhighlighter-theme-mist',
		plugins_url('syntaxhighlighter-style/v3/shThemeMist.css'),
		array('syntaxhighlighter-core'),
		$this->pluginversion);

	    //
 	    // Register syntaxhighlighter-theme-trans style
	    //
	    wp_register_style(
	       'syntaxhighlighter-theme-trans',
	       plugins_url('syntaxhighlighter-style/v3/shThemeTrans.css'),
               array('syntaxhighlighter-core'),
	       $this->pluginversion);
	   
            add_filter('syntaxhighlighter_themes', array (&$this, 'add_syntaxhighlighter_themes'));
        }

        function SyntaxhighlighterStyle() {
            $this->__construct();
        }

        function add_syntaxhighlighter_themes( $themes ) {
	    //
 	    // themes['<name>'] = '<Dropdown Label>'
	    //
            $themes['mist']  = 'Mist';
	    $themes['trans'] = 'Trans';

            return $themes;
        }
    }
}

//
// Start plugin with priority higher than SyntaxHighlighter (5) (i.e. a lower number than 5)
// so that local themes appear its drop down.
// 
add_action('init', 'SyntaxhighlighterStyle', 4);
function SyntaxhighlighterStyle() {
        global $SyntaxhighlighterStyle;
        $SyntaxhighlighterStyle = new SyntaxhighlighterStyle();
}

?>
