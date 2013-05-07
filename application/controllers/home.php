<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	function index()
	{	
		$data = array();
 		$this->load->model('home_model');
		$data['userpost']= $this->home_model->validate();
 		$this->load->view('home_view',$data);
	}
}
?>