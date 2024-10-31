<?php
namespace Mehedi\ProductWatcher\Core;

use Mehedi\ProductWatcher\Settings\Gateway;
use Mehedi\ProductWatcher\Settings\Integration;

class Settings {

	/**
	 * Get gateway settings
	 *
	 * @return Gateway
	 */
	public static function gateway() {
		return Gateway::init();
	}

	/**
	 * Get integration settings
	 *
	 * @return Integration
	 */
	public static function integration() {
		return Integration::init();
	}
}
