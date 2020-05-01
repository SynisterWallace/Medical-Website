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

	public function validate_admin($username_or_email,$password){
        	$this->db->where('email',$username_or_email);
        	$this->db->where('password',$password);
        	return $this->db->get('admin');
	}

	public function tampil_data_pelanggan(){
        return $this->db->get('pelanggan');
	}

	public function tampil_data_pembayaran(){
        return $this->db->get('pembayaran');
	}

	public function tampil_data_service(){
		return $this->db->get('service');
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_service($id_service){
		$result=$this->db->query("DELETE FROM service WHERE id_service='$id_service'");
		return $result;
	}

	public function delete_all_service(){
		$result=$this->db->query("DELETE FROM 'service'");
        	return $result;
	}
	
}

?>