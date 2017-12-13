<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->cekLogin();
    $this->load->model('user_model');
  }

  private function cekLogin(){
    if(!$this->session->userdata('login')){
      redirect(site_url('login'));
    }
  }

  public function index(){
    $this->load->model('event_model');
    $data['events'] = $this->event_model->getEvent();

    $data['msg'] = $this->session->flashdata('msg');
    $data['view_name'] = 'home';
    $this->load->view('user/index_view', $data);
  }

  public function add_event(){
    if($this->input->post('tambah')){
      $this->load->model('event_model');

      if($this->event_model->add())
        $this->session->set_flashdata('msg', '<div class="alert alert-success"><span>Event berhasil dimasukkan</span></div>');
      else
        $this->session->set_flashdata('msg', '<div class="alert alert-danger"><span>Event gagal dimasukkan</span></div>');

      redirect(site_url('u'));
    }
    else {
      $data['view_name'] = 'add_event';
      $this->load->view('user/index_view', $data);
    }

  }

}