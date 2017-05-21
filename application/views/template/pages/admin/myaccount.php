<?php 
$errors = $this->session->flashdata('errors');
$path = 'template/pages/admin/myaccount-form';
include 'notification-system.php';
foreach ($admin_data as $r):
  $udata = array(
    'id'     => $r->id,     'image'   => $r->image,
    'email'  => $r->email,  'address' => $r->address,
    'gender' => $r->gender, 'name'    => $r->name,
    'date'   => $r->date ,  'role'    => $r->role
    );
endforeach;
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-pencil"></i> My Account</h3>
    </div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
          <?php 
          $errors = $this->session->flashdata('errors');
          if($errors):
          echo '<div class="alert alert-danger">'.$errors.'</div>';
          endif;?>
          </div>
      <div class="col-md-5 col-xs-12">
        <div class="x_panel">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <img style="width:144px;height:144px;margin:auto" 
            class="img-responsive img-circle profile_img" src="<?php echo$udata['image']?>">
                <h3 class="text-center"><?php echo$udata['name']?></h3>
                <h4 class="text-center"><?php echo$udata['email']?></h4>

          </div>
          <div class="x_content">
            <!-- start -->
            
            <ul class="list-inline ">

              <ul class="list-inline count2">
                <span class="text-danger">Address:</span>
                <span class="pull-right text-primary"><?php echo$udata['address']?></span>
              </ul>

              <ul class="list-inline count2">
                <span class="text-danger">Gender:</span>
                <span class="pull-right text-primary"><?php echo$udata['gender']?></span>
              </ul>

              <ul class="list-inline count2">
                <span class="text-danger">Membership:</span>
                <span class="pull-right text-primary"><?php echo$udata['date']?></span>
              </ul>
            </ul>
            <!--  -->
            <form method="POST" name="upload" action="<?= site_url('execute/adminprofileupload/'.$udata['id'].'')?> " enctype="multipart/form-data"  class="form-horizontal" novalidate>
              
              <div class="form-group"> 
                <b ng-messages="upload.userfile.$error" ng-if="upload.userfile.$dirty">
                  <strong ng-message="required" class="label label-danger" >name is required.</strong>
                </b>
                  <input type="hidden" class="form-control" id="fullpath" name="userfile" ng-model="userfile" required>
                  <input type="file" class="form-control" id="userfile" name="userfile"  size="20" required>
              </div>
              
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="submit" ng-disabled="!upload.$valid" id="upl" class="btn btn-dark pull-right flat"><i class="fa fa-arrow-up"></i> Upload</button>
              </div>
            </div>
                     
            </form>

            <!-- end -->

              </div>
            </div>
          </div>

      <div class="col-md-7 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

            <!-- start -->
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs " role="tablist">
                  <li role="presentation" class="active truncate "><a  href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">
                  <i class="fa fa-pencil "></i> User Information</a>
                  </li>
                  <li role="presentation" class="truncate" ><a style="text-overflow: ellipsis !important;" href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
                  <i class="fa fa-lock"></i> Change Passwor</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                  <?php $this->load->view($path.'info') ?>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  <?php 
                  $this->load->view($path.'password');
                   ?>

                  </div>


                </div>
              </div>
            <!-- end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   

