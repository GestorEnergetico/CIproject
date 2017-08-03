<?php

class Modulos_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  function custom_get() {
    $result = false;
    $res = $this->db->simple_query('SELECT * FROM modulos');
    // echo "Success!";
    $result = $res->result_array();
    // }else{
    // echo "Query failed!";

    return $result;
  }
}
