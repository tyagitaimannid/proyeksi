<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css" media="screen" title="default" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
 
<!-- Start: login-holder -->


  <!-- start logo -->
  
  
  <!--  start loginbox ................................................................................. -->
<!-- End: login-holder -->
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class="container">
    <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">
         <h1 class="title">SI Jadwal</h1>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Admin Login</h3>
            <center><?php echo validation_errors(); ?></center><br> <!-- menampilkan pesan error -nya -->
            <center><?php echo form_open('login'); ?></center>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form">
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Username" name="username" id="username" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="" onfocus="this.value">
              </div>
              <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                  </label>
                </div>
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/si_lab/assets/js/bootstrap.min.js"></script>

</body>
</html>