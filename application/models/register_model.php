<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class Register_model extends CI_Model{
 	public function validate($email,$username,$password)
 	{
 		
 		$data = array('email' => $email,'username' => $username,'password' => $password);

 		$query = $this->db->insert('users',$data);

 		return ($this->db->affected_rows() != 1) ? false : true;	

 	}
}
?>