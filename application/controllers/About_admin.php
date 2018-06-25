<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_admin extends CI_Controller {

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
		$data['about'] = $this->m_data->getSemua('about');
		$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
		$this->template->load('admin/index','admin/about',$data);
	}

	public function save(){
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','Isi','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
	        $upload = $this->m_data->upload_photo();
	        $data = array('judul'=>$this->input->post('judul'),
	                      'isi'=>$this->input->post('isi'),
	                      'photo' => $upload['file']['file_name'],
	                      'tanggal'=>date('Y-m-d h:m:s'));
			if($this->m_data->tambah('about', $data)) {
				$this->session->set_flashdata('response','Data berhasil disimpan');	
			} else {
				$this->session->set_flashdata('response','Data gagal disimpan');
			}
			return redirect('admin/index','admin/about');
		} else {
			$data['user'] =$this->m_data->getSemua('user');
			$this->template->load('admin/index','admin/about',$data);
		}
	}

	public function delete($key_id){
		if ($this->session->userdata('isLogin')==TRUE) {
			$variabel = array('id'=>$key_id);
			$photo = $this->m_data->getN('about',$variabel);
			$this->load->helper('file');
			delete_files('assets/photo/'.$photo->photo);
			if($this->m_data->hapus('about', $variabel)) {
				$this->session->set_flashdata('response','Data berhasil dihapus');
			} else {
				$this->session->set_flashdata('response','Data gagal dihapus');
			}
			return redirect('admin/index','admin/about');
			//$this->template->load('admin/index','admin/footer');
		}else{
			redirect('login');
		}
	}
}
