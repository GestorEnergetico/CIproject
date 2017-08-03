<?php

class modulos_model extends CI_Model {
  function modulos_model(){
    parent::__construct();
  }

  function custom_get() {
    $result = false;
    if ($this->db->simple_query('SELECT * FROM modulos')){
      // echo "Success!";
      $result = $query->result();
      // }else{
      // echo "Query failed!";
    }
    return $result;
  }
}
