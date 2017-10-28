<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/index');
	}

  public function event(){
    $this->load->view('home/event');
  }

  public function login(){

    //Belum selesai
    if($this->input->post('login')){
      $user = $this->input->post('username');
      $pass = $this->input->post('password');

      if($user == 'cerc' && $pass == '12345'){
        redirect(site_url());
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
}
