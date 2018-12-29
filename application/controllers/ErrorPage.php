<?php defined('BASEPATH') OR exit('No direct script access allowed');

//Error Class

class ErrorPage extends CI_Controller {
	
	public function __construct() {
    	parent::__construct(); 
	} 

	public function e404(){ 
	    $this->output->set_status_header('404'); 
	    $data['time'] = date("H", strtotime(date('h a')));
	    $data['title'] = "Page Not Found";
	    $data['code'] = "404";
	    $data['message'] = "Are you lost? the page you are looking for could not be found.";
	    return view('errors/errors', $data);//loading in custom error view
 	} 

 	public function e403(){ 
	    $this->output->set_status_header('403'); 
	    $data['time'] = date("H", strtotime(date('h a')));
	    $data['title'] = "Access Forbidden";
	    $data['code'] = "403";
	    $data['message'] = "Sorry, you are forbidden to access this page.";
	    return view('errors/errors', $data);//loading in custom error view
 	} 
}