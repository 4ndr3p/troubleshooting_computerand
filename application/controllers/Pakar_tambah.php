<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakar_tambah extends CI_Controller {

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
		$data['pakar'] = $this->m_data->getSemua('pakar');
		$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
		$this->template->load('admin/index','admin/pakar',$data);
	}

	public function save(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('tentang','Tentang','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
	        $upload = $this->m_data->upload_photo();
	        $data = array('nama'=>$this->input->post('nama'),
	                      'username'=>$this->input->post('username'),
	                      'password'=>md5($this->input->post('password')),
	                      'tentang'=>$this->input->post('tentang'),
	                      'photo' => $upload['file']['file_name'],
	                      'tanggal'=>date('Y-m-d h:m:s'));
			if($this->m_data->tambah('pakar', $data)) {
				$this->session->set_flashdata('response','Data berhasil disimpan');	
			} else {
				$this->session->set_flashdata('response','Data gagal disimpan');
			}
			return redirect('admin/index','admin/pakar');
		} else {
			$data['user'] =$this->m_data->getSemua('user');
			$this->template->load('admin/index','admin/pakar',$data);
		}
	}

	public function delete($key_id){
		if ($this->session->userdata('isLogin')==TRUE) {
			$variabel = array('id'=>$key_id);
			$photo = $this->m_data->getN('pakar',$variabel);
			$this->load->helper('file');
			delete_files('assets/photo/'.$photo->photo);
			if($this->m_data->hapus('pakar', $variabel)) {
				$this->session->set_flashdata('response','Data berhasil dihapus');
			} else {
				$this->session->set_flashdata('response','Data gagal dihapus');
			}
			return redirect('admin/index','admin/pakar');
		}else{
			redirect('login');
		}
	}
}
