<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club_model extends CI_Model {
  public function __construct(){
    date_default_timezone_set('Asia/Jakarta');
  }

  public function get($club_slug){
    $q = $this->db->get_where('club', ['slug' => $club_slug]);
    return $q->row();
  }

  public function getMateriByClub($id_club){
    $q = $this->db->get_where('materi', ['id_club' => $id_club]);
    return $q->result();
  }

  public function addMateri($file_name = NULL){
    if($file_name == NULL)
      $file_name = $this->input->post('file_url');

    $data = array(
      'judul' => purify($this->input->post('judul_materi')),
      'file'  => $file_name,
      'ket'   => purify($this->input->post('keterangan')),
      'tgl_kelas' => $this->input->post('tgl_kelas'),
      'id_club'   => $this->session->userdata('level'),
      'pemateri'  => purify($this->input->post('pemateri')),
      'uploaded'  => date('Y-m-d H:i:s')
    );

    $this->db->insert('materi', $data);
  }
  
  public function update($club_slug, $alamat_foto = NULL){
    $this->db->where('slug', $club_slug);
    
    if($alamat_foto == NULL){
      $data = array(
        'ket' => purify($this->input->post('ket'))
      );
    }
    else {
      $data = array(
        'ket'  => purify($this->input->post('ket')),
        'foto' => $alamat_foto
      );
    }

    $this->db->update('club', $data);
  }
}
