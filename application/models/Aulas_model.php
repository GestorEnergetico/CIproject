<?php
class Aulas_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }

  public function get_all(){
    $this->db->select('id_course, name_module');
    $this->db->from('courses');
    $this->db->join('modules', 'courses.fk_module = modules.id_module', 'left');
    $query = $this->db->get();
    return $result = $query->result_array();
}

  public function get_id($id){
    $this->db->select('id_course, name_module');
    $this->db->from('courses');
    $this->db->join('modules', 'courses.fk_module = modules.id_module', 'left');
    $this->db->where('courses.id_course', $id);
    $query = $this->db->get();
    return $result = $query->result_array();
  }

  function delete_id($id){
    $this->db->where('id', $id);
    $this->db->delete('aulas');
  }

}
