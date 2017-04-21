<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $res['page_title']?></title>
    <!-- Bootstrap -->
    <link href="<?php echo $url?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $url?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $url?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- sweet alert -->
    <link rel="stylesheet" type="text/css" href="<?php echo$url?>assets/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo$url?>assets/sweetalert/themes/twitter/twitter.css">
      <!-- sweet alert -->
    <script type="text/javascript" src="<?php echo$url?>assets/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="<?php echo $url?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo $url?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?php echo $url?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Animate.css -->
    <link href="<?php echo base_url();?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>
<!-- 
  <style type="text/css">

  .truncate{
  width:45%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style> -->

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title">
              <a href="#" class="site_title"><span><?php echo $res['title']?></span></a>
            </div>

            <div class="clearfix"></div>
      