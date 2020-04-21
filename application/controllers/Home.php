<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
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

	public function viewRegister(){
		$data['title'] = 'Registrasi';
		$this->load->view('templates/header', $data);
		$this->load->view('home/register');
		$this->load->view('templates/footer');	
	}

	public function viewMember(){
		$data['title'] = 'Welcome';
		$this->load->view('templates/header', $data);
		$this->load->view('home/memberview');
		$this->load->view('templates/footer');
	}
	public function viewprofile(){

		$this->load->model('User_model');
		$data['title'] = 'Akun Saya';
		$data['user']=$this->User_model->getuser($this->session->userdata('username_or_email'));
		$this->load->view('templates/header', $data);
		$this->load->view('home/profile');
		$this->load->view('templates/footer');
	}

	public function viewprofile_detail(){
		$this->load->model('User_model');
		$data['title'] = 'My Account - Polygon Bikes';
		$data['user']=$this->User_model->getuser($this->session->userdata('username_or_email'));
		$this->load->view('templates/header', $data);
		$this->load->view('home/profile-detail',$data);
		$this->load->view('templates/footer');
	}
	public function updateprofile(){
		$this->load->model('User_model');
		$data=$this->User_model->getuser($this->session->userdata('username_or_email'));
		foreach ($data as $key) {
			$pass=$key->password;
		}
		$content = array(
			'email'=>$this->input->post('email'),
			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'username'=>$this->input->post('displayname'),
			'password'=>$pass
		);
		if($this->input->post('curpass')!='' ){
			if($this->input->post('curpass')==$pass){
				if($this->input->post('newpass')!='' && $this->input->post('newpass')==$this->input->post('confirmnewpass')){
					$content['password']=$this->input->post('newpass');
					$this->User_model->update($content);
					echo "<script type='text/javascript'> alert('Success update profile') </script>";
					$this->viewprofile_detail();
				}else echo "<script type='text/javascript'> alert('password baru tidak valid') </script>";

			}else echo "<script type='text/javascript'> alert('password salah') </script>";

		}else{
			$this->User_model->update($content);
			echo "<script type='text/javascript'> alert('Success update profile') </script>";
			$this->viewprofile_detail();
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
			redirect(base_url());
		}else if($this->User_model->validate($this->input->post('username_or_email'), $this->input->post('password')) == TRUE){
			$data = $cek->row();

			//$this->session->set_userdata('username_or_email', $this->input->post('username_or_email'));
			$datauser = array (
				'id_user' => $data->id_user,
				'email' => $data->email,
				'username' => $data->username,
				'nama' => $data->nama,
				'alamat' => $data->alamat,
				'nomor_telpon' => $data->nomor_telpon
			);

			$this->session->set_userdata($datauser);
			$this->viewMember();
		}else{
			$this->viewlogin();
		}
		
	}

	public function register(){

		$this->form_validation->set_rules('email', 'email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('nomor_telpon', 'nomor_telpon', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url());
		}else{
			$data = [
				"email" =>$this->input->post('email', TRUE),
				"password" =>$this->input->post('password', TRUE),
				"nomor_telpon" =>$this->input->post('nomor_telpon', TRUE),
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
	

}

?>