<?php
class Admin extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('admin_model');
    $this->load->library('session');
    if(!$this->session->has_userdata("email_user")){
      $this->session->set_flashdata('refer', $this->uri->uri_string());
      redirect('/login');
    }
  }

  public function index()  {
    $data = array();
    $data["result"] = $this->alumnos_model->get_all();
    $this->data['middle'] = 'pages/admin/admin_list';
    $this->load->view('template',$this->data);
  }
