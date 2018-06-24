<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {
  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }

  public function checkProject($id_project){
    return $this->db->get_where('project', ['id' => $id_project]);
  }

  public function checkKategori($id_kategori){
    return $this->db->get_where('kategori', ['id' => $id_kategori]);
  }

  public function getProjectHome(){
    $q = $this->db->query("
      SELECT p.*, k.nama AS nama_kategori
      FROM project p
      LEFT JOIN kategori k
        ON p.id_kategori = k.id
      ORDER BY selesai DESC
      LIMIT 6"
    );

    return $q->result();
  }

  public function getProject(){
    $q = $this->db->query("
      SELECT p.*, k.nama AS nama_kategori
      FROM project p
      LEFT JOIN kategori k
        ON p.id_kategori = k.id
      ORDER BY selesai DESC"
    );
    return $q->result();
  }

  public function getProjectById($id_project){
    $q = $this->db->get_where('project', ['id' => $id_project]);
    return $q->row();
  }

  public function getKategori(){
    $q = $this->db->get('kategori');
    return $q->result();
  }

  public function getKategoriById($id_kategori){
    $q = $this->db->get_where('kategori', ['id' => $id_kategori]);
    return $q->row();
  }

  public function add(){
    $data = array(
      'nama'    => $this->purify($this->input->post('nama_proyek')),
      'pemohon' => $this->purify($this->input->post('pemohon')),
      'selesai' => $this->input->post('selesai'),
      'pj'      => $this->purify($this->input->post('pj')),
      'id_user' => $this->session->userdata('id'),
      'id_kategori' => $this->input->post('kategori'),
      'ket'     => htmlspecialchars($this->input->post('keterangan')),
      'foto'    => $this->purify($this->input->post('foto'))
    );

    $this->db->insert('project', $data);
  }

  public function addKategori(){
    $data = array(
      'nama' => $this->purify($this->input->post('nama_kategori'))
    );

    $this->db->insert('kategori', $data);
  }

  public function update($id_project){
    $this->db->where('id', $id_project);

    $data = array(
      'nama'    => $this->purify($this->input->post('nama_proyek')),
      'pemohon' => $this->purify($this->input->post('pemohon')),
      'selesai' => $this->input->post('selesai'),
      'pj'      => $this->purify($this->input->post('pj')),
      'id_user' => $this->session->userdata('id'),
      'id_kategori' => $this->input->post('kategori'),
      'ket'     => htmlspecialchars($this->input->post('keterangan')),
      'foto'    => $this->purify($this->input->post('foto'))
    );

    $this->db->update('project', $data);
  }

  public function updateKategori($id_kategori){
    $this->db->where('id', $id_kategori);
    
    $data = array(
      'nama' => $this->purify($this->input->post('nama_kategori'))
    );

    $this->db->update('kategori', $data);
  }

  public function delete($id_project){
    $this->db->where('id', $id_project);
    $this->db->delete('project');
  }
  

}
