<?php

class Settings extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('settings_model');
    $this->load->library('session');
  }

  public function index(){
    $this->data = array();
    $this->data['middle'] = 'pages/admin/Settings_index';
    $this->load->view('template',$this->data);
  }

  public function editions() {
    $this->data = array();
    $this->data["result"] = $this->settings_model->get_editions();
    $this->data['middle'] = 'pages/admin/Settings_editions';
    $this->load->view('template',$this->data);
  }
  public function services() {
    $this->data = array();
    $this->data["result"] = $this->settings_model->get_services();
    $this->data['middle'] = 'pages/admin/Settings_services';
    $this->load->view('template',$this->data);
  }

  public function add_editions() {
    $this->data = array();
    $this->data['middle'] = 'pages/';
    $this->load->view('template',$this->data);
    // $editions=array(
    //   'user_name'=>$this->input->post('user_name'),
    //   'user_email'=>$this->input->post('user_email'),
    //   'user_password'=>md5($this->input->post('user_password')),
    //   'user_age'=>$this->input->post('user_age'),
    //   'user_mobile'=>$this->input->post('user_mobile')
    // );
  }

  public function add_services() {
    $this->data = array();
    $this->load->view('pages/', $this->data);
    // $this->load->library('form_validation');
    // $this->load->helper('security');
    // $this->form_validation->set_rules('id_servicio','Id_servicio','required|min_length[4]|trim|callback_users_exist|xss_clean');
    // $this->form_validation->set_rules('name_service','Name_service','required|min_length[4]|trim|callback_users_exist|xss_clean');
    // $this->form_validation->set_rules('price_service','Price_service','required|min_length[4]|trim|callback_users_exist|xss_clean');
  }
}
