<?php 
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
            <form method="POST" enctype="multipart/form-data" id="UploadAdminProfile">
             
              <input type="file" style='display:none' class="form-control picture adminphoto" id="adminpicture" name="adminphoto"  size="20" required>
              <input type="hidden" name="id" id="id" value="<?php echo$udata['id']?>">
              
              <label for='adminpicture' style='cursor: pointer;' class='col-md-12 col-lg-12 col-sm-12 col-xs-12'>
                <img id='preview' style="width:144px;height:144px;margin:auto" 
                class="img-responsive img-circle profile_img" src="<?php echo$udata['image']?>">
              </label>
            </form>          
                
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
                  <!-- execute/updateinfo/'.$data['session_id'].' -->
                  <form method="POST" name="myaccount" class="form-horizontal" novalidate>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                      <label>Name
                      <b ng-messages="myaccount.name.$error" ng-if="myaccount.name.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <input type="hidden" class="form-control" name="id" id="id"  value="<?php echo$udata['id']?>" required >
                      <input type="text" class="form-control" name="name" ng-model="adminname" id="name" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Address
                      <b ng-messages="myaccount.address.$error" ng-if="myaccount.address.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <input type="text" class="form-control" name="address" ng-model="adminaddress" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Gender
                      <b ng-messages="myaccount.gender.$error" ng-if="myaccount.gender.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <select class="form-control select2" ng-model="admingender" name="gender" required>
                        <option value="<?php echo$udata['gender']?>"><?php echo$udata['gender']?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Email
                      <b ng-messages="myaccount.email.$error" ng-if="myaccount.email.$dirty">
                        <strong ng-message="pattern" class="label label-danger flat" >Please enter a valid email address.</strong>
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <input type="email" class="form-control" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/"  name="email" ng-model="adminemail" required>
                    </div>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <button type="submit" id="updateinfo" ng-disabled="!myaccount.$valid" class="btn btn-dark pull-right flat"><i class="fa fa-check-circle"></i> Save Changes</button>
                    </div>
                  </div>
                           
                  </form>


                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                      <form method="POST" name='pwd' class="form-horizontal" movalidate>
                          <input type="hidden" class="form-control" id="id" value="<?php echo$data['session_id']?>" required>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                          <label>New Password 
                          <b ng-messages="pwd.password.$error" ng-if="pwd.password.$dirty">
                            <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                            <strong ng-message="minlength" class="label label-danger flat" >Password is too short.</strong>
                          </b>
                          </label>
                          <input type="password" class="form-control" id="password" ng-minlength=6 ng-model="password" name="password" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                          <label>Confirm New Password
                          <b ng-messages="pwd.cpassword.$error" ng-if="pwd.cpassword.$dirty">
                            <strong ng-show="cpassword !== password" class="label label-danger flat" >Password not matched.</strong>
                            <strong ng-message="required" class="label label-danger flat" >name is required.</strong>
                          </b>
                         </label>
                          <input type="password" class="form-control" ng-model="cpassword" name="cpassword" required>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <button type="submit" id="updatepassword" ng-disabled="!pwd.$valid" class="btn btn-dark pull-right flat"><i class="fa fa-check-circle"></i> Save Changes</button>
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
<script type="text/javascript">
//School information
   var app = angular.module('app', ['ngMessages']);
   app.controller('myCtrl',function($scope){
      $scope.adminname     = '<?php echo$udata['name']?>';
      $scope.adminemail    = '<?php echo$udata['email']?>';
      $scope.adminaddress  = '<?php echo$udata['address']?>';
      $scope.admingender   = '<?php echo$udata['gender']?>';
    });
</script>