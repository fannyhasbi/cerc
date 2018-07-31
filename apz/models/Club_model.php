<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club_model extends CI_Model {
  public function get($club_slug){
    $q = $this->db->get_where('club', ['slug' => $club_slug]);
    return $q->row();
  }
  
  public function update($club_slug){
    $this->db->where('slug', $club_slug);
    
    $data = array(
      'ket' => purify($this->input->post('ket'))
    );

    $this->db->update('club', $data);
  }
}
