<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pamtek extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function karya()
	{
    belumLogin();
    $data['title'] = 'Karya';
		$data['hasil'] = $this->db->get('tbl_karya')->result();
    $this->load->view('admin/header', $data);
		$this->load->view('admin/pamtek/karya');
		$this->load->view('admin/footer');
	}

	public function pengunjung()
	{
    belumLogin();
    $data['title'] = 'Karya';
		$data['hasil'] = $this->db->get('tbl_pengunjung')->result();
    $this->load->view('kompetisi/include/header_page', $data);
		$this->load->view('admin/pamtek/pengunjung');
    $this->load->view('kompetisi/include/footer');
	}

	public function tambah_pengunjung()
	{
		$karakter = '123456789';
    $slug  = substr(str_shuffle($karakter), 0, 4);
    belumLogin();
		$data = array(
			'id' => $slug,
			'nama' => $this->input->post('nama'),
			'instansi' => $this->input->post('instansi'),
		);
		$this->db->insert('tbl_pengunjung',$data);
		$this->session->set_flashdata('msg', '
					<div class="modal fade" id="pengunjung" tabindex="-1" aria-hidden="false" aria-labelledby="exampleModalLabel">
					<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
						<div class="modal-content">
								<div class="modal-body">
									<div class="row justify-content-center text-center py-5">
										<h6>Kode Pengunjung anda</h6>
										<h1 class="text-dark">'.$slug.'</h1>
									</div>
									<div>
										<button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
						</div>
					</div>
				</div>
					');
		redirect(base_url('pamtek/pengunjung'));  
	}

	public function my()
	{
    belumLogin();
    $data['title'] = 'Karya';
		$data['user'] = $this->db->get_where('tbl_karya', ['id' => $this->session->userdata('id_karya')])->row_array();
    $this->load->view('admin/header', $data);
		$this->load->view('admin/pamtek/my');
		$this->load->view('admin/footer');
	}

	public function update_karya(){
		if(empty($_FILES['foto']['name'])){
			$data = array(
					'unit' => $this->input->post('unit'),
					'angkatan' => $this->input->post('angkatan'),
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
			);
				$this->db->where('id', $this->session->userdata('id_karya'));
				$this->db->update('tbl_karya',$data);
				$this->session->set_flashdata('msg', '
				<div class="position-fixed" style="z-index: 9999999">
					<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
						<div class="toast-header">
							<i class="bx bx-bell me-2"></i>
							<div class="me-auto fw-semibold">Notifikasi</div>
							<small>Now</small>
							<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
						</div>
						<div class="toast-body">
							Karya kamu berhasil di update
						</div>
					</div>
				</div>
				');
      redirect(base_url('pamtek/my'));  
		}else{
			$config['upload_path']        = './file';
			$config['allowed_types']       = 'img|png|jpeg|gif|jpg';
			$config['encrypt_name']        = true;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('foto')){
				$this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Gagal!! pastikan ekstensi gambar berupa gif, jpg atau png. Dengan maksimal ukuran gambar 2MB</div>');
				redirect('pamtek/my');
			}else{
								$data = array('foto' => $this->upload->data());
								$uploadData = $this->upload->data();
								$hasil = $uploadData['file_name'];
								$data = array(
									'unit' => $this->input->post('unit'),
									'angkatan' => $this->input->post('angkatan'),
									'judul' => $this->input->post('judul'),
									'deskripsi' => $this->input->post('deskripsi'),
									'foto' => $hasil,
							);
							$this->db->where('id', $this->session->userdata('id_karya'));
							$this->db->update('tbl_karya',$data);
							$this->session->set_flashdata('msg', '
							<div class="position-fixed" style="z-index: 9999999">
								<div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
									<div class="toast-header">
										<i class="bx bx-bell me-2"></i>
										<div class="me-auto fw-semibold">Notifikasi</div>
										<small>Now</small>
										<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
									</div>
									<div class="toast-body">
										karya kamu berhasil di update
									</div>
								</div>
							</div>
							');
						redirect(base_url('pamtek/my')); 
			}
		}
	}

	public function qrcode()
	{
    belumLogin();
    $data['title'] = 'Karya';
		$data['user'] = $this->db->get_where('tbl_karya', ['id' => $this->session->userdata('id_karya')])->row_array();
    $this->load->view('admin/header', $data);
		$this->load->view('admin/pamtek/qrcode');
		$this->load->view('admin/footer');
	}

}
