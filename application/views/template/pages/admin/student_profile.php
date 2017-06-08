<?php 
foreach ($student_info as $r):
  $udata = array(
    'id'     => $r->id,     'image'   => $r->image,
    'email'  => $r->email,  'address' => $r->address,
    'gender' => $r->gender, 'name'    => $r->name,
    'date'   => $r->date, 'username' => $r->username,
    );
endforeach;
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-user"></i> Student Profile</h3>
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

              <ul class="list-inline count2">
                <span class="text-danger">Username:</span>
                <a data-toggle="tooltip" data-placement="top" 
                    title="copy"  href="#" onclick="copyToClipboard('#p2')" 
                class="pull-right"><i class="fa fa-copy fa-fw"></i></a>
                <span id="p2" class="pull-right text-primary"><?php echo$udata['username']?></span>


              </ul>
            </ul>

            <div class="ln_solid"></div>
            <div class="form-group">
                <a href="<?php echo$url?>viewstudents" class="btn btn-primary pull-right flat"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

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
                  <li role="presentation" class="active"><a  href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">
                  <i class="fa fa-pencil "></i> User Information</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <form method="POST" name="profilestudent" class="form-horizontal" novalidate>
                    
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Name
                        <b ng-messages="profilestudent.name.$error" ng-if="profilestudent.name.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                        </b>
                        </label>
                        <input type="hidden" id="id" class="form-control" name="id" value="<?php echo$udata['id']?>" required>
                        <input type="text" id="name" class="form-control" name="name" ng-model="studentname" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Address
                        <b ng-messages="profilestudent.address.$error" ng-if="profilestudent.address.$dirty">
                          <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                        </b>
                        </label>
                        <input type="text" id="address" class="form-control" name="address" ng-model="studentaddress" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Gender
                        <b ng-messages="profilestudent.gender.$error" ng-if="profilestudent.gender.$dirty">
                          <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                        </b>
                        </label>
                        <select class="select2 form-control" id="gender" ng-model="studentgender" name="gender" required style="width:100%">
                          <option value="<?php echo$udata['gender']?>"><?php echo$udata['gender']?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Email
                        <b ng-messages="profilestudent.email.$error" ng-if="profilestudent.email.$dirty">
                          <strong ng-message="pattern" class="label label-danger flat" >Please enter a valid email address.</strong>
                          <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                        </b>
                      </label>
                        <input type="email" id="email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/"  class="form-control" name="email" ng-model="studentemail" required>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      
                  
                      <button  id="deletestudentprofile" class="btn btn-danger pull-left flat">
                        <i class="fa fa-trash"></i> Delete
                      </button>

                      <button type='submit' id="updatestudentprofile" ng-disabled="!profilestudent.$valid"  class="btn btn-dark pull-right flat">
                        <i class="fa fa-check-circle"></i> Save Changes
                      </button>
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

<?php $this->load->view('template/components/footer');?>
<!-- angluar -->
<script src="<?php echo base_url()?>assets/angular/1.4.8.angular.min.js"></script>
<script src="<?php echo base_url()?>assets/angular/1.4.2.angular.min.js"></script>
<script type="text/javascript">
//School information
   var app = angular.module('app', ['ngMessages']);
   app.controller('myCtrl',function($scope){
      $scope.studentname     = '<?php echo$udata['name']?>';
      $scope.studentemail    = '<?php echo$udata['email']?>';
      $scope.studentgender   = '<?php echo$udata['gender']?>';
      $scope.studentaddress  = '<?php echo$udata['address']?>';
      $scope.studentemail    = '<?php echo$udata['email']?>';
    });
</script>