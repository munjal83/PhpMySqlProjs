<?php
/*
 *URL Format
 */
function urlFormat($str){
	
	$str = preg_replace('/\s*/','',$str);
	
	$str =  strtolower($str);
	
	$str = urlencode($str);
	
	return $str;

}

function is_active($category){
	if(isset($_GET['category'])){
		if($_GET['category'] == $category){
			return 'active';
		}else{
			return '';
		}
	}else{
		if($category == null){
			return 'active';
		}
	}	
}
/*
 *Date Format
 */
 
 function formatDate($date){
	
	$date = date("F j, Y, g:i a",strtotime($date));
	return $date; 
 }
?>