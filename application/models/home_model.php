<?php if (! defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class home_model extends CI_Model{
 	public function validate()
 	{
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
}
?>