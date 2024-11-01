=== SyntaxHighlighter Evolved Style ===
Contributors: philplusplus
Donate link: 
Tags: wordpress, plugin, php, syntax, stylesheet, css
Requires at least: 2.7
Tested up to: 3.1
Stable tag: 0.1.2

This is a lightweight plugin used to load custom stylesheets for SyntaxHighlighter Evolved.

== Description ==

The purpose of this plugin is to separate theme hacking from the SyntaxHighlighter Evolved plugin area and move it into a private area (this plugin).

This accomplishes two things: 

1) It allows you to upgrade SyntaxHighlighter Evolved without worrying about clobbering your custom themes and 

2) It replaces any WordPress theme-specific hooks (functions.php, etc.) that
you may be using to load your custom themes. 

This creates a WordPress theme-independent way to load and store custom syntax themes.

== Installation ==

1. Upload `syntaxhighlighter-style.zip` to the `/wp-content/plugins/` directory
2. Unzip it with 'unzip syntaxhighlighter-style.zip'
3. Copy or create new stylesheets into the plugin directory.
4. Edit syntaxhighlighter-style.php to load the stylesheet (read the comments)
1. Activate the plugin through the 'Plugins' admin menu in WordPress

== Frequently Asked Questions ==

= How do I add new syntax themes once the plugin is running? =

Simply deactivate the plugin, edit the new themes (.css files) in the plugin directory, edit syntaxhighlighter-style.php to register the new themes and then re-activate the plugin from the WordPress Plugins panel.

== Screenshots ==

1. Example of SyntaxHighlighter Evolved drop down menu with themes Mist and Trans added.
2. SyntaxHighlighter Evolved and SyntaxHighlighter Evolved Style plugins on WordPress panel.

== Upgrade Notice == 

== Changelog ==

= 0.1.2 =
* Added screenshots

= 0.1.1 =
* Fixed up readme.txt

= 0.1.0 =
* Released: November 24, 2011
