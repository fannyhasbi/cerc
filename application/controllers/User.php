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

    $data['view_name'] = 'home';
    $this->load->view('user/index_view', $data);
  }

  public function add_event(){
    $data['view_name'] = 'add_event';
    $this->load->view('user/index_view', $data);
  }

}