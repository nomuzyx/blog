<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	function index()
	{
		$this->load->helper('url');
    	$this->load->view('home_view');
	}

	public function process()
	{
		$this->load->model('home_model');

		$result= $this->home_model->validate();

		if(!$result){
			$this->index();
		}
		else{
			$this->load->helper('url');
		//	redirect('login');
		}
	}	

}
?>