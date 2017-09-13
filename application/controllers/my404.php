<?php
class My404 extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
  }

  public function index(){
    if($this->session->has_userdata("email_user")){
      $this->data['session'] = $this->session->userdata();
      $this->output->set_status_header('404');
      $this->data['middle'] = 'pages/error_404';
      $this->load->view('template',$this->data);
    }
  }
}
