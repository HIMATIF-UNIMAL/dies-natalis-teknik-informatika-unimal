<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipografi extends CI_Controller {

	function __construct(){
		parent::__construct();
    $this->config->load('mail');
	}

	public function index()
	{
		$data['title'] = 'Setting';
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/setting');
		$this->load->view('admin/footer');
	}

	public function simpan_setting(){
		$data = array(
      'deadline' => $this->input->post('deadline'),
      'price' => $this->input->post('price'),
      'guidebook' => $this->input->post('guidebook'),
			'status' => $this->input->post('status'),
			'user_log' => $this->session->userdata('nama'),
    );
    $this->db->where('id', 1);
    $this->db->update('tbl_setting' ,$data);
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
          Berhasil memperbarui setting
        </div>
      </div>
    </div>
    ');
    redirect(base_url('tipografi')); 
	}

	public function pending()
	{
		$data['title'] = 'Pending';
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
		$data['hasil'] = $this->db->get_where('tbl_tipografi', array('status'=> 0))->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/tipografi/pending');
		$this->load->view('admin/footer');
	}

	public function aksi_tolak($id){
		$this->db->set('status', 2);
		$this->db->where('id', $id);
    $this->db->update('tbl_tipografi');
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
          Berhasil memperbarui status pendaftaran
        </div>
      </div>
    </div>
    ');
    redirect(base_url('tipografi/pending')); 
	}

	public function Aktif()
	{
		$data['title'] = 'Pending';
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
		$data['hasil'] = $this->db->get_where('tbl_tipografi', array('status'=> 1))->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/tipografi/aktif');
		$this->load->view('admin/footer');
	}

	public function tolak()
	{
		$data['title'] = 'Tolak';
		$data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
		$data['hasil'] = $this->db->get_where('tbl_tipografi', array('status'=> 2))->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/tipografi/tolak');
		$this->load->view('admin/footer');
	}
}
