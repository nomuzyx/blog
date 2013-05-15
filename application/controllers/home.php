<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	function index()
	{	
		$data = array();
 		$this->load->model('home_model');

		$data['userpost']= $this->home_model->validate();

		$data['session_id'] = $this->session->userdata('user_id');
		$data['session_user'] = $this->session->userdata('username');

 		$this->load->view('home_view',$data);
	}
}
?>