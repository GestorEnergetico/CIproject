<?php
class Profesores extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('profesores_model');
    $this->load->library('session');
  }

  public function index()  {
    $this->data["result"] = $this->profesores_model->get_all();
    $this->data['middle'] = 'pages/admin/Profesores_list';
    $this->load->view('template',$this->data);
  }
}
