<?php

class Login_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }
  function login($username, $password) {
    $this->db->select('id,fullname,username,password');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->limit(1);

    $query = $this->db->get();
    if ($query->num_rows()==1) {
      return $query->result();
    }else  {
      return false;
    }
  }
  funciotn register(){
    $fn = $this->input->post('fullname');
    $un = $this->input->post('username');
    $pw = $this->input->post('password');
      $data = array('id' => , 'fullname' => $fn, 'username' => $un, 'password' => $pw);
      $this->db->insert('user', $data);
  }
}
