<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_model extends CI_Model {
  public function __construct(){
    date_default_timezone_set('Asia/Jakarta');
  }

  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }

  public function getLastInsertedPemohon(){
    $where = array(
      'nama' => $this->purify($this->input->post('nama')),
      'email'=> $this->purify($this->input->post('email')),
      'instansi' => $this->purify($this->input->post('instansi')),
      'kontak' => $this->purify($this->input->post('kotnak'))
    );

    $q = $this->db->get_where('pemohon', $where);
    return $q->row();
  }

  public function addPengajuan($id_pemohon){
    $data = array(
      'nama' => $this->purify($this->input->post('nama_proyek')),
      'tgl_pengajuan' => date('Y-m-d H:i:s'),
      'est_selesai' => $this->purify($this->input->post('selesai')),
      'ket' => $this->purify($this->input->post('keterangan')),
      'file' => 'yoyoy.docx',
      'id_pemohon' => $id_pemohon
    );

    $this->db->insert('pengajuan', $data);
  }

  public function addPemohon(){
    $data = array(
      'nama' => $this->purify($this->input->post('nama')),
      'email'=> $this->purify($this->input->post('email')),
      'instansi' => $this->purify($this->input->post('instansi')),
      'kontak' => $this->purify($this->input->post('kotnak'))
    );

    $this->db->insert('pemohon', $data);

    return $this->getLastInsertedPemohon()->id;
  }

}
