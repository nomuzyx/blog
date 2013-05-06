<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller
{

	function index()
	{
		$this->load->helper('url');
    	$this->load->view('register_view');
	}

	public function process()
	{
		$this->load->model('register_model');

		$result= $this->register_model->validate();

		if(!$result){
			$this->index();
		}
		else{
			$this->load->helper('url');
			redirect('login');
		}
	}	

}
?>