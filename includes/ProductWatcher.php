<?php
namespace Mehedi\ProductWatcher;

use Mehedi\ProductWatcher\Core\Admin;
use Mehedi\ProductWatcher\Core\FrontEnd;
use Mehedi\ProductWatcher\Rest\Rest;
use Mehedi\ProductWatcher\Traits\Singleton;

final class ProductWatcher {
	use Singleton;

	public function boot() {
		new Rest();

		if ( is_admin() ) {
			new Admin();
		} else {
			new FrontEnd();
		}
	}
}
