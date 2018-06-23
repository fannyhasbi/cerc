<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }

	public function index(){
    $this->load->model('event_model');
    $this->load->model('project_model');
    $data['events']   = $this->event_model->getEventHome();
    $data['projects'] = $this->project_model->getProjectHome();

		$this->load->view('home/index', $data);
	}

  public function login(){
    if($this->session->userdata('login'))
      redirect(site_url('u'));

    $this->load->model('user_model');
    if($this->input->post('login')){
      $user = $this->input->post('username');
      $pass = $this->input->post('password');

      $cek = $this->user_model->checkUser();

      if($cek->num_rows() > 0){
        $data_user = $this->user_model->getData();

        if(password_verify($pass, $data_user->password)){
          $sess_data = array(
            'login' => true,
            'username' => $user,
            'id' => $data_user->id,
            'level' => $data_user->level
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

  public function event(){
    $this->load->model('event_model');
    $data['events'] = $this->event_model->getEvent();

    $data['view_name'] = 'event';
    $this->load->view('home/index_view', $data);
  }

  public function event_detail($id, $slug){
    $this->load->model('event_model');

    if($this->event_model->checkId($id)->num_rows() > 0){
      $event_data = $this->event_model->getEventById($id);
      if($slug == $event_data->slug){
         $data['event'] = $event_data;

         $data['view_name'] = 'event_detail';
         $this->load->view('home/index_view', $data);
      }
      else {
        show_404();
      }
    }
    else {
      show_404();
    }
  }

}
