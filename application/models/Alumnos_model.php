<?php
class Alumnos_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }

  public function get_all(){
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('fk_role', '1');
    $query = $this->db->get();
    return $result = $query->result_array();
  }
  public function get_id($id){
    $this->db->select('*');
    $this->db->from('users_data');
    $this->db->join('users', 'users.id_user = users_data.fk_user');
    $this->db->where('fk_user', $id);
    $query = $this->db->get();
    return $result = $query->result_array();
  }

  public function addusers(){
     $array=array('Username'=>$_POST['Username'],'user_email'=>$_POST['user_email'],'password'=>$_POST['Password']);
     $this->db->set($array);
     $query=$this->db->insert('user');
      return $query;
    }

    public function users_exists(){
        $this->db->where('Username', $this->input->post('Username'));
        $query = $this->db->get('employee');
        if($query->num_rows() == 1){
            return false;
        } else {
            return true;
        }

}
}
