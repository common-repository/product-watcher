<?php
namespace Mehedi\ProductWatcher\Rest;

class Rest {

	public function __construct() {
		add_action( 'rest_api_init', array( $this, 'register_controllers' ) );
	}

	/**
	 * Register REST Controllers
	 */
	public function register_controllers() {
		new Auth();
		// new Settings();
		new Gateway();
		new Integrations();
	}
}
