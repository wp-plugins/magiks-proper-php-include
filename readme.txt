=== MaGiKS Proper PHP Include ===
Contributors: kjlock75
Donate link: http://magiksinc.com/
Tags: php, include file, short codes
Requires at least: 3.0.4
Tested up to: 3.0.4
Stable tag: 0.1.1

Properly include PHP code into posts and pages, and maybe even widgets, in WordPress.

== Description ==

MaGiKS Proper PHP Include lets you easily, quickly, efficiently and safely insert PHP code into posts, pages and / or widgets, without disabling the Visual Editor. You simply upload a php file containing your code into your theme folder and use a WordPress shortcode to "include" that file into your posts / pages / widgets.

This plugin uses a filter to add shortcode capability for widgets in case that functionality isn't already present. If it is, then it is redundant, and I'm sorry.

[MaGiKS Inc.](http://magiksinc.com/ "MaGiKS is where the magic happens")

== Installation ==

1. Upload `magiks-proper-php-include` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Create a .php file containing the code you want to "include" into your content
1. Upload the .php file to your current theme folder - for easy updating later
1. Use the shortcode [m_include_file filepath="/filename.php"] within your content

== Frequently Asked Questions ==

= Why did you create this plugin? =

I created this plugin because I needed the ability to include the exact same content in multiple places but I only wanted to update it in just one place... plus WP-Ads stopped working for me. As a bonus I knew I can include PHP in the file as well.

= Does the include file have to have PHP code in it? =

No, you can add any HTML, JavaScript, etc. in there, with or without PHP, which can be handy if you have the same content that you would like to display in multiple places but only want to update in just one.

= Aren't there already plugins that do this? =

Maybe. As far as the execution of PHP goes, I only found ones that either require the Visual Editor to be disabled, or claim that it doesn't. I have found in my testing that the ones that suggest you can leave the Visual Editor on did not work as desired for me. My code would still break. I don't use the Visual Editor anyways, but my clients do.

= Are you a magician? =

No, but thanks for asking.

== Screenshots ==



== Changelog ==

= 0.1.1 =
* Inital public release.

== Upgrade Notice ==



== Arbitrary section ==

