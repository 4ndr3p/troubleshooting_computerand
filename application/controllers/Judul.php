<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Judul extends CI_Controller {

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
			$data['judul'] =$this->m_data->getSemua('judul');
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('admin/index','admin/judul',$data);
			//$this->template->load('admin/index','admin/footer');
		}else{
			redirect('login');
		}

	}

	public function save(){
		$this->form_validation->set_rules('sub_judul','Sub_judul','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
			//$data = $this->input->post();
	        $data = array('judul'=>$this->input->post('judul'),
	                      'sub_judul'=>$this->input->post('sub_judul'));
			if($this->m_data->tambah('judul', $data)) {
				$this->session->set_flashdata('response','Data berhasil disimpan');
			} else {
				$this->session->set_flashdata('response','Data gagal disimpan');
			}
			return redirect('admin/index','admin/judul');
		} else {
			$data['user'] =$this->m_data->getSemua('user');
			$this->template->load('admin/index','admin/judul',$data);
		}
	}

	public function delete($key_id){
		if ($this->session->userdata('isLogin')==TRUE) {
			$variabel = array('id'=>$key_id);
			if($this->m_data->hapus('judul', $variabel)) {
				$this->session->set_flashdata('response','Data berhasil dihapus');
			} else {
				$this->session->set_flashdata('response','Data gagal dihapus');
			}
			return redirect('admin/index','admin/judul');
			//$this->template->load('admin/index','admin/footer');
		}else{
			redirect('login');
		}
	}
}