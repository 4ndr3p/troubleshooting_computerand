<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('m_data');
	}
	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) {
			//redirect('admin');
			$data['datauser']=$this->m_login->get_datalogin($this->session->userdata('username'));
			$data['jumlah_permasalahan']= $this->m_login->get_jumlahdata('permasalahan');
			$data['jumlah_artikel']= $this->m_login->get_jumlahdata('blog');
			$data['jumlah_komentar']= $this->m_login->get_jumlahdata('comment');
			$data['jumlah_kategori']= $this->m_login->get_jumlahdata('kategori');
			$data['jumlah_P1']= $this->m_login->get_jumlahdata('p1');
			$data['jumlah_P2']= $this->m_login->get_jumlahdata('p2');
			$data['jumlah_P3']= $this->m_login->get_jumlahdata('p3');
			$data['jumlah_P4']= $this->m_login->get_jumlahdata('p4');
			$data['jumlah_P5']= $this->m_login->get_jumlahdata('p5');
			$data['jumlah_P6']= $this->m_login->get_jumlahdata('p6');
			$data['jumlah_P7']= $this->m_login->get_jumlahdata('p7');
			$data['jumlah_P8']= $this->m_login->get_jumlahdata('p8');
			$data['jumlah_P9']= $this->m_login->get_jumlahdata('p9');
			$data['jumlah_P10']= $this->m_login->get_jumlahdata('p10');
			$data['jumlah_P11']= $this->m_login->get_jumlahdata('p11');
			$data['jumlah_P12']= $this->m_login->get_jumlahdata('p12');
			$data['jumlah_P13']= $this->m_login->get_jumlahdata('p13');
			$data['jumlah_P14']= $this->m_login->get_jumlahdata('p14');
			$data['jumlah_P15']= $this->m_login->get_jumlahdata('p15');
			$data['jumlah_P16']= $this->m_login->get_jumlahdata('p16');
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('admin/index','admin/dashboard',$data);
			//$this->template->load('admin/index','admin/header');
		}else{
			redirect('login');
		}

		//$data['about']=$this->m_about->GetAbout();
		//$this->load->view('admin/index');
	}
}
