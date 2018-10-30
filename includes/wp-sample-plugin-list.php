<?php
/**
 * Class List Page
 *
 * @author Ryota Ogasawara
 * @version 1.0.0
 * @since   1.0.0
 */
class Sample_Plugin_List {
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
		 $html .= '<h1 class="wp-heading-inline">サンプル一覧</h1>';
		 $html .= '<a href="" class="page-title-action">新規追加</a>';

		 $html .= '<table>';
		 $html .= '<tr>';
		 $html .= '<th>画像</th>';
		 $html .= '<th>画像 Alt属性</th>';
		 $html .= '<th>表示方法</th>';
		 $html .= '<th>絞り込み</th>';
		 $html .= '</tr>';
		 $html .= '<tbody>';
		 $html .= '<td colspan="4">登録はありません</td>';
		 $html .= '</tbody>';
		 $html .= '</table>';

		 $html .= '</div>';

		 echo $html;
	 }

}
