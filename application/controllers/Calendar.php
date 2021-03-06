<?php
class Calendar extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Calendar_model');
    $this->load->library('session');
    if(!$this->session->has_userdata("email_user")){
      $this->session->set_flashdata('refer', $this->uri->uri_string());
      redirect('/login');
    }
  }

  public function index()  {
    $this->data["result"] = $this->Calendar_model->get_all();
    $this->data['middle'] = 'pages/admin/Calendar_list';
    $this->load->view('template',$this->data);
  }
  public function get_id($id,$editions=false,$courses=false)  {
    $this->data["editions"] = ($editions!=false)? $this->Calendar_model->get_editions($editions):false;
    $this->data["courses"] = ($courses!=false)? $this->Calendar_model->get_courses($courses):false;
    $this->data["years"] = $this->Calendar_model->get_years();
    $this->data['middle'] = 'pages/admin/Single_calendar';
    $this->load->view('template',$this->data);
  }

}
