<?php
class Profes extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('profes_model');
    $this->load->library('session');
  }

  public function index()  {
    $data = array();
    $data["result"] = $this->profes_model->get_all();
    $this->load->view('pages/admin/profes_list', $data);
  }
}
