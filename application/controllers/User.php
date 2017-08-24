<?php
/**
*
*/
interface test
{
  public function index();
  public function create();
  public function edit();
  public function delete();

}

class User extends CI_Controller implements test {

  public function __construct(){

    parent::__construct();
    $this->load->helper('url');
    $this->load->model('user_model');
    $this->load->library('session');
  }
  public function index(){
    if($this->session->has_userdata("user_email")){
      $this->data['middle'] = 'pages/Dashboard.php';
      $this->load->view('template',$this->data);
    }else{
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
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
    );
    // print_r($user);

    $email_check=$this->user_model->email_check($user['user_email']);

    if($email_check){
      $this->user_model->register_user($user);
      $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      redirect('user/login');

    }else{
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect('user');
    }
  }

  public function login(){
    if($this->input->post()){
      $user_login=array(
        'user_email'=>$this->input->post('user_email'),
        'user_password'=>md5($this->input->post('user_password'))
      );
      $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data){
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
        // view
        $this->load->view('pages/Login.php');
      }else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        // view
        $this->load->view("pages/Login.php");
      }
    }else{
      $this->load->view("pages/Login.php");
    }

  }
  // public function login_view(){
  //   $this->load->view("pages/Login.php");
  // }
  //
  // function login_user(){
  //   $user_login=array(
  //     'user_email'=>$this->input->post('user_email'),
  //     'user_password'=>md5($this->input->post('user_password'))
  //   );
  //   $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
  //   if($data){
  //     $this->session->set_userdata('user_id',$data['user_id']);
  //     $this->session->set_userdata('user_email',$data['user_email']);
  //     $this->session->set_userdata('user_name',$data['user_name']);
  //     $this->session->set_userdata('user_age',$data['user_age']);
  //     $this->session->set_userdata('user_mobile',$data['user_mobile']);
  //     // view
  //     $this->load->view('pages/Profile.php');
  //   }else{
  //     $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  //     // view
  //     $this->load->view("pages/Login.php");
  //   }
  // }

  function user_profile(){
    $this->load->view('pages/Profile.php');

  }
  function alumnos($id){
    // $this->load->view('pages/Profile.php');
  }

  public function user_logout(){
    $this->session->sess_destroy();
    redirect('user/login', 'refresh');
  }

}
