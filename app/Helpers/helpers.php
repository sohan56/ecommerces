<?php

if ( ! function_exists('_lang')){
	function _lang($string = ''){
		
		//Get Target language
		$target_lang = get_option('language');
		
		if($target_lang == ""){
			$target_lang = "language";
		}
		
		if(file_exists(resource_path() . "/_lang/$target_lang.php")){
			include(resource_path() . "/_lang/$target_lang.php"); 
		}else{
			include(resource_path() . "/_lang/language.php"); 
		}
		
		if (array_key_exists($string, $language)){
			return $language[$string];
		}else{
			return $string;
		}
	}
}

if ( ! function_exists('get_row')){
	function get_row($table, $where = null , $order = 'ASC') 
	{
		if($where != null){
			$row = DB::table($table)->where($where)->orderBy('id', $order)->first();
		}else{
			$row = DB::table($table)->orderBy('id', $order)->first();
		}
		return $row;
	}
}

if ( ! function_exists('get_table')){
	function get_table($table, $where = null , $order = 'DESC') 
	{
		if($where != null){
			$results = DB::table($table)->where($where)->orderBy('id', $order)->get();
		}else{
			$results = DB::table($table)->orderBy('id', $order)->get();
		}
		return $results;
	}
}

if ( ! function_exists('get_option')){
	function get_option($name, $optional = '') 
	{
		$setting = DB::table('settings')->where('name', $name)->get();
		if ( ! $setting->isEmpty() ) {
			return $setting[0]->value;
		}
		return $optional;

	}
}


if( !function_exists('load_language') ){
	function load_language($active=''){
		$path = resource_path() . "/_lang";
		$files = scandir($path);
		$options = "";
		
		foreach($files as $file){
			$name = pathinfo($file, PATHINFO_FILENAME);
			if($name == "." || $name == "" || $name == "language"){
				continue;
			}
			
			$selected = "";
			if($active == $name){
				$selected = "selected";
			}else{
				$selected = "";
			}
			
			$options .= "<option value='$name' $selected>".ucwords($name)."</option>";

		}
		echo $options;
	}
}

if( !function_exists('get_language_list') ){
	function get_language_list(){
		$path = resource_path() . "/_lang";
		$files = scandir($path);
		$array = array();

		$default = get_option('language');
		$array[] = $default;
		
		foreach($files as $file){
			$name = pathinfo($file, PATHINFO_FILENAME);
			if($name == "." || $name == "" || $name == "language" || $name == $default){
				continue;
			}

			$array[] = $name;

		}
		return $array;
	}
}

