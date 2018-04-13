<?php
/**
 * column module
 *
 * @package templateStructure
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: column.php 4274 2017-07-06 03:16:53Z lingcarzy $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}
// Check if there are boxes for the column
$column_left_display= $db->Execute("select layout_box_name from " . TABLE_LAYOUT_BOXES . " where layout_box_location = 0 and layout_box_status= '1' and layout_template ='" . $template_dir . "'" . ' order by layout_box_sort_order');
$column_right_display= $db->Execute("select layout_box_name from " . TABLE_LAYOUT_BOXES . " where layout_box_location=1 and layout_box_status=1 and layout_template ='" . $template_dir . "'" . ' order by layout_box_sort_order');

$single_boxes_display= $db->Execute("select layout_box_name from " . TABLE_LAYOUT_BOXES . " where layout_box_status_single=1 and layout_template ='" . $template_dir . "'");

$columns_left = array();
$columns_right = array();
$single_boxes = array();
while (!$column_left_display->EOF) {
	$left_box_name=$column_left_display->fields['layout_box_name'];
	if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $left_box_name) 
    or file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $left_box_name) ) {
		if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $left_box_name)) {
			array_push($columns_left,DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $left_box_name);
		} else {
			array_push($columns_left,DIR_WS_MODULES . 'sideboxes/' . $left_box_name);
		}
	} // file_exists
	$column_left_display->MoveNext();
} // while column_left

while (!$column_right_display->EOF) {
	$right_box_name=$column_right_display->fields['layout_box_name'];
	if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $right_box_name) 
    or file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $right_box_name) ) {
		if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $right_box_name)) {
			array_push($columns_right,DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $right_box_name);
		} else {
			array_push($columns_right,DIR_WS_MODULES . 'sideboxes/' . $right_box_name);
		}
	} // file_exists
	$column_right_display->MoveNext();
} // while column_right

while (!$single_boxes_display->EOF) {
	$single_box_name=$single_boxes_display->fields['layout_box_name'];
	if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $single_box_name) 
    or file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $single_box_name) ) {
		array_push($single_boxes['name'],$single_box_name);
		if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $single_box_name)) {
			array_push($single_boxes['file'],DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $single_box_name);
		} else {
			array_push($single_boxes['file'],DIR_WS_MODULES . 'sideboxes/' . $single_box_name);
		}
	} // file_exists
	$single_boxes_display->MoveNext();
} // while column_right

?>