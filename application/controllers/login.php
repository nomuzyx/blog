<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct(){
		parent:: __construct();

	}

	function index($msg = '')
	{
		
		$data['msg'] = $msg; 
    	$this->load->view('login_view', $data);
	}

	public function process()
	{
		$this->load->model('login_model');

		$result= $this->login_model->validate();

		if(!$result){
			$msg = '<font color=red> Invalid Username and/or password.<font>';
			$this->index($msg);
		}
		else{
			$this->load->helper('url');
			redirect('home');
		}
	}	

}
?>