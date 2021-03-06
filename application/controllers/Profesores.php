<?php
class Profesores extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('profesores_model');
    $this->load->library('session');
    if(!$this->session->has_userdata("email_user")){
      $this->session->set_flashdata('refer', $this->uri->uri_string());
      redirect('/login');
    }
  }

  public function index()  {
    $this->data["result"] = $this->profesores_model->get_all();
    $this->data['middle'] = 'pages/admin/Profesores_list';
    $this->load->view('template',$this->data);
  }

  public function get_id($id)  {
    $this->data["result"] = $this->Profesores_model->get_id($id);
    $this->data['middle'] = 'pages/admin/Single_prof';
    $this->load->view('template',$this->data);
  }

  public function profile($id)  {
    $this->data["data_user"] = $this->profesores_model->get_id($id);
    $this->data['middle'] = 'pages/admin/Signle_prof';
    $this->load->view('template',$this->data);
  }
  public function edit_profile($id)  {
    $this->data["data_user"] = $this->profesores_model->get_id($id);
    $this->data['middle'] = 'pages/admin/Profesores_profile_edit';
    $this->load->view('template',$this->data);
  }
  public function new_profesores()  {
    $this->data['middle'] = 'pages/admin/Profesores_new';
    $this->load->view('template',$this->data);
  }
  public function edit($id)  {
    $this->data["result"] = $this->profesores_model->get_id($id);
    $this->data['middle'] = 'pages/admin/Profesores_create';
    $this->load->view('template',$this->data);
  }
  public function delete($id)  {
    $this->data["result"] = $this->profesores_model->del_id($id);
    $this->data["msg_box"] = "Ha habido un error";
    if($this->data["result"] == true){
      $this->data["msg_box"] = "Se ha eliminado correctamente";
      // $this->load->view('pages/admin/Alumnos_list', $this->data);
      // redirec
    }
  }
}
