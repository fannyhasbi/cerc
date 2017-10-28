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
    $this->load->view('home/login');
  }
}
