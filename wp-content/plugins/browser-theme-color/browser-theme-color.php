<?php
/*
Plugin Name:  Browser Theme Color
Plugin URI:  https://wordpress.org/plugins/browser-theme-color/
Description: Simple and effective plugin to add the "theme-color" meta tag to your website
Version:      1.4.1
Author:       Marco Milesi
Author URI:  https://marcomilesi.com
Contributors: Milmor
Text Domain:  browser-theme-color
*/

add_action('wp_head', function() {
    echo '<!-- browser-theme-color for WordPress -->';
    echo '<meta name="theme-color" content="'.btc_get_color().'">';
    echo '<meta name="msapplication-navbutton-color" content="'.btc_get_color().'">';
    echo '<meta name="apple-mobile-web-app-capable" content="yes">';
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">';
});

add_action( 'admin_menu', function() {
	add_options_page( 
		'Browser Theme Color',
		'Browser Theme Color',
		'manage_options',
		'btc_settings',
		'btc_settings_page'
	);
});

add_action('admin_enqueue_scripts', function() {
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script( 'btc-script-handle', plugins_url('btc-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
});

function btc_settings_page() {
    if ( isset($_POST['submit']) && isset($_POST['btc-input-class-n']) ) {
        // Verify the nonce before proceeding
        if ( !check_admin_referer('btc_nonce_action', 'btc_nonce_name') ) {
            wp_die(__('Nonce verification failed', 'browser-theme-color'));
        }
    
        update_option( 'btc_color', sanitize_text_field( $_POST['btc-input-class-n'] ) );
    }
    
    echo '<h2>'.__( 'Browser Theme Color', 'browser-theme-color').'</h2>';
    echo '<form method="post" name="options" target="_self">';
    
    // Add the nonce field to the form
    wp_nonce_field('btc_nonce_action', 'btc_nonce_name');
    
    echo '<input type="text" class="btc-input-class" value="'.esc_attr(btc_get_color()).'" data-default-color="#23282D" name="btc-input-class-n">';
    submit_button();
    echo '</form>';
}

function btc_get_color() {
    return (get_option( 'btc_color' ) ? sanitize_text_field( get_option( 'btc_color' ) ) : '#23282D');
}
?>