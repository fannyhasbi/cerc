<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {
  public function checkId($id){
    return $this->db->get_where('event', ['id' => $id]);
  }

  public function checkSlug($slug){
    return $this->db->get_where('event', ['slug' => $slug]);
  }

  public function getEventHome(){
    $this->db->limit(3);
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('event');
    return $q->result();
  }

  public function getEvent(){
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('event');
    return $q->result();
  }

  public function getEventById($id){
    $q = $this->db->get_where('event', ['id' => $id]);
    return $q->row();
  }

  public function add(){
    $foto = $this->input->post('foto');
    $foto = (strlen($foto) < 1) ? base_url('assets') .'/img/portfolio/submarine.png' : purify($foto);

    $nums = '1234567890';
    $x = ""; // untuk unique slug
    for($i = 0; $i < 4; $i++)
      $x .= $nums[rand(0, strlen($nums) - 1)];


    $data = array(
      'nama'    => purify($this->input->post('nama')),
      'tgl'     => purify($this->input->post('tanggal')),
      'tempat'  => purify($this->input->post('tempat')),
      'ket'     => nl2br(htmlspecialchars($this->input->post('keterangan'))),
      'slug'    => purify_slug($this->input->post('nama')) ."-". $x,
      'img'     => $foto,
      'id_user' => $this->session->userdata('id')
    );    

    if($this->db->insert('event', $data)){
      return true;
    }
    return false;
  }

  public function update($id){
    $foto = $this->input->post('foto');
    $foto = (strlen($foto) < 1) ? base_url('assets') .'/img/portfolio/submarine.png' : purify($foto);

    $nums = '1234567890';
    $x = ""; // untuk unique slug
    for($i = 0; $i < 4; $i++)
      $x .= $nums[rand(0, strlen($nums) - 1)];

    $data = array(
      'nama'    => purify($this->input->post('nama')),
      'tgl'     => purify($this->input->post('tanggal')),
      'tempat'  => purify($this->input->post('tempat')),
      'ket'     => nl2br(htmlspecialchars($this->input->post('keterangan'))),
      'slug'    => purify_slug($this->input->post('nama')) ."-". $x,
      'img'     => $foto
    );

    $this->db->where('id', $id);

    if($this->db->update('event', $data)){
      return true;
    }
    return false;
  }

  public function delete($id){
    $this->db->where('id', $id);
    if($this->db->delete('event')){
      return true;
    }
    else {
      return false;
    }
  }


}
