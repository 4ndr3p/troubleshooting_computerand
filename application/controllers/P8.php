<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P8 extends CI_Controller {

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
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['P8'] = $this->m_data->getSemua('p8');
		$data['header'] =$this->m_data->getSemua('header');
		$this->template->load('index','P8',$data);
	}
}
