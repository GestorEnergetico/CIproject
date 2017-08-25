<?php
class Admin extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('admin_model');
    $this->load->library('session');
    if(!$this->session->has_userdata("email_user")){
      redirect('/');
    }
  }

  public function index()  {
    $data = array();
    $data["result"] = $this->alumnos_model->get_all();
    $this->data['middle'] = 'pages/admin/admin_list';
    $this->load->view('template',$this->data);
  }
