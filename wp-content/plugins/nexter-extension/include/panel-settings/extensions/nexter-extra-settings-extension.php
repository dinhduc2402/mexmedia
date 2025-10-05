<?php
/*
 * Nexter Extension Extra Settings
 * @since 1.1.0
 */
defined('ABSPATH') or die();

class Nexter_Ext_Extra_Settings {
    
    /**
     * Constructor
     */
    public function __construct() {
		
		$extension_option = get_option( 'nexter_extra_ext_options' );
		$security_option = get_option( 'nexter_site_security' );

		if( !empty($extension_option)){
			//Adobe Font
			if( isset($extension_option['adobe-font']) && !empty($extension_option['adobe-font']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-adobe-font.php';
			}
			//Local Google Font
			// if( isset($extension_option['local-google-font']) && !empty($extension_option['local-google-font']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-local-google-font.php';
			// }
			//Custom Upload Font
			if( isset($extension_option['custom-upload-font']) && !empty($extension_option['custom-upload-font']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-custom-upload-font.php';
			}
			//Disable Admin Settings
			if( isset($extension_option['disable-admin-setting']) && !empty($extension_option['disable-admin-setting']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-disable-admin-settings.php';
			}

			//Content Post Order
			if( isset($extension_option['content-post-order']) && !empty($extension_option['content-post-order']['switch'])){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-content-post-order.php';
			}

			//Clean-Up Admin Bar
			if( isset($extension_option['clean-up-admin-bar']) && !empty($extension_option['clean-up-admin-bar']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-clean-up-admin-bar.php';
			}

			//Wilder Admin Menu Width
			if( isset($extension_option['wider-admin-menu']) && !empty($extension_option['wider-admin-menu']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-wider-admin-menu.php';
			}
			
			//Disable Gutenberg
			if( isset($extension_option['disable-gutenberg']) && !empty($extension_option['disable-gutenberg']['switch'])){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-disable-gutenberg.php';
			}

			//Redirect 404 Page
			if( isset($extension_option['redirect-404-page']) && !empty($extension_option['redirect-404-page']['switch']) && !defined( 'NXT_PRO_EXT' ) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-redirect-404-page.php';
			}
			
			//Rollback Manager
			if( isset($extension_option['rollback-manager']) && !empty($extension_option['rollback-manager']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-rollback-manager.php';
			}

			//SMTP Email
			if( isset($extension_option['smtp-email']) && !empty($extension_option['smtp-email']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-smtp-email.php';
			}

			//View Admin Switcher
			if( isset($extension_option['view-admin-role']) && !empty($extension_option['view-admin-role']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-view-admin-role.php';
			}

			//Elementor AdFree
			if( isset($extension_option['elementor-adfree']) && !empty($extension_option['elementor-adfree']['switch']) && class_exists( '\Elementor\Plugin' )){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-elementor-adfree.php';
			}

			//WP Debug Mode
			if( isset($extension_option['wp-debug-mode']) && !empty($extension_option['wp-debug-mode']['switch'])){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-wp-debug-mode.php';
			}

		}
		

		require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-post-duplicator.php';
		require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-replace-url.php';
		if(!empty($security_option)){
			if( isset($security_option['captcha-security']) && !empty($security_option['captcha-security']['switch']) && isset( $security_option['captcha-security']['values'] ) &&  !empty( $security_option['captcha-security']['values'] ) ){
				
				$captcha_type = (isset($security_option['captcha-security']['values']['captcha_type']) && !empty($security_option['captcha-security']['values']['captcha_type'])) ? $security_option['captcha-security']['values']['captcha_type'] : 'google';

				$reoption = $security_option['captcha-security']['values'];

				if( ( $captcha_type == 'google' && ( isset($reoption['siteKey']) && !empty($reoption['siteKey'] ) ) && ( isset($reoption['secretKey']) && !empty($reoption['secretKey'] ) ) && ( ( isset($reoption['formType']) && !empty($reoption['formType']) ) ))  || ( $captcha_type == 'cloudflare' && ( isset($reoption['turnSiteKey']) && !empty($reoption['turnSiteKey'] ) ) && ( isset($reoption['turnSecretKey']) && !empty($reoption['turnSecretKey'] ) ) && ( ( isset($reoption['formType']) && !empty($reoption['formType']) ) ))){
					switch ($captcha_type) {
					case 'google':
						require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-google-captcha.php';
						break;

					case 'cloudflare':
						require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-cloudflare-captcha.php';
						break;
					}
				}
			}
		}

		if(!empty($security_option)){
			$sec_opt = $this->convert_object_to_array($security_option);
			if( isset($sec_opt['limit-login-attempt']) && !empty($sec_opt['limit-login-attempt']['switch']) ){
				require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-limit-login-attempt.php';
			}
		}
		require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-performance-security-settings.php';
		require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-image-sizes.php';
		if(class_exists( '\Elementor\Plugin' ) ){
			require_once NEXTER_EXT_DIR . 'include/panel-settings/extensions/nexter-ext-disable-elementor-icons.php';
		}

        add_filter( 'upload_mimes', [$this, 'nxt_allow_mime_types']);
		add_filter('wp_check_filetype_and_ext', [$this, 'nxt_check_file_ext'], 10, 4);
    }

	/**
	 * Nexter Check Filetype and Extension File Woff, ttf, woff2
	 * @since 1.1.0 
	 */
	public function nxt_check_file_ext($types, $file, $filename, $mimes) {
		
		if (false !== strpos($filename, '.ttf')) {
			$types['ext'] = 'ttf';
			$types['type'] = 'application/x-font-ttf';
		}

		if (false !== strpos($filename, '.woff2')) {
			$types['ext'] = 'woff2';
			$types['type'] = 'font/woff2|application/octet-stream|font/x-woff2';
		}

		return $types;
	}

	/**
	 * Nexter Upload Mime Font File Woff, ttf, woff2
	 * @since 1.1.0 
	 */
	public function nxt_allow_mime_types( $mimes ) {
		$mimes['ttf'] = 'application/x-font-ttf';
		$mimes['woff2'] = 'font/woff2|application/octet-stream|font/x-woff2';
		
		return $mimes;
	}

	public function convert_object_to_array($data) {
		if (is_object($data)) {
			$data = (array) $data;
		}
		if (is_array($data)) {
			return array_map([$this, 'convert_object_to_array'], $data);
		}
		return $data;
	}

}
new Nexter_Ext_Extra_Settings();