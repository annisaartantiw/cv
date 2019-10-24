<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('auth');
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->auth->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/biodata/"));
 
		}else{
			echo "Email dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}