<?php
/**
 * Common Template - tpl_columnar_display.php
 *
 * This file is used for generating tabular output where needed, based on the supplied array of table-cell contents.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Feb 15 13:59:01 2016 -0500 Modified in v1.5.5 $
 */

$zco_notifier->notify('NOTIFY_TPL_COLUMNAR_DISPLAY_START', $current_page_base, $list_box_contents, $title);

echo ($title)?$title:'';

if (is_array($list_box_contents) > 0 ) {
  $row=0;
  foreach ($list_box_contents as $list_box_row) {
    echo "<div class='row'>";
    foreach ($list_box_row as $list_item) {
      echo "<div ".$list_item['params'].">".$list_item['text']."</div>"."\n";
    }
    echo "</div>";
  }
}
$zco_notifier->notify('NOTIFY_TPL_COLUMNAR_DISPLAY_END', $current_page_base, $list_box_contents, $title);