<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi extends CI_Controller {

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
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$data['header'] =$this->m_data->getSemua('header');
		$data['masalah'] = $this->m_data->getSemua('permasalahan');
		$this->template->load('index','aplikasi',$data);
	}

	public function proses(){
		$id = $this->input->post('id');
		$id_masalah = $id;
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$data['header'] =$this->m_data->getSemua('header');
		$data['masalah'] = $this->m_data->getSemua('permasalahan');
		$data['diagnosis'] = $this->input->post('id');
		$this->template->load('index','aplikasi1',$data);	
	}

	public function proses1(){
		$id = $this->input->post('id');
		$id_masalah = $id;
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$data['header'] =$this->m_data->getSemua('header');
		$data['masalah'] = $this->m_data->getSemua('permasalahan');
		$data['diagnosis'] = $this->input->post('id');
		$this->template->load('index','aplikasi2',$data);	
	}

	public function proses_pertanyaan(){
		$id = $this->input->post('kode');
		$table = $id;
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$data['header'] =$this->m_data->getSemua('header');
		$data['masalah'] = $this->m_data->getSemua('permasalahan');
		$data['diagnosis_id'] = $this->input->post('kode');
		$data['tanya'] = $this->m_data->getSemua($table);
		$data['id_masalah'] = $this->m_data->cari_masalah_id($table);
		$data['table'] = $table;
		$this->template->load('index','aplikasi_proses',$data);
	}

	public function proses_pertanyaan_awal(){
		$pertanyaan = $this->input->post('id_masalah');
		$ya = $this->input->post('ya');
		$tidak = $this->input->post('tidak');
		if($this->input->post('ya')){
			$kode = $pertanyaan.$ya;
		} else {
			$kode = $pertanyaan.$tidak;
		}
		$id = $this->input->post('table');
		$table = $id;
		$tipe = $this->m_data->count_tipe_id($table,$kode);
		if($tipe == 0) {
			$data['judul'] = $this->m_data->getSemua('judul');
			$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
			$data['header'] =$this->m_data->getSemua('header');
			$data['masalah'] = $this->m_data->getSemua('permasalahan');
			$data['pertanyaan'] = $kode;
			$data['table'] = $table;
			$data['tipe'] = $this->m_data->cari_tipe_id($table,$kode);
			$data['tanya'] = $this->m_data->getSemua($table);
			$data['id_masalah'] = $this->m_data->cari_masalah_id($table);
			$data['id_tanya'] = $this->m_data->cari_pertanyaan_id($table,$kode);
			$data['id_jawab'] = $this->m_data->cari_jawaban_id($table,$kode);		
			$this->template->load('index','aplikasi_proses2',$data);
		} else {
			$data['judul'] = $this->m_data->getSemua('judul');
			$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
			$data['header'] =$this->m_data->getSemua('header');
			$data['masalah'] = $this->m_data->getSemua('permasalahan');
			$data['pertanyaan'] = $kode;
			$data['table'] = $table;
			$data['tipe'] = $this->m_data->cari_tipe_id($table,$kode);
			$data['tanya'] = $this->m_data->getSemua($table);
			$data['id_masalah'] = $this->m_data->cari_masalah_id($table);
			$data['id_tanya'] = $this->m_data->cari_pertanyaan_id($table,$kode);
			$data['id_jawab'] = $this->m_data->cari_jawaban_id($table,$kode);		
			$this->template->load('index','aplikasi_proses1',$data);			
		}
	}

	public function proses_pertanyaan_1(){
		$pertanyaan = $this->input->post('id_masalah');
		$ya = $this->input->post('ya');
		$tidak = $this->input->post('tidak');
		if($this->input->post('ya')){
			$kode = $pertanyaan.$ya;
		} else {
			$kode = $pertanyaan.$tidak;
		}
		$id = $this->input->post('table');
		$table = $id;
		$tipe = $this->m_data->count_tipe_id($table,$kode);
		if($tipe == 0) {
			$data['judul'] = $this->m_data->getSemua('judul');
			$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
			$data['header'] =$this->m_data->getSemua('header');
			$data['masalah'] = $this->m_data->getSemua('permasalahan');
			$data['pertanyaan'] = $kode;
			$data['table'] = $table;
			$data['tipe'] = $this->m_data->cari_tipe_id($table,$kode);
			$data['tanya'] = $this->m_data->getSemua($table);
			$data['id_masalah'] = $this->m_data->cari_masalah_id($table);
			$data['id_tanya'] = $this->m_data->cari_pertanyaan_id($table,$kode);
			$data['id_jawab'] = $this->m_data->cari_jawaban_id($table,$kode);		
			$this->template->load('index','aplikasi_proses2',$data);
		} else {
			$data['judul'] = $this->m_data->getSemua('judul');
			$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
			$data['header'] =$this->m_data->getSemua('header');
			$data['masalah'] = $this->m_data->getSemua('permasalahan');
			$data['pertanyaan'] = $kode;
			$data['table'] = $table;
			$data['tipe'] = $this->m_data->cari_tipe_id($table,$kode);
			$data['tanya'] = $this->m_data->getSemua($table);
			$data['id_masalah'] = $this->m_data->cari_masalah_id($table);
			$data['id_tanya'] = $this->m_data->cari_pertanyaan_id($table,$kode);
			$data['id_jawab'] = $this->m_data->cari_jawaban_id($table,$kode);		
			$this->template->load('index','aplikasi_proses1',$data);			
		}
	}

	public function proses_jawaban_1()
	{
		$table = $this->input->post('table');
		$kode = $this->input->post('id_masalah');
		$data['judul'] = $this->m_data->getSemua('judul');
		$data['permasalahan'] = $this->m_data->getSemua('permasalahan');
		$data['header'] =$this->m_data->getSemua('header');
		$data['masalah'] = $this->m_data->getSemua('permasalahan');
		$data['solusi'] = $this->m_data->cari_solusi_id($table,$kode);
		$data['id_masalah'] = $this->m_data->cari_masalah_id($table);
		$this->template->load('index','aplikasi_solusi',$data);
	}
}