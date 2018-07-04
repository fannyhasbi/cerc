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

  public function index(){
    if($this->input->post('ajukan')){
      $this->load->model('pengajuan_model');

      $alamat = $this->generateAlamat();

      $config['upload_path']   = './uploads/proposals/';
      $config['file_name']     = $alamat;
      $config['allowed_types'] = 'zip|rar';
      $config['max_size']      = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('file')){
        $message = '<p>'. $this->upload->display_errors() .'</p>';
        $this->session->set_flashdata('msg', $message);
        $this->session->set_flashdata('type', 'danger');
      }
      else {
        $data = $this->upload->data();

        $id_pemohon = $this->pengajuan_model->addPemohon();
        $this->pengajuan_model->addPengajuan($id_pemohon, $data['file_name']);

        $this->session->set_flashdata('msg', 'Berhasil. Terima kasih telah mengirimkan pengajuan, silahkan tunggu konfirmasi dari kami.');
        $this->session->set_flashdata('type', 'success');
      }

      redirect(site_url('pengajuan'));
    }
    else {
      $data['view_name'] = 'home';
      $this->load->view('pengajuan/index_view', $data);
    }
  }

}
