<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {
  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }

  public function getProjectHome(){
    $this->db->limit(3);
    $this->db->order_by('selesai', 'DESC');
    $q = $this->db->get('project');
    return $q->result();
  }

  public function getProject(){
    $this->db->order_by('selesai', 'DESC');
    $q = $this->db->get('project');
    return $q->result();
  }

  public function getKategori(){
    $q = $this->db->get('kategori');
    return $q->result();
  }

  public function add(){
    $data = array(
      'nama'    => $this->purify($this->input->post('nama_proyek')),
      'pemohon' => $this->purify($this->input->post('pemohon')),
      'selesai' => $this->input->post('selesai'),
      'pj'      => $this->purify($this->input->post('pj')),
      'id_user' => $this->session->userdata('id'),
      'id_kategori' => $this->input->post('kategori'),
      'foto'    => $this->purify($this->input->post('foto'))
    );

    $this->db->insert('project', $data);
  }
  

}
