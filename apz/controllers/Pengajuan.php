<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    if($this->input->post('ajukan')){
      $this->load->model('pengajuan_model');

      $id_pemohon = $this->pengajuan_model->addPemohon();
      $this->pengajuan_model->addPengajuan($id_pemohon);

      $this->session->set_flashdata('msg', 'Berhasil. Terima kasih telah mengirimkan pengajuan, silahkan tunggu konfirmasi dari kami.');
      $this->session->set_flashdata('type', 'success');

      redirect(site_url('pengajuan'));
    }
    else {
      $data['msg'] = $this->session->flashdata('msg');
      $data['type']= $this->session->flashdata('type');
      $data['view_name'] = 'home';
      $this->load->view('pengajuan/index_view', $data);
    }
  }

}
