<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class Register_model extends CI_Model{
 	public function validate()
 	{
 		$email    = $this->input->post('email');
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');
 		$retype   = $this->input->post('retype');

 		if ($password != $retype)
		{
			return false;
		}

		if (strlen($password) < 6)
		{
			return false;
		}


 		$this->load->database();
 	//	$query = $this -> db
    //        -> select('username','password')
    //    	  -> where('username', $username)
    //    	  -> where('password', $password)
    //   	  -> limit(1)
    //  	  -> get('users');

 		$data = array('email' => $email,'username' => $username,'password' => $password);

 		$query = $this->db->insert('users',$data);

 		return ($this->db->affected_rows() != 1) ? false : true;	

 	}
}
?>