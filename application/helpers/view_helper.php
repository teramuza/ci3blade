<?php

use Jenssegers\Blade\Blade;

if(!function_exists('view')){
	function view($view, $data = []){
		$path = VIEWPATH;
		$blade = new Blade($path, APPPATH.'/cache');

		echo $blade->make($view, $data);
	}
}