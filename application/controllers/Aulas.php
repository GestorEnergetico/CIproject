<?php
class Aulas extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Aulas_model');
    $this->load->library('session');
    if(!$this->session->has_userdata("email_user")){
      $this->session->set_flashdata('refer', $this->uri->uri_string());
      redirect('/login');
    }
  }
  public function index()  {
    $this->data["result"] = $this->Aulas_model->get_all();
    $this->data['middle'] = 'pages/admin/Aulas_list';
    $this->load->view('template',$this->data);
  }
  public function get_id($id)  {
    $this->data["result"] = $this->Aulas_model->get_id($id);
    $this->data['middle'] = 'pages/admin/Single_aula';
    $this->load->view('template',$this->data);
  }
//   function delete_id($id){
//     $this->data["result"] = $this->Aulas_model->del_id('Aulas');
//     $this->data['middle'] = 'pages/admin/Single_aula';
//     $this->load->view('template',$this->data);
// }
  public function delete_id($id){
    $this->load->model('Aulas_model');
    $this->mod1->row_delete();
    redirect($_SERVER['HTTP_REFERER']);
  }

}
