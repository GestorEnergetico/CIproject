<?php

class Alumnos extends CI_Controller{

  function __construct(argument)
  {
    $this->load->helper('url');
    $this->load->model('user_model');
    $this->load->library('session');
  }

  public function index()  {
    $data = array();
    $this->load->model('Alumnos_model');
    $data["result"] = $this->Alumnos_model->get_all();
    $this->load->view('admin/Alumnos_list', $data);


    //     $conn = mysqli_connect($devadmin_lara, $devadmin_lara, $123456789, $dbname);
    // // Check connection
    //     if (!$conn) {
    //       die("Connection failed: " . mysqli_connect_error());
    //     }
    //
    //   $sql = "SELECT id, users, FROM Users";
    //   $result = mysqli_query($conn, $sql);
    //
    //   if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    //     }
    //   } else {
    //     echo "0 results";
    //   }
    //
    // mysqli_close($conn);
    //
    //   }
  }
}


?>
