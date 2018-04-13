<?php
/**
 * Common Template - tpl_box_default_left.php
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_box_panel.php 2975 2006-02-05 19:33:51Z birdbrain $
 */

// choose box images based on box position
$box_id=zen_get_box_id($title);
if ($title_link) {
    $title = '<a href="' . zen_href_link($title_link) . '">' . $title . BOX_HEADING_LINKS . '</a>';
  }
?>
<!--// bof: <?php echo $box_id; ?> //-->
<div class="panel panel-default" id="<?php echo str_replace('_', '-', $box_id ); ?>">
	<div class="panel-heading">
		<h3 class="panel-title" id="<?php echo str_replace('_', '-', $box_id) . 'Heading'; ?>">
			<?php echo $title; ?>
		</h3>
	</div>
	<div class="panel-body">
		<?php echo $content; ?>
	</div>
</div>
<!--// eof: <?php echo $box_id; ?> //-->
