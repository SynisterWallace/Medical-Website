<?php

class Admin_model extends CI_model{

	public function getAll(){
		return $this->db->get('admin')->result_array();
	}

	public function getadmin($username){
		$this->db->where('username',$username);
		return $this->db->get('admin')->result();
	}

	public function validate($username_or_email, $password){
		$valid = FALSE;

		foreach ($this->getAll() as $admin) {
			if((strcmp($admin['username'], $username_or_email) == 0 || strcmp($admin['email'], $username_or_email) == 0) && strcmp($admin['password'], $password) == 0){
				$valid = TRUE;
				break;
			}
		}

		return $valid;
	}
}

?>