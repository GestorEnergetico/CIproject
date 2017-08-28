<?php
class Aulas_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }

  public function get_all(){
    $this->db->select('*');
    $this->db->from('aulas');
    $this->db->where('fk_role', '1');
    $query = $this->db->get();
    return $result = $query->result_array();
}

}
