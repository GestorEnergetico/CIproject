<?php

class User extends CI_Controller{

  public function __construct(){

    parent::__construct();
    $this->load->helper('url');
    $this->load->model('user_model');
    $this->load->library('session');
  }
  public function index(){
    if($this->session->has_userdata("email_user")){
      $this->data['middle'] = 'pages/Dashboard.php';
      $this->load->view('template',$this->data);
    }else {
      $this->session->set_flashdata('refer', $this->uri->uri_string());
      $this->load->view("pages/Login.php");
    }
  }
  public function create(){
  }
  public function edit(){
  }
  public function delete(){
  }
  public function register_user(){

    $user=array(
      'email_user'=>$this->input->post('user_email'),
      'password_user'=>md5($this->input->post('user_password')),
      'passphrase_user'=>$this->input->post('user_password'),
      'fk_role'=>$this->input->post('fk_role')
    );

    $email_check=$this->user_model->email_check($user['email_user']);

    if($email_check){
      $this->user_model->register_user($user);
      $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      redirect('/alumnos');

    }else{
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect('/alumnos/create');
    }
  }
  public function login(){
    if($this->input->post()){
      $user_login=array(
        'email_user'=>$this->input->post('user_email'),
        'password_user'=>md5($this->input->post('user_password')),
        'passphrase_user'=>$this->input->post('user_password')
      );
      $data=$this->user_model->login_user($user_login['email_user'],$user_login['password_user']);

      if($data){
        $this->session->set_userdata('id_user',$data['id_user']);
        $this->session->set_userdata('email_user',$data['email_user']);
        $this->session->set_userdata('passphrase_user',$data['passphrase_user']);
        $this->session->set_userdata('role',$data['fk_role']);
        // view
        $u = $this->input->post('refer');
        if(!isset($u)){
          $u = '/';
        }
        redirect($u);
      }else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        // view
        $this->load->view("pages/Login.php");
      }
    }else{
      $this->load->view("pages/Login.php");
    }

  }
  function user_profile(){
    $this->load->view('pages/Profile.php');

  }
  function alumnos($id){
    // $this->load->view('pages/Profile.php');
  }
  public function user_logout(){
    $this->session->sess_destroy();
    redirect('/', 'refresh');
  }
}
