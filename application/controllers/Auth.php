<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')== 1){
			?>
			<script>
			window.location="<?php echo base_url(); ?>page/dashboard";
			</script>
			<?php
		}
		
	}

	public function index()
	{
    $data['title'] = 'Login';
		$this->load->view('login', $data);
	}

	function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$where = array(
			'username'=>$user,
			'password'=>md5($pass)
		);
		$cek = $this->Model_page->cek_login('tbl_panitia',$where)->num_rows();
		$hasil= $this->Model_page->cek_login('tbl_panitia',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'id'=>$data->id,
					'nama'=>$data->nama,
					'status'=>1
					);
			};
			$this->session->set_userdata($sesi);
			$log = [
				'nama' => $this->session->userdata('nama'),
				'user' => $user,
				'ip'=> $_SERVER['REMOTE_ADDR'],
				'http'=> $_SERVER['HTTP_USER_AGENT']
			];
			$this->db->insert('log', $log);
			redirect(base_url('page/dashboard'));
		}else{
			$this->session->set_flashdata('msg',
			'<div class="position-fixed" style="z-index: 9999999">
      <div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-warning top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Notifikasi</div>
          <small>Now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Username atau password yang anda masukan salah
        </div>
      </div>
    </div>
    ');
			redirect(base_url('panitia'));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		redirect(base_url('panitia'));
	} 

}
