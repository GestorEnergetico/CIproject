<?php
class User_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }

  public function register_user($user){

    $this->db->insert('users', $user);
  }

  public function login_user($email,$pass){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email_user',$email);
    $this->db->where('password_user',$pass);

    if($query=$this->db->get()){
      return $query->row_array();
    }else{
      return false;
    }
  }

  public function email_check($email){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email_user',$email);
    $query=$this->db->get();

    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }

  }

}
