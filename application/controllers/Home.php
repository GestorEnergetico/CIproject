<?php
class Home extends CI_Controller {

  public function __construct(){
      parent::__construct();
  }

  // function Home(){
    // loading model
  // }

  public function index(){
    $data = array();
    $this->load->model('Modulos_model');
    $data['result'] = $this->Modulos_model->custom_get();
    $page = "home";
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
  public function alumnos($args){

    $page = "pizza";
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
  public function profesores($args){
    $page = "pizza";
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}
