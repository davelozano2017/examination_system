<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-pencil"></i> My Account</h3>
    </div>


    <div class="row">
      
      <div class="col-md-5 col-xs-12">
        <div class="x_panel">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <img style="width:144px;height:144px;margin:auto" class="img-responsive img-circle profile_img" src="<?php echo$data['image']?>">
                <h3 class="text-center"><?php echo$data['name']?></h3>
                <h4 class="text-center"><?php echo$data['email']?></h4>

          </div>
          <div class="x_content">
            <!-- start -->
            
            <ul class="list-inline ">

              <ul class="list-inline count2">
                <span class="text-danger">Address:</span>
                <span class="pull-right text-primary"><?php echo$data['address']?></span>
              </ul>

              <ul class="list-inline count2">
                <span class="text-danger">Gender:</span>
                <span class="pull-right text-primary"><?php echo$data['gender']?></span>
              </ul>

              <ul class="list-inline count2">
                <span class="text-danger">Membership:</span>
                <span class="pull-right text-primary"><?php echo$data['date']?></span>
              </ul>
            </ul>
            
            <form method="POST" data-parsley-validate class="form-horizontal form-label-left input_mask">
              
              <div class="form-group"> 
                  <input type="file" class="form-control " name="image" required>
              </div>
              
              

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-dark pull-right"><i class="fa fa-arrow-up"></i> Upload</button>
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
            <div class="x_title">
              <h2><i class="fa fa-pencil"></i> User Information</h2>
            <div class="clearfix"></div>
            </div>
            <!-- start -->
            <form method="POST" data-parsley-validate class="form-horizontal form-label-left input_mask">
            
            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label>Name</label>
                <input type="text" class="form-control" name="address" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label>Address</label>
                <input type="text" class="form-control" name="address" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label>Email</label>
                <input type="email" class="form-control" name="address" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label>New Password</label>
                <input type="text" class="form-control" name="address" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label>Confirm New Password</label>
                <input type="text" class="form-control" name="address" required>
              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-dark pull-right"><i class="fa fa-check-circle"></i> Save Changes</button>
              </div>
            </div>
                     
            </form>

            <!-- end -->

            
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>   
