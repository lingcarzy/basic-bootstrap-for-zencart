<!-- bof  breadcrumb -->
<?php if (DEFINE_BREADCRUMB_STATUS == '1' && (!$this_is_home_page) ) { ?>
	<ol id="navBreadCrumb" class="breadcrumb">
<?php
$navCrumbs=$breadcrumb->trail();
foreach ($navCrumbs as $nav) {?>
	<li><?php echo $nav;?></li>
<?php }?>
	</ol>
<?php } ?>
<!-- eof breadcrumb -->