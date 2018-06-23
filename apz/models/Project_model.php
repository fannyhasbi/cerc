<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {
  public function getProjectHome(){
    $this->db->limit(3);
    $this->db->order_by('selesai', 'DESC');
    $q = $this->db->get('project');
    return $q->result();
  }
  

}
