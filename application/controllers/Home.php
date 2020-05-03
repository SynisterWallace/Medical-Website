<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Admin_model');
		$this->load->model('Dokter_model');
		$this->load->helper('url');
	}

	public function index(){
		$data['title'] = 'Dental Care';
		$this->load->view('templates/header', $data);
		$this->load->view('home/home');
		$this->load->view('templates/footer');
	}

	public function viewlogin(){
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');	
	}

	public function adminlogin(){
		$data['title'] = 'Admin Login';
		$this->load->view('templates/header', $data);
		$this->load->view('home/adminlogin');
		$this->load->view('templates/footer');	
	}

	public function dokterlogin(){
		$data['title'] = 'Dokter Login';
		$this->load->view('templates/header', $data);
		$this->load->view('home/dokterlogin');
		$this->load->view('templates/footer');	
	}

	public function viewAdmin(){
		$data['service'] = $this->Admin_model->tampil_data_service()->result();
		$this->load->view('templates/header_admin');
		$this->load->view('home/dashboard_admin',$data);	
		$this->load->view('templates/footer_admin');
	}

	public function viewAdminPembayaran(){
		$data['pembayaran'] = $this->Admin_model->tampil_data_pembayaran()->result();
		$this->load->view('home/cek_pembayaran',$data);	
		$this->load->view('templates/footer_admin');
	}

	public function viewAdminCustomer(){
		$data['pelanggan'] = $this->Admin_model->tampil_data_pelanggan()->result();
		$this->load->view('home/cek_pelanggan',$data);	
		$this->load->view('templates/footer_admin');
	}

	public function viewService(){
		$data['service'] = $this->Admin_model->tampil_data_service()->result();
		$data['title'] = 'Servuce';
		$this->load->view('templates/headserv', $data);
		$this->load->view('home/service');
		$this->load->view('templates/footer');	
	}

	public function viewRegister(){
		$data['title'] = 'Registrasi';
		$this->load->view('templates/header', $data);
		$this->load->view('home/register');
		$this->load->view('templates/footer');	
	}

	public function viewMember(){
		$data['title'] = 'Welcome';
		$this->load->view('templates/headerMember', $data);
		$this->load->view('home/memberview');
		$this->load->view('templates/footer');
	}

	public function viewDokter(){
		$data['pembayaran'] = $this->Admin_model->tampil_data_pembayaran()->result();
		$data['dokter'] = $this->Dokter_model->tampil_data_dokter()->result();
		$data['title'] = 'View Dokter';
		$this->load->view('templates/headserv', $data);
		$this->load->view('home/doctorview');
		$this->load->view('templates/footer');
	}

	public function viewPembayaran(){
		$data['pembayaran'] = $this->Admin_model->tampil_data_pembayaran()->result();
		$data['title'] = 'View Pembayaran';
		$this->load->view('templates/headserv', $data);
		$this->load->view('home/pembayaran');
		$this->load->view('templates/footer');
	}

	public function viewprofile(){

		$this->load->model('User_model');
		$data['title'] = 'Akun Saya';
		$data['user']=$this->User_model->getuser($this->session->userdata('email'));
		$this->load->view('templates/headerMember', $data);
		$this->load->view('home/profile');
		$this->load->view('templates/footer');
	}

	#CRUD LOGIN REGIS

	public function updateprofile(){
		$this->load->model('User_model');
		$data=$this->User_model->getuser($this->session->userdata('username_or_email'));
		$pass = array();
		foreach ($data as $key) {
			$pass=$key->password;
		}
		$content = array(
			'email'=>$this->input->post('email'),
			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'username'=>$this->input->post('displayname'),
			'password'=>$pass,
			'no_telpon'=>$this->input->post('no_telpon')
		);
		
		if($this->input->post('curpass')!='' ){
				if($this->input->post('newpass')!='' && $this->input->post('newpass')==$this->input->post('confirmnewpass')){
					$content['password']=$this->input->post('newpass');
					$this->User_model->update($content);
					echo "<script type='text/javascript'> alert('Success update profile') </script>";
					$this->viewprofile();
				}else echo "<script type='text/javascript'> alert('password baru tidak valid') </script>";

		}else{
			$this->User_model->update($content);
			echo "<script type='text/javascript'> alert('Success update profile') </script>";
			$this->viewprofile();
		}
	
	}
	public function login(){

		$this->form_validation->set_rules('username_or_email', 'username_or_email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		$unoe = $this->input->post('username_or_email');
		$pass = $this->input->post('password');

		$this->db->from('user');
		$this->db->where(array('username' => $unoe));
		$this->db->or_where(array('email' => $unoe));
		$cek = $this->db->get();

		if($this->form_validation->run() == FALSE){
			redirect(base_url('Home/viewlogin'));
		}else if($this->User_model->validate($this->input->post('username_or_email'), $this->input->post('password')) == TRUE){
			$data = $cek->row();

			//$this->session->set_userdata('username_or_email', $this->input->post('username_or_email'));
			$datauser = array (
				'email' => $data->email,
				'firstname' => $data->firstname,
				'lastname' => $data->lastname,
				'username' => $data->username,
				'password' => $data->password,
			);
			$this->session->set_userdata($datauser);
			$this->viewMember();
		}else{
			$this->viewlogin();
		}
		
	}

	public function loginAdmin(){
		$this->form_validation->set_rules('username_or_email', 'username_or_email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		$unoe = $this->input->post('username_or_email');
		$pass = $this->input->post('password');
		
		$this->db->from('admin');
		$this->db->where(array('email' => $unoe));
		$cek = $this->db->get();

		if($this->form_validation->run() == FALSE){
			redirect(base_url('Home/adminlogin'));
		}else if($this->Admin_model->validate_admin($unoe, $pass)){
			$data = $cek->row();
			//$this->session->set_userdata('username_or_email', $this->input->post('username_or_email'));
			$this->viewAdmin();
		}else{
			$this->adminlogin();
		}
		
	}
	

	public function loginDokter(){
		$this->form_validation->set_rules('username_or_email', 'username_or_email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		$unoe = $this->input->post('username_or_email');
		$pass = $this->input->post('password');
		
		$this->db->from('dokter');
		$this->db->where(array('email' => $unoe));
		$cek = $this->db->get();

		if($this->form_validation->run() == FALSE){
			redirect(base_url('Home/dokterlogin'));
		}else if($this->Admin_model->validate_admin($unoe, $pass)){
			$data = $cek->row();
			//$this->session->set_userdata('username_or_email', $this->input->post('username_or_email'));
			$this->viewAdmin();
		}else{
			$this->dokterlogin();
		}
		
	}

	public function register(){

		$this->form_validation->set_rules('email', 'email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url());
		}else{
			$data = [
				"email" =>$this->input->post('email', TRUE),
				"password" =>$this->input->post('password', TRUE)
			];

			$this->User_model->insert($data);
			redirect(base_url().'Home/viewlogin');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'/Home/viewlogin');
	}
	public function deleteakun(){
		$email=$this->session->userdata('username_or_email');
		$this->User_model->delete($email);
		$this->session->sess_destroy();
		redirect(base_url().'/Home/viewlogin');
	}

	public function view_pelanggan(){
        $data['pelanggan'] = $this->Admin_model->tampil_data_pelanggan()->result();
        $this->load->view('/home/dasboard_admin',$data);
	}
	
	public function view_pembayaran(){
        $data['pembayaran'] = $this->Admin_model->tampil_data_pembayaran()->result();
        $this->load->view('/home/dashboard_admin',$data);
	}

	#CRUD SERVICE ADMIN
	
	public function aksi_add_service(){
		$id_service = $this->input->post('id_service');
		$nama_service = $this->input->post('nama_service');
		$nama_dokter = $this->input->post('nama_dokter');
		$nama_pasien = $this->input->post('nama_pasien');
		$ruangan = $this->input->post('ruangan');
		$jam_operasional = $this->input->post('jam_operasional');

		$data = array(
			'id_service' => $id_service,
			'nama_service' => $nama_service,
			'nama_dokter' => $nama_dokter,
			'nama_pasien' => $nama_pasien,
			'ruangan' => $ruangan,
			'jam_operasional' => $jam_operasional,
			);

		$this->Admin_model->input_data($data,'service');
		redirect('home/viewAdmin');
	}

	public function aksi_add_pembayaran(){
		$id_transaksi = $this->input->post('id_transaksi');
		$no_transaksi = $this->input->post('no_transaksi');
		$nama_pasien = $this->input->post('nama_pasien');
		$waktu = $this->input->post('waktu');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_transaksi' => $id_transaksi,
			'no_transaksi' => $no_transaksi,
			'nama_pasien' => $nama_pasien,
			'waktu' => $waktu,
			'keterangan' => $keterangan
			);

		$this->Admin_model->input_data($data,'pembayaran');
		redirect('home/viewAdminPembayaran');
	}

	public function aksi_add_pelanggan(){
		$id_pasien = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');

		$data = array(
			'id_pasien' => $id_pasien,
			'nama_pasien' => $nama_pasien,
			'alamat' => $alamat,
			'umur' => $umur
			);

		$this->Admin_model->input_data($data,'pelanggan');
		redirect('home/viewAdminCustomer');
	}

	public function update_service(){
		//Feature prediction
		$id_service = $this->input->post('id_service');
		$nama_service = $this->input->post('nama_service');
		$nama_dokter = $this->input->post('nama_dokter');
		$nama_pasien = $this->input->post('nama_pasien');
		$ruangan = $this->input->post('ruangan');
		$jam_operasional = $this->input->post('jam_operasional');
		
		$data = array(
			'id_service' => $id_service,
			'nama_service' => $nama_service,
			'nama_dokter' => $nama_dokter,
			'nama_pasien' => $nama_pasien,
			'ruangan' => $ruangan,
			'jam_operasional' => $jam_operasional,
		);
		$where = array(
			'id_service' => $id_service
		);
		$this->Admin_model->update_data($where,$data,'service');
		redirect('home/viewAdmin');
	}

	public function update_pembayaran(){
		//Feature prediction
		$id_transaksi = $this->input->post('id_transaksi');
		$no_transaksi = $this->input->post('no_transaksi');
		$nama_pasien = $this->input->post('nama_pasien');
		$waktu = $this->input->post('waktu');
		$keterangan = $this->input->post('keterangan');
		
		$data = array(
			'id_transaksi' => $id_transaksi,
			'no_transaksi' => $no_transaksi,
			'nama_pasien' => $nama_pasien,
			'waktu' => $waktu,
			'keterangan' => $keterangan
		);
		$where = array(
			'id_transaksi' => $id_transaksi
		);
		$this->Admin_model->update_data($where,$data,'pembayaran');
		redirect('home/viewAdminPembayaran');
	}

	public function update_pelanggan(){
		//Feature prediction

		
		$id_pasien = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		
		$data = array(
			'id_pasien' => $id_pasien,
			'nama_pasien' => $nama_pasien,
			'alamat' => $alamat,
			'umur' => $umur
		);
		$where = array(
			'id_pasien' => $id_pasien
		);
		$this->Admin_model->update_data($where,$data,'pelanggan');
		redirect('home/viewAdminCustomer');
	}

	public function hapus_service(){
		$id_service=$this->input->post('id_service');
		$this->Admin_model->hapus_service($id_service);
		redirect('home/viewAdmin');	
	}

	public function hapus_pembayaran(){
		$id_transaksi=$this->input->post('id_transaksi');
		$this->Admin_model->hapus_pembayaran($id_transaksi);
		redirect('home/viewAdminPembayaran');	
	}

	public function hapus_pelanggan(){
		$id_pasien=$this->input->post('id_pasien');
		$this->Admin_model->hapus_pelanggan($id_pasien);
		redirect('home/viewAdminCustomer');	
	}

	public function delete_all_service(){
		$this->Admin_model->delete_all_service();
		redirect('home/viewAdmin');
	}

	
}

?>