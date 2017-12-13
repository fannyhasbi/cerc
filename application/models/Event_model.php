<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

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

  public function add(){
    $slug = "abc";

    $data = array(
      'nama' => $this->input->post('nama'),
      'tgl' => $this->input->post('tgl'),
      'tempat' => $this->input->post('tempat'),
      'ket' => $this->input->post('keterangan'),
      'slug' => $slug
    );

    if($this->db->insert('event', $data)){
      return true;
    }
    return false;
  }
}

/* End of file Event_model.php */
/* Location: ./application/models/Event_model.php */