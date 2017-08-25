<?php
class Profesores_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }

  public function get_all(){
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('fk_role', '2');
    $query = $this->db->get();
    return $result = $query->result_array();
  }

  public function get_id($id){
    $this->db->select('name_user, email_user, name_role');
    $this->db->from('users_data');
    $this->db->join('users', 'users.id_user = users_data.fk_user');
    $this->db->join('roles', 'roles.id_role = users.fk_role', 'left');
    $this->db->where('fk_user', $id);
    $query = $this->db->get();
    return $result = $query->result_array();
  }
}
