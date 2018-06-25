<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *	
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	public function index()
	{
		//$data['about']=$this->m_about->GetAbout();
		//$this->template->load('admin/index','admin/dashboard');
		if ($this->session->userdata('isLogin')==TRUE) {
			redirect('admin');
		}else{
			$this->load->view('login');
		}
	}

	function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->m_login->cek_user($username,$password);
		if(count($cek) == 1){
			$this->session->set_userdata(array(
												'isLogin' => TRUE, 
												'username' => $username,
												'id_group' => $id_group,
											));
			redirect('admin');
		}else{
			$this->session->set_flashdata('gagallogin','Maaf, username atau password yang anda masukkan salah');
			$this->load->view('login');
		}
	}
}
