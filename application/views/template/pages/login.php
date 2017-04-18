<?php 
if(isset($data['role'])):
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

    <title>Examination System</title>

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
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">

        <div class="animate form login_form">
          <section class="login_content">
            <?php include 'notify.php';?>
            <form method="POST" action="<?php echo$url?>execute/login">
              <h1>Login Form</h1>
              <div><input type="text" class="form-control" placeholder="Username" name="username"/></div>
              <div><input type="password" class="form-control" placeholder="Password" name="password"/></div>
              <div><button type="submit" name="submit" class="btn btn-dark col-md-12 col-xs-12">Login <i class="fa fa-arrow-right"></i></button></div>
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
</html>
