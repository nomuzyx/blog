<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class blogdetail_model extends CI_Model{
 	public function validate($bid)
 	{
 		
 		$this->db->where("id", $bid);

		$query = $this->db->get('post');

 		if($query->num_rows() > 0)
 		{
 			$data = array();
        	foreach($query->result_array() as $row) 
        	{
           		$data[]=$row;
        	}
        	return $data;	
 		}
 		
 	}
 	public function retrievecomments($bid)
 	{
 		
 		$this->db->where("post_id", $bid);

		$query = $this->db->get('comments');

 		if($query->num_rows() > 0)
 		{
 			$data = array();
        	foreach($query->result_array() as $row) 
        	{
           		$data[]=$row;
        	}
        	return $data;	
 		}
 		
 	}
 	public function insertcomment($postid,$name,$email,$comment)
 	{	
 		$this->load->helper('string');

 		$created = date('Y-m-d');

 		$data = array('name' => $name,'email' => $email,'comment' => $comment,'post_id' => $postid,'created' => $created);

 		$query = $this->db->insert('comments',$data);

 		return ($this->db->affected_rows() != 1) ? false : true;	

 	}

}

?>