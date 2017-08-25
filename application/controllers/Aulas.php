<?php
class Aulas extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('aulas_model');
    $this->load->library('session');
    if(!$this->session->has_userdata("email_user")){
      redirect('/');
    }
  }

  public function index()  {
    $this->data = array();
    $this->data["result"] = $this->aulas_model->get_all();
    $this->data['middle'] = 'pages/admin/Aulas_list';
    $this->load->view('template',$this->data);
  }
}
