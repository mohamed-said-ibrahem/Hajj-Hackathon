<?php

class Global_model extends CI_Model {

	
	
	function get_user_data_by_id($id){
		$q =  $this->db->get_where('users', array('id' => $id));
		if($q->num_rows() > 0) {
			$row = $q->row();
			return $row; 
		}else{
			return false;	
		}
	}
	



}

?>