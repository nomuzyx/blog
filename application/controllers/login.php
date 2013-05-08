<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct(){
		parent:: __construct();
		 $this->load->library('session');
		 $this->load->library('form_validation');
	}

	function index()
	{
    	$this->load->view('login_view');
	}

	public function process()
	{
		$username = $this->input->post('username');
 		$password = $this->input->post('password');


 		$valid = array(
               array(
                     'field'   => 'username', 
                     'label'   => 'Username', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password', 
                     'label'   => 'Password', 
                     'rules'   => 'required'
                  )
            );

 		$this->form_validation->set_rules($valid);

 		if ($this->form_validation->run() == TRUE)
 		{
 			$this->load->model('login_model');
			$result= $this->login_model->validate($username,$password);

			$this->session->set_userdata($result);

			if(isset($result)){
				redirect('home');
			}
			else {
				$this->load->view('login_view');
			}
 		}		
 		else
 		{
 			$this->load->view('login_view');
 		}
	}	

}
?>