<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class Register_model extends CI_Model{
 	public function validate($title,$content,$userid)
 	{	
 		$created = now();
 				
 		$data = array('title' => $title,'content' => $content,'created' => $created,'modified' => $created,'userid' => $userid);

 		$query = $this->db->insert('post',$data);

 		return ($this->db->affected_rows() != 1) ? false : true;	

 	}
}
?>