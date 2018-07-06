<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club_model extends CI_Model {
  public function get($club_slug){
    $q = $this->db->get_where('club', ['slug' => $club_slug]);
    return $q->row();
  }
  

}
