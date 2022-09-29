<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetisi extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
    $this->load->view('kompetisi/header');
		$this->load->view('welcome_message');
    $this->load->view('kompetisi/footer');
	}

  public function tipografi()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
		// print_r($data);die;
    $this->load->view('kompetisi/header', $data);
		$this->load->view('kompetisi/tipografi');
    $this->load->view('kompetisi/footer');
	}
	public function daftar_tipografi()
	{
		$karakter = 'abcdefghijklmnopqrstuvwxyz123456789';
    $slug  = substr(str_shuffle($karakter), 0, 32);

		$config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
					 $error = array('error' => $this->upload->display_errors());
					 $this->load->view('seminar/seminar', $error);
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'nama' => $this->input->post('nama'),
						'ig' => $this->input->post('ig'),
						'wa' => $this->input->post('wa'),
						'status' => 0,
						'bukti' => $hasil,
				 );
 
				 $this->db->insert('tbl_tipografi',$data);
				 redirect(base_url('kompetisi/sukses'));
		 }                 
	}

	public function desain_poster()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 2])->row_array();
		// print_r($data);die;
    $this->load->view('kompetisi/header', $data);
		$this->load->view('kompetisi/desain_poster');
    $this->load->view('kompetisi/footer');
	}
	public function daftar_desain_poster()
	{
		$config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
					 $error = array('error' => $this->upload->display_errors());
					 $this->load->view('seminar/seminar', $error);
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $karakter = 'abcdefghijklmnopqrstuvwxyz123456789';
					 $slug  = substr(str_shuffle($karakter), 0, 32);			 
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'nama' => $this->input->post('nama'),
						'ig' => $this->input->post('ig'),
						'wa' => $this->input->post('wa'),
						'status' => 0,
						'bukti' => $hasil,
				 );
 
				 $this->db->insert('tbl_poster',$data);
				 redirect(base_url('kompetisi/sukses'));
		 }                 
	}

	public function videografi()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 3])->row_array();
		// print_r($data);die;
    $this->load->view('kompetisi/header', $data);
		$this->load->view('kompetisi/videografi');
    $this->load->view('kompetisi/footer');
	}
	public function daftar_videografi()
	{
		$karakter = 'abcdefghijklmnopqrstuvwxyz123456789';
    $slug  = substr(str_shuffle($karakter), 0, 32);

		$config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
					 $error = array('error' => $this->upload->display_errors());
					 $this->load->view('seminar/seminar', $error);
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'nama' => $this->input->post('nama'),
						'ig' => $this->input->post('ig'),
						'wa' => $this->input->post('wa'),
						'nama1' => $this->input->post('nama1'),
						'nama2' => $this->input->post('nama2'),
						'status' => 0,
						'bukti' => $hasil,
				 );
 
				 $this->db->insert('tbl_videografi',$data);
				 redirect(base_url('kompetisi/sukses'));
		 }                 
	}
}
