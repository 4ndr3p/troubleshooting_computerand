<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login_pakar extends CI_Model {

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
	public function cek_user($username="",$password="")
	{
		//$about = $this->db->query('SELECT * FROM about;');
		//return $about;

		//$password = password_hash($password, PASSWORD_DEFAULT);

		$query = $this->db->get_where('pakar',array('username'=> $username,'password'=>md5($password)));
		$query = $query->result_array();
		return $query;
		
	}

	public function get_datalogin($username)
	{
		$hasil = $this->db->select('*')
							->from('pakar')
							->where('username',$username)
		 					->get()->result();
		return $hasil;
	}
	

	public function get_jumlahdata($table)
	{
		$hasil = $this->db->from($table)
		 					->get()->num_rows();
		return $hasil;
	}
}