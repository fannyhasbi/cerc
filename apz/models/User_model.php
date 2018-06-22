<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
  
  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }

  public function checkUser(){
    $where = array(
      'username' => $this->input->post('username')
    );
    return $this->db->get_where('user', $where);
  }

  public function checkUserByUsername($username){
    return $this->db->get_where('user', ['username' => $username]);
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
    $data = array(
      'username' => $this->purify($this->input->post('username')),
      'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
      'nama'     => $this->purify($this->input->post('nama')),
      'level'    => $this->input->post('level')
    );

    $this->db->insert('user', $data);
  }
  

}