<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/master_login.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
  <?php
  $success_msg= $this->session->flashdata('success_msg');
  $error_msg= $this->session->flashdata('error_msg');


  ?>
  <div class="content_login flex">
    <div class="box">
      <img style="max-width:120px;" src="assets/img/gestor-energetico-logo.png" alt="Logo Gestor Energético">
      <div class="login">
        <form  action="<?php echo base_url('/login'); ?>" method="post">
          <label><i class="fa fa-user" aria-hidden="true"></i> <input type="text" placeholder="Username" name="user_email" value=""></label>
          <label><i class="fa fa-lock" aria-hidden="true"></i> <input type="password" placeholder="Password" name="user_password" value=""></label>
          <button type="submit" name="button">Log in</button>
        </form>
      </div>
      <?php
      if($success_msg){
        ?>
        <div class="alert alert-success">
          <?php echo $success_msg; ?>
        </div>
        <?php
      }
      if($error_msg){
        ?>
        <div class="alert alert-danger">
          <?php echo $error_msg; ?>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</body>
</html>
<!-- based in: https://cdn.elegantthemes.com/blog/wp-content/uploads/2016/06/divi-login-page-5.jpg -->
