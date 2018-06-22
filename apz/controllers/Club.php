<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {
  public function index() {
    $data['view_name'] = 'embedded';
    $this->load->view('club/index_view', $data);
  }

}
