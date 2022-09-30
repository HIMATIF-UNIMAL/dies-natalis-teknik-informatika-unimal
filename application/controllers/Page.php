<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
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
}
