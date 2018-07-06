<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('club_model');
  }

  public function profile($club_slug){
    $data['club'] = $this->club_model->get($club_slug);

    $this->load->view('club/profile', $data);
  }

  public function dashboard(){
    $data['view_name'] = 'home_profile';
    $this->load->view('club/index_view', $data);
  }

}
