<?php

/*
	Plugin Name: Custom Loggin Hint
	Plugin URI:
	Plugin Update Check URI:
	Plugin Description: Custom Loggin Hint
	Plugin Version: 0.1
	Plugin Date: 2016-06-23
	Plugin Author: 38qa.net
	Plugin Author URI:
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7
*/


if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
}
// language file
qa_register_plugin_phrases('qa-custom-loggin-hint-lang-*.php', 'custom_loggin_hint');
// layer
qa_register_plugin_layer('qa-custom-loggin-hint-layer.php', 'Custom Loggin Hint Layer');

/*
	Omit PHP closing tag to help avoid accidental output
*/
