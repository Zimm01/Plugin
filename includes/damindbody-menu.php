<?php
   /**
	* Plugin Name: DefineAwesome MindBody
	*
	* @since 1.2.0
	*/

	// Hook for adding admin menus
	add_action('admin_menu', 'mt_add_pages');

	
	// action function for above hook
	function mt_add_pages() {
		
		add_menu_page('#DefineAwesome MindBody Plugin', 'DA MindBody', 'manage_options', 'my-top-level-handle', 'mt_settings_page');
	}

	// mt_settings_page() displays the page content for the Test Settings submenu
	function mt_settings_page() {
		echo "<h2>" . __( 'Test Settings', 'menu-test' ) . "</h2>";
	}
	

?>