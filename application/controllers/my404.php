<?php
class My404 extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
  }

  public function index(){
    if($this->session->has_userdata("email_user")){
      switch ($this->session->role) {
        case 1:
        $tmp = "alumno";
        break;
        case 2:
        $tmp = "profesor";
        break;
        case 3:
        $tmp = "cordinador";
        break;
        case 10:
        $tmp = "administrador";
        break;
        default:
        $tmp = "alumno";
        break;
      }
      $this->output->set_status_header('404');
      $data = array();
      $data["tmp"] = $tmp;
      $this->load->view('pages/error_404', $data);
    }
  }
}
