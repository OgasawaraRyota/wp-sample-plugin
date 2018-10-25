<?php
/**
 * Class Post Page
 *
 * @author Ryota Ogasawara
 * @version 1.0.0
 * @since   1.0.0
 */
class Sample_Plugin_post {
	/**
	 * Constructor
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	public function __construct() {
		$this->page_render();
	}

	/**
	 * Randaring Page
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	 private function page_render() {
		 $html  = '<div class="wrap">';
		 $html .= '<h1 class="wp-heading-inline">サンプル登録</h1>';
		 $html .= '</div>';

		 echo $html;
	 }

}
