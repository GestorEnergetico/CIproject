<div class="login-panel panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Add Alumnos</h3>
  </div>
  <div class="panel-body">

    <?php
    $error_msg=$this->session->flashdata('error_msg');
    if($error_msg){
      echo $error_msg;
    }
    ?>

    <form role="form" method="post" action="<?php echo base_url('/user/register_user'); ?>">
      <fieldset>
        <div class="form-group">
          <input class="form-control" placeholder="Name" name="user_name" type="text" autofocus>
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="E-mail" name="user_email" type="email" required autofocus>
        </div>

        <div class="form-group">
          <input class="form-control" placeholder="Password" name="user_password" type="password" required value="">
        </div>

        <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
      </fieldset>
    </form>
    <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('/user/login_view'); ?>">Login here</a></center><!--for centered text-->
  </div>
</div>
