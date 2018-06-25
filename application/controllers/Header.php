<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller {

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
		$this->load->model('m_data');
	}
	
	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) {
			$data['header'] =$this->m_data->getSemua('header');
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('admin/index','admin/header',$data);
			//$this->template->load('admin/index','admin/footer');
		}else{
			redirect('login');
		}

	}

	public function save(){
		$this->form_validation->set_rules('judul1','Judul1','required');
		$this->form_validation->set_rules('deskripsi1','Deskripsi1','required');
		$this->form_validation->set_rules('judul2','Judul2','required');
		$this->form_validation->set_rules('deskripsi2','Deskripsi2','required');
		$this->form_validation->set_rules('judul3','Judul3','required');
		$this->form_validation->set_rules('deskripsi3','Deskripsi3','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
			//$data = $this->input->post();
	        $upload1 = $this->m_data->upload_file1();
	        $upload2 = $this->m_data->upload_file2();
	        $upload3 = $this->m_data->upload_file3();
	        $data = array('judul1'=>$this->input->post('judul1'),
	                      'deskripsi1'=>$this->input->post('deskripsi1'),
	                  	  'file1' => $upload1['file']['file_name'],
						  'judul2'=>$this->input->post('judul2'),
	                      'deskripsi2'=>$this->input->post('deskripsi2'),
	                  	  'file2' => $upload2['file']['file_name'],
						  'judul3'=>$this->input->post('judul3'),
	                      'deskripsi3'=>$this->input->post('deskripsi3'),
	                  	  'file3' => $upload3['file']['file_name'],);
			if($this->m_data->tambah('header', $data)) {
				$this->session->set_flashdata('response','Data berhasil disimpan');
			} else {
				$this->session->set_flashdata('response','Data gagal disimpan');
			}
			return redirect('admin/index','admin/header');
		} else {
			$data['user'] =$this->m_data->getSemua('user');
			$this->template->load('admin/index','admin/header',$data);
		}
	}

	public function delete($key_id){
		if ($this->session->userdata('isLogin')==TRUE) {
			$variabel = array('id'=>$key_id);
			$file1 = $this->m_data->getN('header',$variabel);
			$this->load->helper('file');
			delete_files('assets/files/'.$gambar->file1);
			$file2 = $this->m_data->getN('header',$variabel);
			$this->load->helper('file');
			delete_files('assets/files/'.$gambar->file2);
			$file3 = $this->m_data->getN('header',$variabel);
			$this->load->helper('file');
			delete_files('assets/files/'.$gambar->file3);
			if($this->m_data->hapus('header', $variabel)) {
				$this->session->set_flashdata('response','Data berhasil dihapus');
			} else {
				$this->session->set_flashdata('response','Data gagal dihapus');
			}
			return redirect('admin/index','admin/header');
			//$this->template->load('admin/index','admin/footer');
		}else{
			redirect('login');
		}
	}
}