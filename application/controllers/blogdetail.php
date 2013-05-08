<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blogdetail extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	function index()
	{	
		$data = array();
 		$this->load->model('blogdetail_model');
		$data['userpost']= $this->blogdetail_model->validate();
 		$this->load->view('blogdetail_view',$data);
	}
}
?>