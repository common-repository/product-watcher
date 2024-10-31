<?php

namespace Mehedi\ProductWatcher\Rest;

class Settings extends RestController {

	public function __construct() {
		$this->get( '/settings', 'get_settings' );
	}

	public function get_settings() {

	}
}
