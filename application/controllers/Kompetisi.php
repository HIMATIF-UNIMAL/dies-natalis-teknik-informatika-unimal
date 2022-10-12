<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetisi extends CI_Controller {

	public function index()
	{
		$data['umum'] = $this->db->get_where('tbl_setting', ['jenis' => 'umum'])->result();
		$data['mahasiswa'] = $this->db->get_where('tbl_setting', ['jenis' => 'mahasiswa'])->result();
		$data['lainnya'] = $this->db->get_where('tbl_setting', ['jenis' => 'lainnya'])->result();
    $this->load->view('kompetisi/include/header_page', $data);
		$this->load->view('kompetisi/main');
    $this->load->view('kompetisi/include/footer');
	}

  public function tipografi()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
		//print_r($data['setting']['status']);die;
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
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
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
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
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
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
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
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
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
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

	public function mobile_legend()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 6])->row_array();
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/mobile_legend');
    $this->load->view('kompetisi/include/footer');
	}
	
	
	public function daftar_mobile_legend()
	{
		$karakter = 'abcdefghijklmnopqrstuvwxyz123456789';
    $slug  = substr(str_shuffle($karakter), 0, 32);

		$config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('bukti')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['bukti'] = $fileData['file_name'];
		}

		if (!$this->upload->do_upload('krs')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['krs'] = $fileData['file_name'];
		}
		if (!$this->upload->do_upload('foto')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto'] = $fileData['file_name'];
		}

		if (!$this->upload->do_upload('krs1')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['krs1'] = $fileData['file_name'];
		}
		if (!$this->upload->do_upload('foto1')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto1'] = $fileData['file_name'];
		}

		if (!$this->upload->do_upload('krs2')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['krs2'] = $fileData['file_name'];
		}
		if (!$this->upload->do_upload('foto2')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto2'] = $fileData['file_name'];
		}
		
		if (!$this->upload->do_upload('krs3')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['krs3'] = $fileData['file_name'];
		}
		if (!$this->upload->do_upload('foto3')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto3'] = $fileData['file_name'];
		}

		if (!$this->upload->do_upload('krs4')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['krs4'] = $fileData['file_name'];
		}
		if (!$this->upload->do_upload('foto4')) {
			$this->session->set_flashdata('validasi', 1);
			redirect(base_url('kompetisi/mobile_legend'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto4'] = $fileData['file_name'];
		}
		
		if(empty($_FILES['krs5']['name'])){
			$hasil['krs5'] = null;
		}else{
			if (!$this->upload->do_upload('krs5')) {
				$this->session->set_flashdata('validasi', 1);
				redirect(base_url('kompetisi/mobile_legend'));
			} else {
				$fileData = $this->upload->data();
				 $hasil['krs5'] = $fileData['file_name'];
			}
		}
		if(empty($_FILES['foto5']['name'])){
			$hasil['foto5'] = null;
		}else{
			if (!$this->upload->do_upload('foto5')) {
				$this->session->set_flashdata('validasi', 1);
				redirect(base_url('kompetisi/mobile_legend'));
			} else {
				$fileData = $this->upload->data();
				 $hasil['foto5'] = $fileData['file_name'];
			}
		}

		if(empty($_FILES['krs6']['name'])){
			$hasil['krs6'] = null;
		}else{
			if (!$this->upload->do_upload('krs6')) {
				$this->session->set_flashdata('validasi', 1);
				redirect(base_url('kompetisi/mobile_legend'));
			} else {
				$fileData = $this->upload->data();
				 $hasil['krs6'] = $fileData['file_name'];
			}
		}
		if(empty($_FILES['foto6']['name'])){
			$hasil['foto6'] = null;
		}else{
			if (!$this->upload->do_upload('foto6')) {
				$this->session->set_flashdata('validasi', 1);
				redirect(base_url('kompetisi/mobile_legend'));
			} else {
				$fileData = $this->upload->data();
				 $hasil['foto6'] = $fileData['file_name'];
			}
		}

		$data = array(
								'slug' => $slug,
								'email' => $this->input->post('email'),
								'tim' => $this->input->post('tim'),
								'nama' => $this->input->post('nama'),
								'nickname' => $this->input->post('nickname'),
								'id_number' => $this->input->post('id_number'),
								'krs' => $hasil['krs'],
								'foto' => $hasil['foto'],
								'nama1' => $this->input->post('nama1'),
								'nickname1' => $this->input->post('nickname1'),
								'id_number1' => $this->input->post('id_number1'),
								'krs1' => $hasil['krs1'],
								'foto1' => $hasil['foto1'],
								'nama2' => $this->input->post('nama2'),
								'nickname2' => $this->input->post('nickname2'),
								'id_number2' => $this->input->post('id_number2'),
								'krs2' => $hasil['krs2'],
								'foto2' => $hasil['foto2'],
								'nama3' => $this->input->post('nama3'),
								'nickname3' => $this->input->post('nickname3'),
								'id_number3' => $this->input->post('id_number3'),
								'krs3' => $hasil['krs3'],
								'foto3' => $hasil['foto3'],
								'nama4' => $this->input->post('nama4'),
								'nickname4' => $this->input->post('nickname4'),
								'id_number4' => $this->input->post('id_number4'),
								'krs4' => $hasil['krs4'],
								'foto4' => $hasil['foto4'],
								'nama5' => $this->input->post('nama5'),
								'nickname5' => $this->input->post('nickname5'),
								'id_number5' => $this->input->post('id_number5'),
								'krs5' => $hasil['krs5'],
								'foto5' => $hasil['foto5'],
								'nama6' => $this->input->post('nama6'),
								'nickname6' => $this->input->post('nickname6'),
								'id_number6' => $this->input->post('id_number6'),
								'krs6' => $hasil['krs6'],
								'foto6' => $hasil['foto6'],
								'wa' => $this->input->post('wa'),
								'status' => 0,
								'bukti' => $hasil['bukti'],
		);
		$this->db->insert('tbl_ml',$data);
		redirect(base_url('kompetisi/sukses'));
	}

	public function pubgm()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 7])->row_array();
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/pubg');
    $this->load->view('kompetisi/include/footer');
	}

	public function daftar_pubgm()
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
				redirect(base_url('kompetisi/pubgm'));
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'tim' => $this->input->post('tim'),
						'nama' => $this->input->post('nama'),
						'nickname' => $this->input->post('nickname'),
						'id_number' => $this->input->post('id_number'),
						'nama1' => $this->input->post('nama1'),
						'nickname1' => $this->input->post('nickname1'),
						'id_number1' => $this->input->post('id_number1'),
						'nama2' => $this->input->post('nama2'),
						'nickname2' => $this->input->post('nickname2'),
						'id_number2' => $this->input->post('id_number2'),
						'nama3' => $this->input->post('nama3'),
						'nickname3' => $this->input->post('nickname3'),
						'id_number3' => $this->input->post('id_number3'),
						'nama4' => $this->input->post('nama4'),
						'nickname4' => $this->input->post('nickname4'),
						'id_number4' => $this->input->post('id_number4'),
						'nama5' => $this->input->post('nama5'),
						'nickname5' => $this->input->post('nickname5'),
						'id_number5' => $this->input->post('id_number5'),
						'wa' => $this->input->post('wa'),
						'status' => 0,
						'bukti' => $hasil,
				 );
 
				 $this->db->insert('tbl_pubgm',$data);
				 redirect(base_url('kompetisi/sukses'));
		 }                 
	}

	public function free_fire()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 8])->row_array();
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/free_fire');
    $this->load->view('kompetisi/include/footer');
	}
	
	public function daftar_free_fire()
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
				redirect(base_url('kompetisi/free_fire'));
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'tim' => $this->input->post('tim'),
						'nama' => $this->input->post('nama'),
						'nickname' => $this->input->post('nickname'),
						'id_number' => $this->input->post('id_number'),
						'nama1' => $this->input->post('nama1'),
						'nickname1' => $this->input->post('nickname1'),
						'id_number1' => $this->input->post('id_number1'),
						'nama2' => $this->input->post('nama2'),
						'nickname2' => $this->input->post('nickname2'),
						'id_number2' => $this->input->post('id_number2'),
						'nama3' => $this->input->post('nama3'),
						'nickname3' => $this->input->post('nickname3'),
						'id_number3' => $this->input->post('id_number3'),
						'nama4' => $this->input->post('nama4'),
						'nickname4' => $this->input->post('nickname4'),
						'id_number4' => $this->input->post('id_number4'),
						'nama5' => $this->input->post('nama5'),
						'nickname5' => $this->input->post('nickname5'),
						'id_number5' => $this->input->post('id_number5'),
						'wa' => $this->input->post('wa'),
						'status' => 0,
						'bukti' => $hasil,
				 );
 
				 $this->db->insert('tbl_ff',$data);
				 redirect(base_url('kompetisi/sukses'));
		 }                 
	}
	
  public function bootcamp()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 9])->row_array();
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/bootcamp');
    $this->load->view('kompetisi/include/footer');
	}

	public function daftar_bootcamp()
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
				redirect(base_url('kompetisi/bootcamp'));
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'instansi' => $this->input->post('instansi'),
						'nama1' => $this->input->post('nama1'),
						'nim1' => $this->input->post('nim1'),
						'jurusan1' => $this->input->post('jurusan1'),
						'wa1' => $this->input->post('wa1'),
						'nama2' => $this->input->post('nama2'),
						'nim2' => $this->input->post('nim2'),
						'jurusan2' => $this->input->post('jurusan2'),
						'wa2' => $this->input->post('wa2'),
						'nama3' => $this->input->post('nama3'),
						'nim3' => $this->input->post('nim3'),
						'jurusan3' => $this->input->post('jurusan3'),
						'wa3' => $this->input->post('wa3'),
						'status' => 0,
						'bukti' => $hasil,
				 );
 
				 $this->db->insert('tbl_bootcamp',$data);
				 redirect(base_url('kompetisi/sukses'));
		 }                 
	}

	public function problem_solving_coding()
	{
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 10])->row_array();
		if($data['setting']['status'] != 1){
			redirect(base_url('kompetisi/tutup'));
		}
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/problem_solving');
    $this->load->view('kompetisi/include/footer');
	}
	public function daftar_problem_solving_coding()
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
			redirect(base_url('kompetisi/problem_solving_coding'));
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
			redirect(base_url('kompetisi/problem_solving_coding'));
		} else {
			$fileData = $this->upload->data();
			 $hasil['foto'] = $fileData['file_name'];
		}
					$data = array(
						'slug' => $slug,
						'email' => $this->input->post('email'),
						'nama' => $this->input->post('nama'),
						'wa' => $this->input->post('wa'),
						'univ' => $this->input->post('univ'),
						'bukti' => $hasil['foto'],
						'ktm' => $hasil['ktm'],
						'status' => 0,
				);
				$this->db->insert('tbl_problem_solving',$data);
				redirect(base_url('kompetisi/sukses'));
	}

	public function sukses()
	{
		$data['setting']= ['kompetisi' => 'Sukses'];
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/sukses');
    $this->load->view('kompetisi/include/footer');
	}

	public function tutup()
	{
		$data['setting']= ['kompetisi' => 'Tutup'];
    $this->load->view('kompetisi/include/header', $data);
		$this->load->view('kompetisi/tutup');
    $this->load->view('kompetisi/include/footer');
	}

	public function not_found()
	{
    $this->load->view('errors/404');
	}
}
