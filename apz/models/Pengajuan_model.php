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
    $this->load->helper('haz_helper');
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

  public function addPengajuan($id_pemohon, $alamat_file){
    $this->load->helper('haz_helper');
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
    $this->load->helper('haz_helper');
    $data = array(
      'nama' => purify($this->input->post('nama')),
      'email'=> purify($this->input->post('email')),
      'instansi' => purify($this->input->post('instansi')),
      'kontak'   => purify($this->input->post('kontak'))
    );

    $this->db->insert('pemohon', $data);

    return $this->getLastInsertedPemohon()->id;
  }

}
