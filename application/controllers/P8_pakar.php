<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P8_pakar extends CI_Controller {

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
		$this->load->library('pagination');
		$this->load->model('m_data');
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) {
	        $config['base_url'] = site_url('P8_pakar/index');
	        $config['total_rows'] = $this->db->count_all('p8');
	        $config['per_page'] = 5;
	        $config["uri_segment"] = 3;
	        $choice = $config["total_rows"] / $config["per_page"];
	        $config["num_links"] = floor($choice);
	 
	        $config['full_tag_open']    = '<div class="pagination"><nav><ul class="pagination justify-content-center">';
	        $config['full_tag_close']   = '</ul></nav></div>';

	      	$config['first_link']       = 'First';
	        $config['first_tag_open']   = '<li class="sr-only"><span class="page-link">';
	        $config['first_tagl_close'] = '</span></li>';

	        $config['last_link']        = 'Last';
	        $config['last_tag_open']    = '<li class="sr-only"><span class="page-link">';
	        $config['last_tagl_close']  = '</span></li>';

	        $config['next_link']        = 'Next';
	        $config['next_tag_open']    = '<li class="paginate_button page-item next"><span class="page-link">';
	        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';

	        $config['prev_link']        = 'Prev';
	        $config['prev_tag_open']    = '<li class="paginate_button page-item previous"><span class="page-link">';
	        $config['prev_tagl_close']  = '</span>Next</li>';

	        $config['num_tag_open']     = '<li class="paginate_button page-item"><span class="page-link">';
	        $config['num_tag_close']    = '</span></li>';

	        $config['cur_tag_open']     = '<li class="paginate_button page-item active"><span class="page-link">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	 
	        $this->pagination->initialize($config);
	        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	 
	        $data['P8'] = $this->m_data->get_data_list('p8', $config["per_page"], $data['page']);           
	 
	        $data['pagination'] = $this->pagination->create_links();
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('pakar/index','pakar/P8_pakar',$data);
			//$this->template->load('pakar/index','pakar/footer');
		}else{
			redirect('login');
		}
	}

	public function create_P8(){
		if ($this->session->userdata('isLogin')==TRUE) {
			$id = $this->input->post('id');
			$id_permasalahan = $id;
			$data['permasalahan_select_id'] = $this->m_data->cari_permasalahan_id($id_permasalahan);
			$data['permasalahan_select'] = $this->m_data->getSemua('permasalahan');
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('pakar/index','pakar/create_P8',$data);
			//$this->template->load('pakar/index','pakar/footer');
		}else{
			redirect('login');
		}
	}

	public function proses(){
		if ($this->session->userdata('isLogin')==TRUE) {
			$id = $this->input->post('id');
			$id_permasalahan = $id;
			$data['permasalahan_select_id'] = $this->m_data->cari_permasalahan_id($id_permasalahan);
			$data['konten_select_id'] = $this->m_data->cari_pertanyaan_P8($id_permasalahan);
			$data['kode_select_id'] = $this->input->post('id');
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('pakar/index','pakar/create_P8',$data);
			//$this->template->load('pakar/index','pakar/footer');
		}else{
			redirect('login');
		}
	}

	public function proses_pertanyaan(){
		if ($this->session->userdata('isLogin')==TRUE) {
			$id = $this->input->post('id');
			$id_permasalahan = $id;
			$data['permasalahan_select_id'] = $this->m_data->cari_permasalahan_id($id_permasalahan);
			$data['konten_select_id'] = $this->m_data->cari_pertanyaan_P8($id_permasalahan);
			$data['kode_select_id'] = $this->input->post('id_konten');
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('pakar/index','pakar/create_P8',$data);
			//$this->template->load('pakar/index','pakar/footer');
		}else{
			redirect('login');
		}
	}

	public function save(){
		$this->form_validation->set_rules('tipe','Tipe','required');
		$this->form_validation->set_rules('jawaban','Jawaban','required');
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('detail','Detail','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
			$kode1 = $this->input->post('id_kode');
			$kode2 = $this->input->post('jawaban');
			$kode = $kode1.$kode2;
	        $data = array('id_masalah'=>$this->input->post('id'),
	        			  'kode'=>$kode,
	                      'tipe'=>$this->input->post('tipe'),
	                  	  'jawaban'=>$this->input->post('jawaban'),
	                  	  'konten'=>$this->input->post('konten'),	
	                  	  'detail'=>$this->input->post('detail'));
			if($this->m_data->tambah('p8', $data)) {
				$this->session->set_flashdata('response','Data berhasil disimpan');
			} else {
				$this->session->set_flashdata('response','Data gagal disimpan');
			}
			return redirect('pakar/index','pakar/create_P8');
		} else {
			$data['user'] =$this->m_data->getSemua('user');
			$this->template->load('pakar/index','pakar/create_P8',$data);
		}
	}

	public function edit($key_id){
		if ($this->session->userdata('isLogin')==TRUE) {
			$variabel = array('id'=>$key_id);
			$data['P8_id'] = $this->m_data->getN('p8',$variabel);
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('pakar/index','pakar/update_P8',$data);
			//$this->template->load('pakar/index','pakar/footer');
		}else{
			redirect('login');
		}
	}

	public function save_edit(){
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('detail','Detail','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
			//$data = $this->input->post();
			$key_id = $this->input->post('id');
			$variabel = array('id'=>$key_id);
	        $data = array('konten'=>$this->input->post('konten'),	
	                  	  'detail'=>$this->input->post('detail'),);
			if($this->m_data->update('p8', $variabel, $data)) {
				$this->session->set_flashdata('response','Data berhasil diubah');
			} else {
				$this->session->set_flashdata('response','Data gagal diubah');
			}
			return redirect('pakar/index','pakar/update_P8');
		} else {
			$data['user'] =$this->m_data->getSemua('user');
			$this->template->load('pakar/index','pakar/update_P8',$data);
		}
	}

}
