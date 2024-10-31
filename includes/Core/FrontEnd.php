<?php
namespace Mehedi\ProductWatcher\Core;

use Mehedi\ProductWatcher\Gateway\Gateway;

class FrontEnd {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		if ( Settings::integration()->isOn() ) {
			add_action( Settings::integration()->get( 'woocommerce' )['position'], array( $this, 'render' ) );
		}
	}
	public function enqueue_scripts() {
		if ( Settings::integration()->isOnWooCommerce() ) {
			wp_enqueue_script( 'product-watcher-manifest', PRODUCT_WATCHER_URL . '/dist/manifest.js', array(), PRODUCT_WATCHER_VERSION, true );
			wp_enqueue_script( 'product-watcher-frontend', PRODUCT_WATCHER_URL . '/dist/frontend.js', array(), PRODUCT_WATCHER_VERSION, true );
			$data = Settings::gateway()->get();
			wp_localize_script( 'product-watcher-frontend', 'product_watcher_gateway', Gateway::init()->credentials( $data ) );
		}
	}

	/**
	 * Render
	 */
	public function render() {
		global $product;
		?>
		<script>
			var product_watcher = {
				product: {
					id: <?php _e( $product->get_id() ); ?>
				},
                pluginUrl: '<?php _e( PRODUCT_WATCHER_URL ); ?>'
			}
		</script>
		<br>
		<p id="product-watcher">
			<span>0</span>
			<span>Peoples</span> are viewing this right now
		</p>
		<?php
	}
}
