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
		$data['hasil'] = $this->db->get_where('tbl_karya')->result();
    $this->load->view('admin/header', $data);
		$this->load->view('admin/pamtek/karya');
		$this->load->view('admin/footer');
	}


}
