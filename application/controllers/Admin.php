<?php
class Admin extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('admin_model');
    $this->load->library('session');
  }

  public function index()  {
    $data = array();
    $data["result"] = $this->alumnos_model->get_all();
    $this->load->view('pages/admin/admin_list', $data);
  }
