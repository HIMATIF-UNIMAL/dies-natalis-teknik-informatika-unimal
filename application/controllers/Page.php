<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
		belumLogin();
	}

	public function index()
	{
    redirect(base_url('page/dashboard')); 
	}

  public function dashboard()
	{
    $data['title'] = 'Dashboard';
    $this->load->view('admin/header', $data);
		$this->load->view('admin/page/dashboard');
		$this->load->view('admin/footer');
	}

	public function panitia()
	{
    $data['title'] = 'Panitia';
		$data['hasil'] = $this->db->get('tbl_panitia')->result();
    $this->load->view('admin/header', $data);
		$this->load->view('admin/panitia/main');
		$this->load->view('admin/footer');
	}

	public function simpan_panitia(){
		$data = array(
      'nama' => $this->input->post('nama'),
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
    );
		$this->db->insert('tbl_panitia',$data);
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
          Berhasil menambahkan panitia
        </div>
      </div>
    </div>
    ');
    redirect(base_url('page/panitia')); 
	}

	public function edit_panitia(){
		$cek = $data['hasil'] = $this->db->get_where('tbl_panitia', ['id' => $this->input->post('id')])->row_array();
		if($this->input->post('password') == null){
      $password = $cek['password'];
    }else{
      $password = md5($this->input->post('password'));
    };
		$data = array(
      'nama' => $this->input->post('nama'),
      'username' => $this->input->post('username'),
      'password' => $password,
    );
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_panitia',$data);
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
          Berhasil mengubah data panitia
        </div>
      </div>
    </div>
    ');
    redirect(base_url('page/panitia')); 
	}

	public function hapus_panitia($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_panitia');
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
          Berhasil menghapus panitia
        </div>
      </div>
    </div>
    ');
    redirect(base_url('page/panitia')); 
	}
}
