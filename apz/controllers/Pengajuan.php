<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
  public function __construct(){
    parent::__construct();
  }

  private function generateAlamat(){
    $alamat = "";
    $n = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    for($i=0;$i<50;$i++){
      $alamat .= $n[rand(0, strlen($n) - 1)];
    }

    return 'req-cerc-'.$alamat;
  }

  private function generateKode(){
    $h = "";
    $n = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    for($i=0;$i<6;$i++){
      $h .= $n[rand(0, strlen($n) - 1)];
    }

    return $h;
  }

  public function index(){
    if($this->input->post('ajukan')){
      $this->load->model('pengajuan_model');

      $alamat = $this->generateAlamat();

      $passed['kode'] = $this->generateKode();

      // cek apakah ada kode yang sama
      $cek = $this->pengajuan_model->checkKode($passed['kode'])->num_rows();
      while($cek > 0){
        $passed['kode'] = $this->generateKode();
        $cek = $this->pengajuan_model->checkKode($passed['kode'])->num_rows();
      }

      $config['upload_path']   = './uploads/proposals/';
      $config['file_name']     = $alamat;
      $config['allowed_types'] = 'zip|rar';
      $config['max_size']      = 1000;

      $this->load->library('upload', $config);

      // cek apakah ada tambahan file
      if(empty($_FILES['file']['name'])){
        $id_pemohon = $this->pengajuan_model->addPemohon();
        $this->pengajuan_model->addPengajuan($id_pemohon, $passed['kode'], null);
      }
      else {
        if ( ! $this->upload->do_upload('file')){
          $passed['error'] = $this->upload->display_errors();
          
          $passed['view_name'] = 'failed';
          $this->load->view('pengajuan/index_view', $passed);
        }
        else {
          $data = $this->upload->data();

          $id_pemohon = $this->pengajuan_model->addPemohon();
          $this->pengajuan_model->addPengajuan($id_pemohon, $passed['kode'], $data['file_name']);
        }
      }

      $passed['view_name'] = 'success';
      $this->load->view('pengajuan/index_view', $passed);
    }
    else {
      $data['view_name'] = 'home';
      $this->load->view('pengajuan/index_view', $data);
    }
  }

}
