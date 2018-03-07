<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Fri Feb 26 00:22:54 2016 -0500 Modified in v1.5.5 $
 */
  $content = "";
  $content .= zen_draw_form('quick_find_header', zen_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', $request_type, false), 'get');
  $content .= zen_draw_hidden_field('main_page',FILENAME_ADVANCED_SEARCH_RESULT);
  $content .= zen_draw_hidden_field('search_in_description', '1') . zen_hide_session_id();

  $content .= zen_draw_input_field('keyword', '', 'class="form-control" placeholder="' . HEADER_SEARCH_DEFAULT_TEXT . '"') . '<input class="form-control" type="submit"" value="' . HEADER_SEARCH_BUTTON . '" />';

  $content .= "</form>";
?>