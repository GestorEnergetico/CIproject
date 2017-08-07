<?php

class Login extends CI_Controller {

  public function __construct(){
      parent::__construct();
  }

  public function index(){
    $data = array();
    $this->load->model('Login_view');
  }
}
?>
