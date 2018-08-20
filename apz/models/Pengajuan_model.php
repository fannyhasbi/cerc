<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_model extends CI_Model {
  public function __construct(){
    date_default_timezone_set('Asia/Jakarta');
  }

  public function check($id_pengajuan){
    return $this->db->get_where('pengajuan', ['id' => $id_pengajuan]);
  }

  public function getLastInsertedPemohon(){
    $where = array(
      'nama' => purify($this->input->post('nama')),
      'email'=> purify($this->input->post('email')),
      'instansi' => purify($this->input->post('instansi')),
      'kontak'   => purify($this->input->post('kontak'))
    );

    $this->db->order_by('id', 'DESC');

    $q = $this->db->get_where('pemohon', $where);
    return $q->row();
  }

  public function getPengajuan(){
    $q = $this->db->query("
      SELECT
        p.id,
        p.nama,
        p.tgl_pengajuan,
        p.est_selesai,
        p.status,
        h.nama AS nama_pemohon,
        h.instansi
      FROM pengajuan p
      INNER JOIN pemohon h
        ON p.id_pemohon = h.id
      ORDER BY p.tgl_pengajuan DESC
    ");

    return $q->result();
  }

  public function getPengajuanById($id_pengajuan){
    $q = $this->db->query("
      SELECT p.*,
        h.nama AS nama_pemohon,
        h.email,
        h.instansi,
        h.kontak
      FROM pengajuan p
      INNER JOIN pemohon h
        ON p.id_pemohon = h.id
      WHERE p.id = ". $this->db->escape($id_pengajuan)
    );

    return $q->row();
  }

  public function getRiwayatById($id_pengajuan){
    $q = $this->db->query("
      SELECT log.*,
        club.nama AS nama_club,
        user.level AS level_user,
        user.nama AS nama_user
      FROM log_pengajuan log
      INNER JOIN user
        ON log.id_user = user.id
      INNER JOIN club
        ON user.level = club.id
      WHERE log.id_pengajuan = ". $this->db->escape($id_pengajuan) ." ORDER BY tgl DESC");

    return $q->result();
  }

  public function addPengajuan($id_pemohon, $alamat_file){
    $data = array(
      'nama' => purify($this->input->post('nama_proyek')),
      'tgl_pengajuan' => date('Y-m-d H:i:s'),
      'est_selesai' => purify($this->input->post('selesai')),
      'ket' => purify($this->input->post('keterangan')),
      'file' => $alamat_file,
      'id_pemohon' => $id_pemohon
    );

    $this->db->insert('pengajuan', $data);
  }

  public function addPemohon(){
    $data = array(
      'nama' => purify($this->input->post('nama')),
      'email'=> purify($this->input->post('email')),
      'instansi' => purify($this->input->post('instansi')),
      'kontak'   => purify($this->input->post('kontak'))
    );

    $this->db->insert('pemohon', $data);

    return $this->getLastInsertedPemohon()->id;
  }

  private function addLogTolak($id_pengajuan){
    $data = array(
      'dari_status' => 'N',
      'ke_status'   => 'T', // status = tolak
      'id_user'     => $this->session->userdata('id'),
      'id_pengajuan'=> $id_pengajuan
    );

    $this->db->insert('log_pengajuan', $data);
  }

  private function addLogTerima($id_pengajuan){
    $data = array(
      'dari_status' => 'N',
      'ke_status'   => 'Y', // status = proses
      'id_user'     => $this->session->userdata('id'),
      'id_pengajuan'=> $id_pengajuan
    );

    $this->db->insert('log_pengajuan', $data);
  }

  private function addLogSelesai($id_pengajuan){
    $data = array(
      'dari_status' => 'Y',
      'ke_status'   => 'D', // status = selesai
      'id_user'     => $this->session->userdata('id'),
      'id_pengajuan'=> $id_pengajuan
    );

    $this->db->insert('log_pengajuan', $data);
  }

  public function updateStatusTolak($id_pengajuan){
    $this->db->where('id', $id_pengajuan);

    $data = array(
      'status' => 'T'
    );

    $this->db->update('pengajuan', $data);
    
    $this->addLogTolak($id_pengajuan);
  }

  public function updateStatusTerima($id_pengajuan){
    $this->db->where('id', $id_pengajuan);

    $data = array(
      'status' => 'Y'
    );

    $this->db->update('pengajuan', $data);

    $this->addLogTerima($id_pengajuan);
  }

  public function updateStatusSelesai($id_pengajuan){
    $this->db->where('id', $id_pengajuan);

    $data = array(
      'status' => 'D'
    );

    $this->db->update('pengajuan', $data);

    $this->addLogSelesai($id_pengajuan);
  }

}
