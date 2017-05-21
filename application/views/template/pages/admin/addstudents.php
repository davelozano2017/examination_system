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
            <form method="POST" name="student" class="form-horizontal" novalidate>
              
              <div class="form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>Student Name 
                  <b ng-messages="student.name.$error" ng-if="student.name.$dirty">
                    <strong ng-message="required" class="label label-danger" >name is required.</strong>
                  </b>
                  </label>
                  <input type="text" class="form-control" name="name" id="name" ng-model="name" required >
                </div>              
              </div>
              
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>Student Email
                  <b ng-messages="student.email.$error" ng-if="student.email.$dirty">
                    <strong ng-message="pattern" class="label label-danger" >Please enter a valid email address.</strong>
                    <strong ng-message="required" class="label label-danger" >Email Address is required.</strong>
                  </b>
                  </label>
                  <input type="email" class="form-control" name="email" id="email" ng-model="email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>Student Address
                  <b ng-messages="student.address.$error" ng-if="student.address.$dirty">
                    <strong ng-message="required" class="label label-danger" >Address is required.</strong>
                  </b>
                  </label>
                  <input type="text" class="form-control" name="address" id="address" ng-model="address" required >
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label>Student Gender
                  <b ng-messages="student.gender.$error" ng-if="student.gender.$dirty">
                    <strong ng-message="required" class="label label-danger" >Gender is required.</strong>
                  </b>
                  </label>
                  <select class="form-control select2" name="gender" style="width:100%" id="gender" ng-model="gender" required>
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" id="addstudent" ng-disabled="!student.$valid"  class="btn btn-dark pull-right flat"><i class="fa fa-check-circle"></i> Submit</button>
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

