<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {

	public function index()
	{
    redirect(base_url()); 
	}

  	public function tipografi($slug = null)
	{
    $data['slug'] = $this->db->get_where('tbl_tipografi', ['slug' => $slug])->row_array();
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 1])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket', $data); 
    }
	}

  public function desain_poster($slug)
	{
    $data['slug'] = $this->db->get_where('tbl_poster', ['slug' => $slug])->row_array();
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 2])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket', $data);
    } 
	}

  public function videografi($slug)
	{
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 3])->row_array();
    $data['slug'] = $this->db->get_where('tbl_videografi', ['slug' => $slug])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket', $data); 
    }
	}

  public function cipta_puisi($slug)
	{
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 5])->row_array();
    $data['slug'] = $this->db->get_where('tbl_cipta_puisi', ['slug' => $slug])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket', $data); 
    }
	}

  public function vocal_solo($slug)
	{
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 4])->row_array();
    $data['slug'] = $this->db->get_where('tbl_vocal_solo', ['slug' => $slug])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket', $data); 
    }
	}

  public function problem_solving_coding($slug)
	{
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 10])->row_array();
    $data['slug'] = $this->db->get_where('tbl_problem_solving', ['slug' => $slug])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket', $data); 
    }
	}

  public function mobile_legend($slug)
	{
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 6])->row_array();
    $data['slug'] = $this->db->get_where('tbl_ml', ['slug' => $slug])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket-game', $data);
    } 
	}

  public function pubgm($slug)
	{
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 7])->row_array();
    $data['slug'] = $this->db->get_where('tbl_pubgm', ['slug' => $slug])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket-game', $data); 
    }
	}

  public function free_fire($slug)
	{
    $data['setting'] = $this->db->get_where('tbl_setting', ['id' => 8])->row_array();
    $data['slug'] = $this->db->get_where('tbl_ff', ['slug' => $slug])->row_array();
    if( $slug == null){
      redirect(base_url());
    }elseif($slug != $data['slug']['slug']){
      redirect(base_url());
    }elseif($data['slug']['status'] != 1){
      redirect(base_url());
    }else{
      $this->load->view('admin/page/tiket-game', $data); 
    }
	}
}