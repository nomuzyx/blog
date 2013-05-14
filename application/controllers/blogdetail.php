<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blogdetail extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('string');
	}

	function index()
	{	

		$data = array();
		$bid = $this->input->get('t');

 		$this->load->model('blogdetail_model');

		$data['userpost'] = $this->blogdetail_model->validate($bid);
		$data['comments'] = $this->blogdetail_model->retrievecomments($bid);

		if ($data['userpost'] != NUll)
		{
			$this->load->view('blogdetail_view',$data);
		}
		else
		{
			redirect(site_url('home'));
		}
 		
	}

	public function process()
	{
		$postid  = $this->input->post('postid');
		$name    = $this->input->post('name');
		$email   = $this->input->post('email');
 		$comment = $this->input->post('comment');

 		$this->form_validation->set_rules($postid);
 		$this->form_validation->set_rules($name);
 		$this->form_validation->set_rules($email);
 		$this->form_validation->set_rules($comment);

 		if ($this->form_validation->run() == TRUE)
 		{
 			$this->load->model('blogdetail_model');
 	//		$session_id = $this->session->userdata('user_id');
			$result= $this->blogdetail_model->insertcomment($postid,$name,$email,$comment);

			if(!$result){
				$this->index();
			}
			else {
				redirect(site_url('home'));
			}
 		}		
 		else
 		{
 			$this->load->view('blogdetail_view');
 		}
	}	
}
?>