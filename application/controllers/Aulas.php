<?php
class Aulas extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Aulas_model');
    $this->load->library('session');
  }

  public function index()  {
    $this->data["result"] = $this->Aulas_model->get_all();
    $this->data['middle'] = 'pages/admin/Aulas_list';
    $this->load->view('template',$this->data);
  }

  public function get_id($id)  {
    $this->data["result"] = $this->aulas_model->get_id($id);
    $this->data['middle'] = 'pages/admin/Single_aula';
    $this->load->view('template',$this->data);
  }



}
