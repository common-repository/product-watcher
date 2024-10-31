<?php
/**
 * Product Watcher
 *
 * @package           Product Watcher
 * @author            Mehedi Hasan
 * @copyright         2021 Mehedi Hasan
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Product Watcher - Display Realtime Product Viewer to Your Customers
 * Description:       A plugin for showing active visitor count of a product to customer of WooCommerce Store.
 * Version:           1.2
 * Requires at least: 5.2
 * Requires PHP:      7.1
 * Author:            Mehedi Hasan
 * Author URI:        https://mehedi.im
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **************************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **************************************************************************
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'PRODUCT_WATCHER_VERSION', '1.2' );

define( 'PRODUCT_WATCHER_URL', plugins_url( 'product-watcher' ) );

require_once __DIR__ . '/vendor/autoload.php';

// Init plugins
add_action( 'plugins_loaded', function () {
	Mehedi\ProductWatcher\ProductWatcher::init();
});


/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_product_watcher() {
	$client = new Appsero\Client( 'dd8e2795-cf78-4ad9-86b0-2e25af0c09dc', 'Product Watcher &#8211; Display Realtime Product Viewer to Your Customers', __FILE__ );

	// Active insights
	$client->insights()->init();

}

appsero_init_tracker_product_watcher();
