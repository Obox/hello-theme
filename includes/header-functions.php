<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register Site Settings Controls.
 */

add_action( 'elementor/init', 'hello_elementor_settings_init' );

function hello_elementor_settings_init() {
		require 'settings/menu-settings.php';

		add_action( 'elementor/kit/register_tabs', function( \Elementor\Core\Kits\Documents\Kit $kit ) {
			$kit->register_tab( 'hello-settings-header', HelloTheme\Includes\MenuSettings\Settings_Header::class );
		}, 1, 40 );
}
