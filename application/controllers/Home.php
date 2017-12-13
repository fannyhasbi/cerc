<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
  }

	public function index(){
    $this->load->model('event_model');
    $data['events'] = $this->event_model->getEventHome();

		$this->load->view('home/index', $data);
	}

  public function event(){
    $this->load->model('event_model');
    $data['events'] = $this->event_model->getEvent();

    $this->load->view('home/event', $data);
  }

  public function login(){
    if($this->input->post('login')){
      $user = $this->input->post('username');
      $pass = $this->input->post('password');

      $cek = $this->user_model->checkUser();

      if($cek->num_rows() > 0){
        $data_user = $this->user_model->getData();

        if(password_verify($pass, $data_user->password)){
          $sess_data = array(
            'login' => true,
            'username' => $user
          );

          $this->session->set_userdata($sess_data);
          redirect(site_url('u'));
        }
        else {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger">Username atau password salah</div>');
          redirect(site_url('login'));
        }
      }
      else {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger">Username atau password salah</div>');
        redirect(site_url('login'));
      }
    }
    else {
      $data['msg'] = $this->session->flashdata('msg');
      $this->load->view('home/login', $data);
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect(site_url());
  }
}
