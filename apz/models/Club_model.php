<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club_model extends CI_Model {
  public function __construct(){
    date_default_timezone_set('Asia/Jakarta');
  }

  private function generateSlug($judul){
    $judul = purify_slug($judul) . '-';
    $n = "1234567890";
    for($i=0;$i<3;$i++){
      $judul .= $n[rand(0, strlen($n) - 1)];
    }
    return $judul;
  }

  public function checkMateriById($id_materi){
    return $this->db->get_where('materi', ['id' => $id_materi]);
  }

  public function checkMateriBySlug($slug_materi){
    // $slug_materi = $this->db->escape($slug_materi);
    // $slug_materi = htmlentities($slug_materi);
    return $this->db->get_where('materi', ['slug' => $slug_materi]);
  }

  public function getAllClub(){
    $q = $this->db->get('club');
    return $q->result();
  }

  public function get($club_slug){
    $q = $this->db->get_where('club', ['slug' => $club_slug]);
    return $q->row();
  }

  public function getMateriById($id_materi){
    $q = $this->db->get_where('materi', ['id' => $id_materi]);
    return $q->row();
  }

  private function getIdClubBySlug($club_slug){
    $q = $this->db->get_where('club', ['slug' => $club_slug]);
    return $q->row()->id;
  }

  public function getMateriByClub($id_club){
    $this->db->order_by('tgl_kelas', 'DESC');
    $q = $this->db->get_where('materi', ['id_club' => $id_club]);
    return $q->result();
  }

  public function getMateriByClubSlug($club_slug){
    $id_club = $this->getIdClubBySlug($club_slug);
    $this->db->order_by('tgl_kelas', 'DESC');
    
    $q = $this->db->get_where('materi', ['id_club' => $id_club]);
    return $q->result();
  }

  public function getPost(){
    $this->db->order_by('tgl', 'DESC');

    $q = $this->db->get_where('post', ['id_club' => $this->session->userdata('level')]);
    return $q->result();
  }

  public function getPostById($id_post){
    $id_post = purify($id_post);
    $q = $this->db->get_where('post', ['id' => $id_post]);

    return $q->row();
  }

  public function getPostByClubSlug($club_slug){
    $id_club = $this->getIdClubBySlug($club_slug);
    $q = $this->db->get_where('post', ['id_club' => $id_club]);
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
      'uploaded'  => date('Y-m-d H:i:s'),
      'slug'  => $this->generateSlug($this->input->post('judul_materi'))
    );

    $this->db->insert('materi', $data);
  }

  public function addPost($file_name = NULL){
    if($file_name == NULL)
      $file_name = $this->input->post('file_url');

    $data = array(
      'judul'  => purify($this->input->post('judul_post')),
      'tgl'    => $this->input->post('tgl_kegiatan'),
      'uploaded' => date('Y-m-d H:i:s'),
      'foto'   => $file_name,
      'id_club'=> $this->session->userdata('level'),
      'ket'    => purify($this->input->post('keterangan'))
    );

    $this->db->insert('post', $data);
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

  public function updateMateri($id_materi, $file_name = NULL){
    $this->db->where('id', $id_materi);
    
    if($file_name == NULL)
      $file_name = $this->input->post('file_url');

    $data = array(
      'judul' => purify($this->input->post('judul_materi')),
      'file'  => $file_name,
      'ket'   => purify($this->input->post('keterangan')),
      'tgl_kelas' => $this->input->post('tgl_kelas'),
      'pemateri'  => purify($this->input->post('pemateri')),
      'slug'  => $this->generateSlug($this->input->post('judul_materi'))
    );

    $this->db->update('materi', $data);
  }

  public function updatePost($id_post, $file_name = NULL){
    $this->db->where('id', $id_post);

    if($file_name == NULL)
      $file_name = $this->input->post('file_url');

    $data = array(
      'judul'  => purify($this->input->post('judul_post')),
      'tgl'    => $this->input->post('tgl_kegiatan'),
      'foto'   => $file_name,
      'ket'    => purify($this->input->post('keterangan'))
    );

    $this->db->update('post', $data);
  }

  public function deleteMateri($id_materi){
    $this->db->where('id', $id_materi);
    $this->db->delete('materi');
  }
}
