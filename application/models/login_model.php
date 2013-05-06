<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class Login_model extends CI_Model{
 	public function validate()
 	{
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');

 		$this->load->database();
 	//	$query = $this -> db
     //      -> select('username','password')
      //     -> where('username', $username)
       //    -> where('password', $password)
        //   -> limit(1)
         //  -> get('users');

 		$this->db->where('username',$username);
 		$this->db->where('password',$password);
 		$query = $this->db->get('users');

 		if($query->num_rows == 1)
 		{
 		//	$row = $query->row();
 	//		$data = array('userid' => $row->userid;

 				//);
 			return true;	
 		}
 		return false;

 	}
}
?>