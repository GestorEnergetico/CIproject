<?php
class Home extends CI_Controller {

  public function __construct(){
      parent::__construct();
  }

  public function index(){
    if($this->session->userdata('logged_in')){
      $session_data = $this->session->userdata('logged_in');
      $data['id'] = $session_data['id'];
      $data['fullname'] = $session_data['fullname'];
      $data['username'] = $session_data['username'];
      $this->load->view('home_view', $data);
    }else {
      redirect('login', 'refresh');
    }

    public function logout()
    {
      $this->session->unset_userdata('logged_in');
      $this->session->session_destroy();
      redirect(site_url('login'), 'refresh');
    }
  // function Home(){
    // loading model
  // }

  public function index(){
    $data = array();
    $this->load->model('Login_model');
    $data['result'] = $this->Login_model->custom_get();
    $page = "home_view";
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('templates/header', $data);
    $this->load->view('pages/home_view'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
  // public function alumnos($args){
  //
  //   $page = "pizza";
  //   $data['title'] = ucfirst($page); // Capitalize the first letter
  //   $this->load->view('templates/header', $data);
  //   $this->load->view('pages/'.$page, $data);
  //   $this->load->view('templates/footer', $data);
  // }
  // public function profesores($args){
  //   $page = "pizza";
  //   $data['title'] = ucfirst($page); // Capitalize the first letter
  //   $this->load->view('templates/header', $data);
  //   $this->load->view('pages/'.$page, $data);
  //   $this->load->view('templates/footer', $data);
  // }
}
