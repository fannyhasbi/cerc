<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

  public function getEventHome(){
    $this->db->limit(3);
    $q = $this->db->get('event');
    return $q->result();
  }

  public function getEvent(){
    $q = $this->db->get('event');
    return $q->result();
  }
}

/* End of file Event_model.php */
/* Location: ./application/models/Event_model.php */