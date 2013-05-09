<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class Newblog_model extends CI_Model{
 	public function validate($title,$content,$session_id)
 	{	
 		$created = date('d-m-Y H:i:s');
 				
 		$data = array('slug' => $title,'title' => $title,'content' => $content,'created' => $created,'modified' => $created,'user_id' => $session_id);

 		$query = $this->db->insert('post',$data);

 		return ($this->db->affected_rows() != 1) ? false : true;	

 	}
}
?>