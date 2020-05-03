<?php

class Dokter_model extends CI_model{

	public function getAll(){
		return $this->db->get('dokter')->result_array();
	}

	public function getdokter($username){
		$this->db->where('username',$username);
		return $this->db->get('dokter')->result();
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

	public function validate_dokter($username_or_email,$password){
        	$this->db->where('email',$username_or_email);
        	$this->db->where('password',$password);
        	return $this->db->get('admin');
	}

	public function tampil_data_dokter(){
        return $this->db->get('dokter');
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	
	function hapus_pelanggan($id_pasien){
		$result=$this->db->query("DELETE FROM pelanggan WHERE id_pasien='$id_pasien'");
		return $result;
	}
}

?>