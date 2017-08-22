<?php
class Aulas extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('aulas_model');
    $this->load->library('session');
  }

  public function index()  {
    $data = array();
    $data["result"] = $this->aulas_model->get_all();
    $this->load->view('pages/admin/Aulas_list', $data);
  }
}
