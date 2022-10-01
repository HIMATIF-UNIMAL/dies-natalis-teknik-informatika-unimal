<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetisi extends CI_Controller {

	public function index()
	{
		$data['umum'] = $this->db->get_where('tbl_setting', ['jenis' => 'umum'])->result();
		$data['mahasiswa'] = $this->db->get_where('tbl_setting', ['jenis' => 'mahasiswa'])->result();
    $this->load->view('kompetisi/include/header_page', $data);
		$this->load->view('Kompetisi/main');
    $this->load->view('kompetisi/include/footer');
	}

  public function tipografi()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
		// print_r($data);die;
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/tipografi');
    $this->load->view('kompetisi/include/footer');
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
				$this->session->set_flashdata('msg',
				'<div class="position-fixed" style="z-index: 9999999">
				<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="toast-header">
						<i class="bx bx-bell me-2"></i>
						<div class="me-auto fw-semibold">GAGAL!</div>
						<small>Now</small>
						<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
					<div class="toast-body">
						Pastikan file yang anda input berekstensi jpg, png atau pdf 
					</div>
				</div>
			</div>
			');
			redirect(base_url('kompetisi/tipografi'));
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
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/desain_poster');
    $this->load->view('kompetisi/include/footer');
	}
	public function daftar_desain_poster()
	{
		$config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
				$this->session->set_flashdata('msg',
				'<div class="position-fixed" style="z-index: 9999999">
				<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="toast-header">
						<i class="bx bx-bell me-2"></i>
						<div class="me-auto fw-semibold">GAGAL!</div>
						<small>Now</small>
						<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
					<div class="toast-body">
						Pastikan file yang anda input berekstensi jpg, png atau pdf 
					</div>
				</div>
			</div>
			');
			redirect(base_url('kompetisi/desain_poster'));
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
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/videografi');
    $this->load->view('kompetisi/include/footer');
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
				$this->session->set_flashdata('msg',
				'<div class="position-fixed" style="z-index: 9999999">
				<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="toast-header">
						<i class="bx bx-bell me-2"></i>
						<div class="me-auto fw-semibold">GAGAL!</div>
						<small>Now</small>
						<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
					<div class="toast-body">
						Pastikan file yang anda input berekstensi jpg, png atau pdf 
					</div>
				</div>
			</div>
			');
				redirect(base_url('kompetisi/videografi'));
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


	public function vocal_solo()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 4])->row_array();
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/vocal_solo');
    $this->load->view('kompetisi/include/footer');
	}
	public function daftar_vocal_solo()
	{
		$karakter = 'abcdefghijklmnopqrstuvwxyz123456789';
    $slug  = substr(str_shuffle($karakter), 0, 32);

		$config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('ktm')) {
			$this->session->set_flashdata('msg',
			'<div class="position-fixed" style="z-index: 9999999">
			<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<i class="bx bx-bell me-2"></i>
					<div class="me-auto fw-semibold">GAGAL!</div>
					<small>Now</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Pastikan file yang anda input berekstensi jpg, png atau pdf 
				</div>
			</div>
		</div>
		');
			redirect(base_url('kompetisi/vocal_solo'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['ktm'] = $fileData['file_name'];
		}
		if (!$this->upload->do_upload('foto')) {
			$this->session->set_flashdata('msg',
			'<div class="position-fixed" style="z-index: 9999999">
			<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<i class="bx bx-bell me-2"></i>
					<div class="me-auto fw-semibold">GAGAL!</div>
					<small>Now</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Pastikan file yang anda input berekstensi jpg, png atau pdf 
				</div>
			</div>
		</div>
		');
			redirect(base_url('kompetisi/vocal_solo'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto'] = $fileData['file_name'];
		}
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'nama' => $this->input->post('nama'),
						'wa' => $this->input->post('wa'),
						'jurusan' => $this->input->post('jurusan'),
						'bukti' => $hasil['foto'],
						'ktm' => $hasil['ktm'],
						'status' => 0,
				 );
				 $this->db->insert('tbl_vocal_solo',$data);
				 redirect(base_url('kompetisi/sukses'));
		               
	}

	public function cipta_puisi()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 5])->row_array();
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/cipta_puisi');
    $this->load->view('kompetisi/include/footer');
	}
	public function daftar_cipta_puisi()
	{
		$karakter = 'abcdefghijklmnopqrstuvwxyz123456789';
    $slug  = substr(str_shuffle($karakter), 0, 32);

		$config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('ktm')) {
			$this->session->set_flashdata('msg',
			'<div class="position-fixed" style="z-index: 9999999">
			<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<i class="bx bx-bell me-2"></i>
					<div class="me-auto fw-semibold">GAGAL!</div>
					<small>Now</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Pastikan file yang anda input berekstensi jpg, png atau pdf 
				</div>
			</div>
		</div>
		');
			redirect(base_url('kompetisi/cipta_puisi'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['ktm'] = $fileData['file_name'];
		}
		if (!$this->upload->do_upload('foto')) {
			$this->session->set_flashdata('msg',
			'<div class="position-fixed" style="z-index: 9999999">
			<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<i class="bx bx-bell me-2"></i>
					<div class="me-auto fw-semibold">GAGAL!</div>
					<small>Now</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Pastikan file yang anda input berekstensi jpg, png atau pdf 
				</div>
			</div>
		</div>
		');
			redirect(base_url('kompetisi/cipta_puisi'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto'] = $fileData['file_name'];
		}
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'nama' => $this->input->post('nama'),
						'wa' => $this->input->post('wa'),
						'jurusan' => $this->input->post('jurusan'),
						'bukti' => $hasil['foto'],
						'ktm' => $hasil['ktm'],
						'status' => 0,
				 );
				 $this->db->insert('tbl_cipta_puisi',$data);
				 redirect(base_url('kompetisi/sukses'));
		               
	}

	public function sukses()
	{
    $this->load->view('kompetisi/include/header');
		$this->load->view('kompetisi/sukses');
    $this->load->view('kompetisi/include/footer');
	}
}
