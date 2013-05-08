<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class Login_model extends CI_Model{
 	public function validate($username,$password)
 	{
  		$query = $this -> db
           -> select('id','username','password')
           -> where('username', $username)
           -> where('password', $password)
           -> limit(1)
           -> get('users');

         foreach ($query->result() as $row) {
            $userid => $row->id;
        }  

 	//	$this->db->where('username',$username);
    //	$this->db->where('password',$password);
    //	$query = $this->db->get('users');

 		if($query->num_rows() == 1)
 		{
 			return $userid;	
 		}
 		//return false;

 	}
}
?>