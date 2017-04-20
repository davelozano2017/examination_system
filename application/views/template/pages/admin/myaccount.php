<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
foreach ($admin_data as $r):
  $udata = array(
    'id'     => $r->id, 'image'     => $r->image,
    'email'  => $r->email,'address' => $r->address,
    'gender' => $r->gender,'name'   => $r->name,
    'date'   => $r->date
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
            
            <form method="POST" enctype="multipart/form-data" 
            action="<?php echo$url?>execute/adminprofileupload/<?php echo$udata['id']?>"
            data-parsley-validate class="form-horizontal form-label-left input_mask">
              
              <div class="form-group"> 
                  <input type="file" class="form-control " name="userfile" size="20"  required>
              </div>
              
              

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="animated fadeInDown btn btn-dark pull-right"><i class="fa fa-arrow-up"></i> Upload</button>
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
                    <form method="POST" 
                    action="<?php echo$url?>execute/updateinfo/<?php echo$data['session_id']?>" data-parsley-validate class="form-horizontal form-label-left input_mask">
                    
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo$udata['name']?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo$udata['address']?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Gender</label>
                        <select class="form-control" name="gender" required>
                          <option value="<?php echo$udata['gender']?>"><?php echo$udata['gender']?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo$udata['email']?>" required>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="animated fadeInDown btn btn-dark pull-right"><i class="fa fa-check-circle"></i> Save Changes</button>
                      </div>
                    </div>
                             
                    </form>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <form method="POST" 
                    action="<?php echo$url?>execute/updateinfo/<?php echo$data['session_id']?>" data-parsley-validate class="form-horizontal form-label-left input_mask">

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>New Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" data-parsley-equalto="#password" name="cpassword" required>
                      </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-dark pull-right"><i class="fa fa-check-circle"></i> Save Changes</button>
                      </div>
                    </div>
                             
                    </form>

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
