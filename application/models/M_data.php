<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

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
	//private $table = 'blog';
	//private $pk = 'id';

	//public function tampil_data(){
		//$this->db->order_by($this->pk);
		//return $this->db->get($this->table);
	//}
	
	public function getSemua($table) {
		return $this->db->get($table)->result();
	}

  public function countSemua($table) {
    return $this->db->get($table)->num_rows();
  }

	public function GetN($table, $variabel) {
		return $this->db->where($variabel)
						->get($table)->result();
	}

	public function GetComment($id_blog) {
    	$this->db->select('comment.name, comment.comment'); 
    	$this->db->from('comment');
    	$this->db->where('id_blog',$id_blog);
    	$this->db->join('blog', 'comment.id_blog = blog.id'); 
    	$data = $this->db->get();
    	return $data->result();
	}

	public function tambah($table, $data) {
		$this->db->insert($table, $data);
	}

	public function hapus($table, $variabel) {
		$this->db->where($variabel)
				->delete($table);
	}
	
	public function update($table, $variabel, $data) {
		$this->db->where($variabel)
				->update($table, $data);
	}

    function get_data_list($table, $limit, $start){
        $query = $this->db->get($table, $limit, $start);
        return $query;
    }

  	public function cari_kategori($kategori){
    	$this->db->select('id, kategori'); 
    	$this->db->from('kategori');
    	$this->db->where('kategori',$kategori);
      $data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_kategori_id($id_kategori){
    	$this->db->select('kategori'); 
    	$this->db->from('kategori');
    	$this->db->where('id',$id_kategori);
    	$data = $this->db->get();
    	return $data->result();
  	}

  public function GetKategori($kategori) {
      $this->db->select('id, judul, isi, penulis, tanggal, gambar'); 
      $this->db->from('blog');
      $this->db->where('kategori',$kategori);
      $data = $this->db->get();
      return $data->result();
  }

   	public function cari_permasalahan_id($id_permasalahan){
    	$this->db->select('id','permasalahan'); 
    	$this->db->from('permasalahan');
    	$this->db->where('id',$id_permasalahan);
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_P1($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p1');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}
 
   	public function cari_pertanyaan_P2($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p2');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_P3($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p3');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_P4($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p4');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_P5($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p5');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_P6($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p6');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_P7($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p7');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_P8($id_permasalahan){
    	$this->db->select('kode, konten'); 
    	$this->db->from('p8');
    	$this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

    public function cari_pertanyaan_P9($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p9');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }
 
    public function cari_pertanyaan_P10($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p10');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

    public function cari_pertanyaan_P11($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p11');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

    public function cari_pertanyaan_P12($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p12');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

    public function cari_pertanyaan_P13($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p13');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

    public function cari_pertanyaan_P14($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p14');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

    public function cari_pertanyaan_P15($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p15');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

    public function cari_pertanyaan_P16($id_permasalahan){
      $this->db->select('kode, konten'); 
      $this->db->from('p16');
      $this->db->where("(id_masalah=$id_permasalahan AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

	public function upload(){
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg|bmp';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){ 
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_photo(){
		$config['upload_path'] = './assets/photo/';
		$config['allowed_types'] = 'jpg|png|jpeg|bmp';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo')){ 
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_file1(){
		$config['upload_path'] = './assets/files/';
		$config['allowed_types'] = 'png|gif|jpg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('file1')){ 
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_file2(){
		$config['upload_path'] = './assets/files/';
		$config['allowed_types'] = 'png|gif|jpg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('file2')){ 
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_file3(){
		$config['upload_path'] = './assets/files/';
		$config['allowed_types'] = 'png|gif|jpg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('file3')){ 
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

   	public function cari_masalah_id($table){
    	$this->db->select('id, kode, permasalahan'); 
    	$this->db->from('permasalahan');
    	$this->db->where('kode',$table);
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_pertanyaan_id($table,$kode){
    	$this->db->select('kode, konten'); 
    	$this->db->from($table);
    	//$this->db->where('kode',$kode);
    	$this->db->where("(kode=$kode AND tipe='Q')");
    	$data = $this->db->get();
    	return $data->result();
  	}

   	public function cari_jawaban_id($table,$kode){
    	$this->db->select('kode, konten'); 
    	$this->db->from($table);
    	//$this->db->where('kode',$kode);
    	$this->db->where("(kode=$kode AND tipe='A')");
    	$data = $this->db->get();
    	return $data->result();
  	}

    public function cari_tipe_id($table,$kode){
      $this->db->select('tipe, detail'); 
      $this->db->from($table);
      //$this->db->where('kode',$kode);
      $this->db->where("(kode=$kode AND tipe='Q')");
      $data = $this->db->get();
      return $data->result();
    }

    public function count_tipe_id($table,$kode){
      $this->db->select('tipe, detail'); 
      $this->db->from($table);
      //$this->db->where('kode',$kode);
      $this->db->where("(kode=$kode AND tipe='Q')");
      $data = $this->db->get();
      return $data->num_rows();
    }

   	public function cari_solusi_id($table,$kode){
    	$this->db->select('kode, konten, detail'); 
    	$this->db->from($table);
    	$this->db->where('kode',$kode);
    	//$this->db->where("(kode=$kode AND tipe='A')");
    	$data = $this->db->get();
    	return $data->result();
  	}
}