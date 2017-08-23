<?php
class Settings_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }
  // public function get_all(){
  //   $this->db->select('*');
  //   $this->db->from('users');
  //   $this->db->where('fk_id_rols_users', '1');
  //   $query = $this->db->get();
  //   return $result = $query->result_array();
  // }

  public function get_editions(){
    $this->db->select('*');
    $this->db->from('editions');
    $query = $this->db->get();
    return $result = $query->result_array();
  }

  public function get_services(){
    $this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
    return $result = $query->result_array();
  }

  public function add_editions(){
     $array=array('Username'=>$_POST['Username'],'user_email'=>$_POST['user_email'],'password'=>$_POST['Password']);
     $this->db->set($array);
     $query=$this->db->insert('user');
      return $query;
    }
    public function add_services(){
       $array=array('Username'=>$_POST['Username'],'user_email'=>$_POST['user_email'],'password'=>$_POST['Password']);
       $this->db->set($array);
       $query=$this->db->insert('user');
        return $query;
      }

}
