<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Newblog extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	function index()
	{
    	$this->load->view('newblog_view');
	}

	
	public function process()
	{
		$title   = $this->input->post('title');
		$content = $this->input->post('content');
 				
 		$this->form_validation->set_rules($title);
 		$this->form_validation->set_rules($content);

 		if ($this->form_validation->run() == TRUE)
 		{
 			$this->load->model('newblog_model');

 			$session_id = $this->session->userdata('user_id');

			$result= $this->newblog_model->validate($title,$content,$session_id);

			if(!$result){
				$this->index();
			}
			else {
				$this->load->view(site_url('home_model'));

			}
 		}		
 		else
 		{
 			$this->load->view('newblog_view');
 		}
	}	
}
?>