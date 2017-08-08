<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Area</title>

    <!-- Bootstrap -->
    <link href"=<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- LOGIN -->
    <div class="container" style="margin-top:100px;">

      <div class="row">
        <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">

                <?php if (validation_error()){
                }
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" name="button" class="close" data-dismiss="alert" aria-label="true">&times;<span></span>
                  </button>
                  <strong><?php echo validation_error(); ?></strong>
                </div>

                <?php
                  echo form_open('login','class="myclass"');
                 ?>

                  <div class="form-group">
                    <?php
                      echo from_label('Username'.'username');
                      echo from_input('username','','class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"');
                     ?>

                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>

                 <div class="form-group">
                   <?php
                     echo from_label('Password'.'password');
                     echo from_password('password','','class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"');
                    ?>
                 </div>
                  <?php echo form-submit('login', 'Login', 'class="btn btn-primary"')?>
                  <a href="<?php echo site_url('login/register') ?>" class="btn btn-link">Sing up</a>
                 <?php echo form_close() ; ?>

              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"</script>
  </body>
</html>
