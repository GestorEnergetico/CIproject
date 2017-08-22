<?php

class Alumnos extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('alumnos_model');
    $this->load->library('session');
  }

  public function index()  {
    $data = array();
    $data = array();
    $this->load->view('pages/admin/Alumnos_list', $data);
  }

  public function create()  {
    $data["result"] = $this->alumnos_model->get_all();
    $this->load->view('pages/admin/Alumnos_create', $data);
  }
  public function edit($id)  {
    $data["result"] = $this->alumnos_model->get_id($id);
    $this->load->view('pages/admin/Alumnos_create', $data);
  }
  public function delete($id)  {
    $data["result"] = $this->alumnos_model->del_id($id);
    $data["msg_box"] = "Ha habido un error";
    if($data["result"] == true){
      $data["msg_box"] = "Se ha eliminado correctamente";
      // $this->load->view('pages/admin/Alumnos_list', $data);
      // redirec
    }
  }

  public function adduser()
  {
    $this->load->library('form_validation');
    $this->load->helper('security');
    $this->form_validation->set_rules('user_name','User_name','required|min_length[4]|trim|callback_users_exist|xss_clean');
    $this->form_validation->set_rules('user_email','User_email','trim|required|min_length[6]|max_length[50]|matches[password_conf]|md5|trim|xss_clean');
    $this->form_validation->set_rules('user_password','User_password','trim|required|min_length[6]|max_length[50]|matches[password_conf]|md5|trim|xss_clean');
  }
  public function users_exists()
  {
    $this->load->model('model_emp');
    if ($this->model_emp->users_exists())
    {
      return true;
    }else
    {
      $this->form_validation->set_message('users_exists','User Already Existed.');
      return false;
    }
  }
}
