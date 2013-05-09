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
          $user_session = array(
                          'user_id' => $row->id,
                          'username' => $row->username
                          );                          
                  }  

 	//	$this->db->where('username',$username);
    //	$this->db->where('password',$password);
    //	$query = $this->db->get('users');

 		if($query->num_rows() == 1)
 		{
 			return $user_session;
 		}
// 		return false;

 	}
}
?>