<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller
{
	function __construct(){
		parent::__construct();
		 $this->load->library('form_validation');
		 
	}

	function index()
	{
    	$this->load->view('register_view');
	}

	public function username_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('username_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function process()
	{
		$email    = $this->input->post('email');
		$username = $this->input->post('username');
 		$password = $this->input->post('password');
 		$retype   = $this->input->post('retype');

 		
 		$config = array(
 			   array(
                     'field'   => 'email', 
                     'label'   => 'Email', 
                     'rules'   => 'required|valid_email|is_unique[users.email]'
                  ),
               array(
                     'field'   => 'username', 
                     'label'   => 'Username', 
                     'rules'   => 'required|min_lenght[5]|max_lenght[12]|is_unique[users.username]|callback_username_check'
                  ),
               array(
                     'field'   => 'password', 
                     'label'   => 'Password', 
                     'rules'   => 'required|matches[retype]|min_lenght[6]'
                  ),
               array(
                     'field'   => 'retype', 
                     'label'   => 'Retype Password', 
                     'rules'   => 'required'
                  )
            );

 		
 		$this->form_validation->set_rules($config);

 		if ($this->form_validation->run() == TRUE)
 		{
 			$this->load->model('register_model');
 			
			$result= $this->register_model->validate($email,$username,$password);
			if(!$result){
				$this->index();
			}
			else {
				$this->load->view('login_view');
			}
 		}		
 		else
 		{
 			$this->load->view('register_view');
 		}
	}	
}
?>