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
    $this->cekLogin();
    
    $this->load->model('event_model');
    $data['events'] = $this->event_model->getEvent();

    $data['msg'] = $this->session->flashdata('msg');
    $data['type']= $this->session->flashdata('type');
    $data['view_name'] = 'home';
    $this->load->view('user/index_view', $data);
  }

  public function add_event(){
    if($this->input->post('tambah')){
      $this->load->model('event_model');

      if($this->event_model->add()){
        $this->session->set_flashdata('msg', 'Event berhasil dimasukkan');
        $this->session->set_flashdata('type', 'success');
      }
      else{
        $this->session->set_flashdata('msg', 'Event gagal dimasukkan');
        $this->session->set_flashdata('type', 'danger');
      }

      redirect(site_url('u'));
    }
    else {
      $data['view_name'] = 'add_event';
      $this->load->view('user/index_view', $data);
    }
  }

  public function edit_event($id){
    $this->load->model('event_model');
    
    if($this->input->post('update')){
      if($this->event_model->update($id)){
        $this->session->set_flashdata('msg', 'Event berhasil diupdate');
        $this->session->set_flashdata('type', 'success');
      }
      else{
        $this->session->set_flashdata('msg', 'Event gagal diupdate');
        $this->session->set_flashdata('type', 'danger');
      }

      redirect(site_url('u'));
    }
    else {
      if($this->event_model->checkId($id)->num_rows() > 0){
        $data['event'] = $this->event_model->getEventById($id);

        $data['view_name'] = 'edit_event';
        $this->load->view('user/index_view', $data);
      }
      else {
        // tidak ada id tersebut
        show_404();
      }
    }
  }

  public function hapus_event($id = null){
    if($id === null){
      show_404();
    }
    else {
      $this->load->model('event_model');

      if($this->event_model->checkId($id)->num_rows() > 0){
        if($this->event_model->delete($id)){
          $this->session->set_flashdata('msg', 'Event berhasil dihapus');
          $this->session->set_flashdata('type', 'success');
        }
        else {
          $this->session->set_flashdata('msg', 'Event gagal dihapus');
          $this->session->set_flashdata('type', 'danger');
        }
      }
      else {
        show_404();
      }

      redirect(site_url('u'));
    }
  }

  public function add_user(){
    // if($this->input->post('tambah')){
    //   $this->load->model('event_model');

    //   if($this->event_model->add()){
    //     $this->session->set_flashdata('msg', 'Event berhasil dimasukkan');
    //     $this->session->set_flashdata('type', 'success');
    //   }
    //   else{
    //     $this->session->set_flashdata('msg', 'Event gagal dimasukkan');
    //     $this->session->set_flashdata('type', 'danger');
    //   }

    //   redirect(site_url('u'));
    // }
    // else {
    //   $data['view_name'] = 'add_event';
    //   $this->load->view('user/index_view', $data);
    // }
    $data['view_name'] = 'add_user';
    $this->load->view('user/index_view', $data);
  }

}