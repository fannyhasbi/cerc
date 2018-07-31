<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('club_model');
  }

  private function cekLogin(){
    if(!$this->session->userdata('login_club')){
      redirect(site_url('login'));
    }
  }

  public function profile($club_slug){
    $data['club'] = $this->club_model->get($club_slug);

    $this->load->view('club/profile', $data);
  }

  public function dashboard(){
    $this->cekLogin();
    $data['view_name'] = 'home_profile';
    $data['club'] = $this->club_model->get($this->session->userdata('club_slug'));

    $this->load->view('club/index_view', $data);
  }

  public function request(){
    $this->cekLogin();
    $this->load->model('pengajuan_model');
    
    $data['requests'] = $this->pengajuan_model->getPengajuan();

    $data['view_name'] = 'pengajuan_home';
    $this->load->view('club/index_view', $data);
  }

  public function request_detail($id_pengajuan){
    $this->cekLogin();
    $this->load->model('pengajuan_model');

    $cek_pengajuan = $this->pengajuan_model->check($id_pengajuan);
    if($cek_pengajuan->num_rows() == 0){
      $this->session->set_flashdata('msg', 'Request tidak ditemukan');
      $this->session->set_flashdata('type', 'danger');

      redirect(site_url('c/request'));
    }
    else {
      $data['request'] = $this->pengajuan_model->getPengajuanById($id_pengajuan);

      $data['view_name'] = 'detail_pengajuan';
      $this->load->view('club/index_view', $data);
    }

  }

}
