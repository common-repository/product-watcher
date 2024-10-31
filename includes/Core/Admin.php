<?php
namespace Mehedi\ProductWatcher\Core;

class Admin {

	/**
	 * Admin constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_menu' ) );

		if ( isset( $_GET['page'] ) && 'product-watcher' === $_GET['page'] ) {
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		}
	}

	/**
	 * Add admin menu
	 */
	public function add_menu() {
		add_menu_page( 'Realtime product watcher', 'Product Watcher', 'manage_options', 'product-watcher', array( $this, 'render' ), 'dashicons-welcome-view-site', 50 );
	}

	/**
	 * Render admin page
	 */
	public function render() {
		echo '<div id="product-watcher"></div>';
	}

	/**
	 * Enqueue admin scripts
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( 'product-watcher-manifest', PRODUCT_WATCHER_URL . '/dist/manifest.js', array(), PRODUCT_WATCHER_VERSION, true );
		wp_enqueue_script( 'product-watcher-vendor', PRODUCT_WATCHER_URL . '/dist/vendor.js', array(), PRODUCT_WATCHER_VERSION, true );
		wp_enqueue_script( 'product-watcher-app', PRODUCT_WATCHER_URL . '/dist/app.js', array(), PRODUCT_WATCHER_VERSION, true );
		wp_localize_script(
			'product-watcher-app',
			'product_watcher',
			array(
				'rest'  => array(
					'url' => get_rest_url( null, 'product-watcher/v1' ),
				),
				'nonce' => wp_create_nonce( 'wp_rest' ),
			)
		);
		wp_enqueue_style( 'product-watcher-app-style', PRODUCT_WATCHER_URL . '/dist/css/app.css', array(), PRODUCT_WATCHER_VERSION );
	}
}
