<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
  public function checkUser(){
    $where = array(
      'username' => $this->input->post('username')
    );
    return $this->db->get_where('user', $where);
  }

  public function getUser(){
    $q = $this->db->get('user');
    return $q->result();
  }

  public function getData(){
    $where = array(
      'username' => $this->input->post('username')
    );
    $q = $this->db->get_where('user', $where);
    return $q->row();
  }

  public function add(){
    // $data = array(
    //   'username' 
    // );
  }
  

}