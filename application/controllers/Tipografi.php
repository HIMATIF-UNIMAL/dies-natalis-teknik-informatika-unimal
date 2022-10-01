<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipografi extends CI_Controller {

	function __construct(){
		parent::__construct();
    $this->config->load('mail');
		belumLogin();
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
			'jadwal' => $this->input->post('jadwal'),
      'deadline' => $this->input->post('deadline'),
      'price' => $this->input->post('price'),
      'guidebook' => $this->input->post('guidebook'),
			'wa' => $this->input->post('wa'),
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

	public function aksi_terima($id)
	{
    $this->db->set('status', 1);
    $this->db->where('id', $id);
    $this->db->update('tbl_tipografi');
    $this->_sendEmail($id, 'acc');
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

	public function aktif()
	{
		$data['title'] = 'Aktif';
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

	private function _sendEmail($id, $type)
  {
      $user = $this->db->get_where('tbl_tipografi', ['id' => $id])->row();
			$setting = $this->db->get_where('tbl_setting', ['id' => 1])->row();
      $this->load->library('email');
      $config = $this->config->item('mail');
      $addreas = $this->config->item('addreas');
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      $this->email->from($addreas, 'DN19 Teknik Informatika UNIMAL');
      $this->email->to($user->email);
      if ($type == 'acc') {
          $this->email->subject('Notifikasi');
          $this->email->message('
          <div style="width:100%;padding:0;Margin:0">
            <div style="background-color:#eeeeee; text-align: center !important;">
              <table width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top">
                <tbody><tr style="border-collapse:collapse">
                  <td valign="top" style="padding:0;Margin:0">
                  <table class="m_-7910424275763807554es-content" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;border-spacing:0px;table-layout:fixed!important;width:100%">
                    <tbody><tr style="border-collapse:collapse"></tr>
                    <tr style="border-collapse:collapse">
                      <td align="center" style="padding:0;Margin:0">
                      <table style="border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center">
                        <tbody><tr style="border-collapse:collapse">
                          <td align="left" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px">
                          </td>
                    </tr>
                  </tbody></table>
                  <table class="m_-7910424275763807554es-content" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;border-spacing:0px;table-layout:fixed!important;width:100%">
                    <tbody><tr style="border-collapse:collapse">
                      <td align="center" style="padding:0;Margin:0">
                      <table cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:600px">
                        <tbody><tr style="border-collapse:collapse">
                          <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:35px;padding-right:35px">
                          <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;border-spacing:0px">
                            <tbody><tr style="border-collapse:collapse">
                              <td align="center" valign="top" style="padding:0;Margin:0;width:530px">
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                <tbody><tr style="border-collapse:collapse">
                                  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;font-size:30px;line-height:45px;color:#333333"><strong>
                                  <br> CONGRATULATION !! </strong></p></td>
                                </tr>
                              </tbody></table></td>
                            </tr>
                          </tbody></table></td>
                        </tr>
                        <tr style="border-collapse:collapse">
                          <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px">
                          <table width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-spacing:0px">
                            <tbody><tr style="border-collapse:collapse">
                              <td valign="top" align="center" style="padding:0;Margin:0;width:530px">
                              <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                <tbody><tr style="border-collapse:collapse">
                                  <td class="m_-7910424275763807554es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;font-size:18px;font-style:normal;font-weight:bold;color:#333333!important;text-decoration: none !important;">Halo, '. $user->nama .' !!</h3></td>
                                </tr>
                                <tr style="border-collapse:collapse">
                                  <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;font-size:16px;line-height:24px;color:#333333">
                                    <span style="color: #71dd37 !important;">Status Pembayaran Kamu telah di validasi oleh admin!!</span> <br>Silahkan klik link dibawah ini untuk dapat melihat tiket peserta : <br><br> <a href="'.base_url().'tiket/tipografi/'. $user->slug .'">'.base_url().'tiket/'. $user->slug .'</a>
																		<br><br>untuk Info lebih lanjut, silahkan gabung ke grub whatsapp berikut : <br> <a href="'. $setting->wa .'">'. $setting->wa .'</a>
																		</p> 
                                  </td>
                                </tr>
                              </tbody></table></td>
                            </tr>
                          </tbody></table></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                  </tbody></table>
                  <table class="m_-7910424275763807554es-content" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;border-spacing:0px;table-layout:fixed!important;width:100%">
                    <tbody><tr style="border-collapse:collapse">
                      <td align="center" style="padding:0;Margin:0">
                      <table cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:600px">
                        <tbody><tr style="border-collapse:collapse">
                          <td align="left" style="padding:0;Margin:0;padding-top:15px;padding-left:35px;padding-right:35px">
                          <table width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-spacing:0px">
                            <tbody><tr style="border-collapse:collapse">
                              <td valign="top" align="center" style="padding:0;Margin:0;width:530px">
                              <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                <tbody><tr style="border-collapse:collapse">
                                  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;font-size:15px;line-height:23px;color:#333333"><strong><span style="text-align:center">
                                  <br> -Panitia DN19 TIF</span></strong></p><p style="Margin:0;font-size:15px;line-height:23px;color:#333333"><br></p><p style="Margin:0;font-size:15px;line-height:23px;color:#333333"></p><p style="Margin:0;font-size:15px;line-height:23px;color:#333333"><br></p></td>
                                </tr>
                              </tbody></table></td>
                            </tr>
                          </tbody></table></td>
                        </tr>
                      </tbody></table></td>
                    </tr></td>
                </tr>
              </tbody></table>
            </div>
          </div>
          ');
      } 
      if ($this->email->send()) {
          return true;
      } else {
          echo $this->email->print_debugger();
          die;
      }
  }
}
