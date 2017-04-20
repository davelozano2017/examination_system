<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-user-plus"></i> New Students</h3>
    </div>


    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> Student Information</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->

            <?php if($errors):
            echo '<div class="alert alert-danger">'.$errors.'</div>';
            endif;
            ?>
            <form method="POST" action="<?php echo$url?>execute/add_student" data-parsley-validate class="form-horizontal form-label-left input_mask">
              
              <div class="form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>Student Name</label>
                  <input type="text" class="form-control " name="name"  required>
                </div>              
              </div>
              
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>Student Email</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>Student Address</label>
                  <input type="text" class="form-control" name="address" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label>Student Gender</label>
                  <select class="form-control" name="gender" style="width:100%" required>
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>

              


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" class="animated fadeInDown btn btn-dark pull-right"><i class="fa fa-check-circle"></i> Submit</button>
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
