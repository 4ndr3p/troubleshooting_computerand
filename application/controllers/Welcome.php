<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('m_blog');
		$this->load->model('m_data');
	}

	public function index()
	{
        $config['base_url'] = site_url('welcome/index');
        $config['total_rows'] = $this->db->count_all('blog');
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
 
        $data['blog'] = $this->m_data->get_data_list('blog', $config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
		//$data['blog']=$this->m_blog->GetBlog();
		$data['menu']=$this->m_blog->GetMenu();
		$data['kategori'] = $this->m_data->getSemua('kategori');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['header'] =$this->m_data->getSemua('header');
		$this->template->load('index','home',$data);
	}

	public function readmore ($key_id){
		$variabel = array('id'=>$key_id);
		$id_blog = $key_id;
		$data['comment_id'] = $this->m_data->GetComment($id_blog);
		$data['blog_id'] = $this->m_data->getN('blog',$variabel);
		$data['kategori'] = $this->m_data->getSemua('kategori');
		$data['header'] =$this->m_data->getSemua('header');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$this->template->load('index','readmore',$data);
	}

	public function save(){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('comment','Comment','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
			$id = $this->input->post('id');
	        $data = array('name'=>$this->input->post('name'),
	                      'comment'=>$this->input->post('comment'),
	                      'id_blog'=>$id,
	                      'tanggal'=>date('Y-m-d h:m:s'));
			if($this->m_data->tambah('comment', $data)) {
				$this->session->set_flashdata('response','Data berhasil disimpan');	
			} else {
				$this->session->set_flashdata('response','Data gagal disimpan');
			}
			return redirect('welcome');
		} else {
			$data['user'] =$this->m_data->getSemua('user');
			$this->template->load('index','welcome',$data);
		}
	}

	public function artikel_kategori($key_id){
		$id_kategori = $key_id;
		//$cari_kategori = $this->m_data->cari_kategori();
		$kategori = $this->m_data->cari_kategori_id($id_kategori);
		foreach ($kategori as $key) {
		$data['kategori_select'] = $kategori;
		$data['kategori_id'] = $this->m_data->GetKategori($key->kategori);
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['header'] =$this->m_data->getSemua('header');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$this->template->load('index','artikel_kategori',$data);
		}
	}

	public function about(){
		$this->template->load('index','about');
	}
}
