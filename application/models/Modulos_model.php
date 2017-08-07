<?php

class Modulos_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  function custom_get() {
    // $result = false;/
    // interactua con la DB
    $res = $this->db->query("SELECT * FROM modulos;");
    // echo "Success!";
    // }else{
    // echo "Query failed!";
    return $res->result_array();
  }
}
