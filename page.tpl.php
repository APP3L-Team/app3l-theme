<?php

require_once 'vendor/autoload.php';

$twig = new libs\TwigManager();

echo $twig->render('page.html.twig', array(
	
	'base_path' => $base_path,		// The base URL path of the Drupal installation. At the very least, this will always default to /
	'directory' => $directory,		//The directory the template is located in, e.g. modules/system or themes/bartik.
	'is_front' => $is_front,		// TRUE if the current page is the front page.
	'logged_in' => $logged_in,		// TRUE if the user is registered and signed in.
	'is_admin' => $is_admin,		// TRUE if the user has permission to access administration pages.
	
	
	// Site identity
	
	'front_page' => $front_page,	// The URL of the front page. Use this instead of $base_path, when linking to the front page. This includes the language domain or prefix.
	'logo' => $logo,				// The path to the logo image, as defined in theme configuration.
	'site_name' => $site_name,		// The name of the site, empty when display has been disabled in theme settings.
	'site_slogan' => $site_slogan,	// The slogan of the site, empty when display has been disabled in theme settings.
	
	
	// Navigation
	
	'main_menu' => $main_menu,				// An array containing the Main menu links for the site, if they have been configured.
	'secondary_menu' => $secondary_menu,	// An array containing the Secondary menu links for the site, if they have been configured.
	'breadcrumb' => $breadcrumb,			// The breadcrumb trail for the current page.
	
	
	// Page content
	
	'title_prefix' => $title_prefix,		// An array containing additional output populated by modules, intended to be displayed in front of the main title tag that appears in the template.
	'title' => $title,						// The page title, for use in the actual HTML content.
	'title_suffix' => $title_suffix,		// An array containing additional output populated by modules, intended to be displayed after the main title tag that appears in the template.
	'messages' => $messages,				// HTML for status and error messages. Should be displayed prominently.
	'tabs' => $tabs,						// Tabs linking to any sub-pages beneath the current page (e.g., the view and edit tabs when displaying a node).
	'action_links' => $action_links,		// Actions local to the page, such as 'Add menu' on the menu administration interface.
	'feed_icons' => $feed_icons,			// A string of all feed icons for the current page.
	'node' => isset($node) ? $node : null,	// The node object, if there is an automatically-loaded node associated with the page, and the node ID is the second argument in the page's path (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).
	
	
	// Regions
	
    // $page['help']: Dynamic help text, mostly for admin pages.
    // $page['highlighted']: Items for the highlighted content region.
    // $page['content']: The main content of the current page.
    // $page['sidebar_first']: Items for the first sidebar.
    // $page['sidebar_second']: Items for the second sidebar.
    // $page['header']: Items for the header region.
    // $page['footer']: Items for the footer region.

	'page' => $page,
));

?>
