<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['umum'] = $this->db->get_where('tbl_setting', ['jenis' => 'umum'])->result();
		$data['mahasiswa'] = $this->db->get_where('tbl_setting', ['jenis' => 'mahasiswa'])->result();
		$data['lainnya'] = $this->db->get_where('tbl_setting', ['jenis' => 'lainnya'])->result();
    $data['pamtek'] = $this->db->get('tbl_karya')->result();
    $this->load->view('kompetisi/include/header_page', $data);
		$this->load->view('home/main');
    $this->load->view('kompetisi/include/footer');
	}

	public function not_found()
	{
    $this->load->view('home/404');
	}
}
