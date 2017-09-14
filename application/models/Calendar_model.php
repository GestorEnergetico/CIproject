<?php
class Calendar_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }

  public function get_all(){
    $this->db->select('id_calendar, name_calendar');
    $this->db->from('calendars');
    // $this->db->join('modules', 'courses.fk_module = modules.id_module', 'left');
    $query = $this->db->get();
    return $result = $query->result_array();
}
public function get_id($id){
  $this->db->select('id_calendar, name_calendar');
  $this->db->from('calendars');
  // $this->db->join('modules', 'courses.fk_module = modules.id_module', 'left');
  // $this->db->where('courses.id_course', $id);
  $query = $this->db->get();
  return $result = $query->result_array();
}
/*custom calendar*/
public function get_years(){
  $this->db->select('year_edition');
  $this->db->from('editions');
  $this->db->group_by("year_edition");
  $query = $this->db->get();
  return $result = $query->result_array();
}
public function get_editions($id){
  $this->db->select('editions.id_edition,editions.year_edition,editions.month_edition,services.name_service');
  $this->db->from('editions');
  $this->db->join('services', 'services.id_service = editions.fk_service', 'left');
  $this->db->where('editions.id_edition', $id);
  $query = $this->db->get();
  return $result = $query->result_array();
}
public function get_courses($id){
  $this->db->select('id_calendar, name_calendar');
  $this->db->from('calendars');
  // $this->db->join('modules', 'courses.fk_module = modules.id_module', 'left');
  // $this->db->where('courses.id_course', $id);
  $query = $this->db->get();
  return $result = $query->result_array();
}




}
