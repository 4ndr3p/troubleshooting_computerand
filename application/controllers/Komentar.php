<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

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
	        $config['base_url'] = site_url('komentar/index');
	        $config['total_rows'] = $this->db->count_all('comment');
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
	 
	        $data['comment'] = $this->m_data->get_data_list('comment', $config["per_page"], $data['page']);           
	 
	        $data['pagination'] = $this->pagination->create_links();
			$data['menu_permasalahan'] = $this->m_data->getSemua('permasalahan');
			$this->template->load('admin/index','admin/komentar',$data);
			//$this->template->load('admin/index','admin/footer');
		}else{
			redirect('login');
		}

	}

	public function delete($key_id){
		if ($this->session->userdata('isLogin')==TRUE) {
			$variabel = array('id'=>$key_id);
			if($this->m_data->hapus('comment', $variabel)) {
				$this->session->set_flashdata('response','Data berhasil dihapus');
			} else {
				$this->session->set_flashdata('response','Data gagal dihapus');
			}
			return redirect('admin/index','admin/komentar');
			//$this->template->load('admin/index','admin/footer');
		}else{
			redirect('login');
		}
	}
}