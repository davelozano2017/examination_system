<?php 
if(isset($data['role'])):
$errors = $this->session->flashdata('errors');

  if($data['role'] == 0) { redirect('dashboard'); } 
  if($data['role'] == 1) { redirect('profile'); } 
endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="text/css" href="<?php echo$url?>assets/uploads/logo.png">

    <title>Examination System</title>
    <style type="text/css">.flat{border-radius: 0px !important}</style>
    <!-- Bootstrap -->
    <link href="<?php echo $url?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $url?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $url?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo $url?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- sweet alert -->
    <link rel="stylesheet" type="text/css" href="<?php echo$url?>assets/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo$url?>assets/sweetalert/themes/twitter/twitter.css">
      <!-- sweet alert -->
    <script type="text/javascript" src="<?php echo$url?>assets/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="<?php echo $url?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="<?php echo $url?>assets/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?php echo $url?>assets/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?php echo $url?>assets/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">

        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" ng-app="app" name="login" novalidate>
              <h1>Login Form</h1>

              <div class="form-group"> 
                <b ng-messages="login.username.$error" ng-if="login.username.$dirty" class="pull-left" style="margin-bottom: 3px">
                  <strong ng-message="required" class="label label-danger">Username is required.</strong>
                </b>
                <input type="text" placeholder="Username" class="form-control flat" name="username" id="username" ng-model="username" required >
              </div>

              <div class="form-group">
                <b ng-messages="login.password.$error" ng-if="login.password.$dirty" class="pull-left" style="margin-bottom: 3px">
                  <strong ng-message="required" class="label label-danger">Password is required.</strong>
                </b>
                <input type="password" class="form-control flat" placeholder="••••••••" ng-model="password" name="password" required>
              </div>

              <div><button type="submit" id="login" name="submit" ng-disabled="!login.$valid"   class="btn btn-dark col-md-12 col-xs-12 flat">Login <i class="fa fa-arrow-right"></i></button></div>
              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <h1>Online Examination System</h1>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
    <!-- jQuery -->
    <script src="<?php echo $url?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Functions -->
    <script src="<?php echo$url?>assets/functions/execute.js"></script>
    <!-- Angular -->
    <script src="<?php echo$url?>assets/angular/1.4.8.angular.min.js"></script>
    <script src="<?php echo$url?>assets/angular/1.4.2.angular.min.js"></script>
    <!-- PNotify -->
    <script src="<?php echo$url?>assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?php echo$url?>assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?php echo$url?>assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <script type="text/javascript">
    var app = angular.module('app', ['ngMessages']);
    login()
    </script>

</html>
