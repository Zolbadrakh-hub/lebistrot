<?php
	if(defined('OVA_THEME_URL') 	== false) 	define('OVA_THEME_URL', get_template_directory());
	if(defined('OVA_THEME_URI') 	== false) 	define('OVA_THEME_URI', get_template_directory_uri());

	// Load the theme of translated strings
	load_theme_textdomain('fable', OVA_THEME_URL . '/languages');

	require_once (OVA_THEME_URL.'/framework/framework.php');
	require_once (OVA_THEME_URL.'/extend/add_js_css.php');
	require_once (OVA_THEME_URL.'/extend/metabox.php');
	require_once (OVA_THEME_URL.'/content/define_blocks_content.php');
	require_once (OVA_THEME_URL).'/extend/register_menu.php';
	require_once (OVA_THEME_URL).'/extend/register_widget.php';
	require_once (OVA_THEME_URL).'/extend/breadcrumbs.php';
	require_once (OVA_THEME_URL) . '/extend/themeslug_walker_nav_menu.php';
	require_once (OVA_THEME_URL) . '/extend/plugins/active_plugin.php';

	// Create instance for ovatheme class
	$fable_ovatheme = new fable_ovatheme();
	$fable_customizer = new fable_customizer();