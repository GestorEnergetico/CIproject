<?php
class Calendar extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Calendar_model');
    $this->load->library('session');
  }

  public function index()  {
    $this->data["result"] = $this->Aulas_model->get_all();
    $this->data['middle'] = 'pages/admin/Calendar_list';
    $this->load->view('template',$this->data);
  }
