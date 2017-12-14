<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

  private function purify_slug($r){
    $tags = ['.',',','/','\'','"','?','!','\\','=','+','*','&','^','%','$','@'];
    
    $r = str_replace($tags, '', $r);
    $r = str_replace(' ', '-', $r);
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);
    $r = strtolower($r);

    return $r;
  }

  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }

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
    $foto = (strlen($foto) < 1) ? base_url('assets') .'/img/portfolio/submarine.png' : $this->purify($foto);

    $nums = '1234567890';
    $x = ""; // untuk unique slug
    for($i = 0; $i < 4; $i++)
      $x .= $nums[rand(0, strlen($nums) - 1)];


    $data = array(
      'nama'    => $this->purify($this->input->post('nama')),
      'tgl'     => $this->purify($this->input->post('tanggal')),
      'tempat'  => $this->purify($this->input->post('tempat')),
      'ket'     => $this->input->post('keterangan'),
      'slug'    => $this->purify_slug($this->input->post('nama')) ."-". $x,
      'img'     => $foto
    );    

    if($this->db->insert('event', $data)){
      return true;
    }
    return false;
  }

  public function update($id){
    $foto = $this->input->post('foto');
    $foto = (strlen($foto) < 1) ? base_url('assets') .'/img/portfolio/submarine.png' : $this->purify($foto);

    $nums = '1234567890';
    $x = ""; // untuk unique slug
    for($i = 0; $i < 4; $i++)
      $x .= $nums[rand(0, strlen($nums) - 1)];

    $data = array(
      'nama'    => $this->purify($this->input->post('nama')),
      'tgl'     => $this->purify($this->input->post('tanggal')),
      'tempat'  => $this->purify($this->input->post('tempat')),
      'ket'     => $this->input->post('keterangan'),
      'slug'    => $this->purify_slug($this->input->post('nama')) ."-". $x,
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
