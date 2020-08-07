<?php
/**
 * @author      lingcarzy <lingcarzy@gmail.com>
 * @license     https://github.com/lingcarzy/basic-bootstrap-for-zencart/blob/master/LICENSE
 *
 * ZC BootStrap Template Default
 */
function basic_element($name = 'div',$parm = array(),$val = ""){
	$tag = "<".$name." ";
	foreach ($parm as $key => $value){
		$tag .= $key.'="'.$value.'" ';
	}
	if(empty($val)) {
		$tag.='/>';
	}	else {
		$tag.='>'.$val.'</'.$name.'>';
	}
	return $tag;
}
