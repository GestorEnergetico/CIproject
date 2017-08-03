<?php

class Modulos_model extends CI_Model {

  public function __construct(){
      parent::__construct();
  }

  function custom_get() {
    $result = false;
    if ($this->db->simple_query('SELECT * FROM modulos')){
      // echo "Success!";
      $result = $this->db->result();
      // }else{
      // echo "Query failed!";
    }
    return $result;
  }
}
