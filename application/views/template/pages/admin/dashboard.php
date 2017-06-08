<?php 
foreach ($result as $r):
  $data = array(
    'id'      => $r->id,      'name'    => $r->name,
    'email'   => $r->email,   'address' => $r->address,
    'contact' => $r->contact, 'image'   => $r->image);
endforeach;
?>
    <div class="right_col" role="main">
      
      <div class="">

        <div class="row top_tiles">
          <a href="<?=site_url('viewstudents')?>"> 
            <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats flat">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="count"><?php echo $count;?></div>
                <p><strong class="text-primary">Registered Students</strong></p>
                <p></p>
              </div>
            </div>
          </a>

          <a href="<?=site_url('viewstudents')?>"> 
            <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats flat">
                <div class="icon"><i class="fa fa-check"></i></div>
                <div class="count"><?php echo $attended;?></div>
                <p><strong class="text-primary">Students Attended</strong></p>
                <p></p>
              </div>
            </div>
          </a>

          <a href="<?=site_url('viewstudents')?>"> 
            <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats flat">
                <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
                <div class="count"><?php echo $passed;?></div>
                <p><strong class="text-primary">Passing Students</strong></p>
                <p></p>
              </div>
            </div>
          </a>
          
          <a href="<?=site_url('viewstudents')?>"> 
            <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats flat">
                <div class="icon"><i class="fa fa-thumbs-o-down"></i></div>
                <div class="count"><?php echo $failed;?></div>
                <p><strong class="text-primary">Failed Students</strong></p>
                <p><a href="#"> </a></p>
              </div>
            </div>
          </a>
        </div>

      </div>


<div class="row">
  
  <div class="col-md-7 col-xs-12">
    <div class="x_panel">
      
      <div class="x_title">
        <h2><i class="fa fa-graduation-cap"></i> School Information</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <!-- start -->

        <form method="POST" name='school' class="form-horizontal" novalidate>
          
          <div class="form-group"> 
            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label>School Name
              <b ng-messages="school.name.$error" ng-if="school.name.$dirty">
                <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
              </b>
              </label>
              <input type="hidden" name="id" id="id" value="<?php echo$data['id']?>">
              <input type="text" class="form-control " ng-model='schoolname' name="name" required>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label>School Email
              <b ng-messages="school.email.$error" ng-if="school.email.$dirty">
                <strong ng-message="pattern" class="label label-danger flat">Please enter a valid email address.</strong>
                <strong ng-message="required" class="label label-danger flat">EThis field is required.</strong>
              </b>
              </label>
              <input type="email" class="form-control" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" ng-model='schoolemail' name="email" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label>School Address
              <b ng-messages="school.address.$error" ng-if="school.address.$dirty">
                <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
              </b>
              </label>
              <input type="text" class="form-control" ng-model='schooladdress' name="address" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label>School Contact
              <b ng-messages="school.contact.$error" ng-if="school.contact.$dirty">
                <strong ng-message="required" class="label label-danger flat">This field is required</strong>
                <strong ng-message="minlength" class="label label-danger flat">Phone number is too Short</strong>
                <strong ng-message="maxlength" class="label label-danger flat">Phone number is too Long</strong>
                <strong ng-message="pattern" class="label label-danger flat">Number Only</strong>
              </b>
              </label>
              <input type="text" ng-model='schoolcontact' pattern="^[0-9]*$" ng-maxlength=11 ng-minlength=11 class="form-control" name="contact" required>
            </div>
          </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <button type="submit" id="insertupdate" ng-disabled="!school.$valid" class="btn btn-dark pull-right flat "><i class="fa fa-check-circle"></i> Save Changes</button>
          </div>
        </div>
                 
        </form>

        <!-- end -->
      </div>
    </div>
    


    </div>

    

    <div class="col-md-5 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><i class="fa fa-image"></i> School Logo</h2>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <!-- start -->

          <form method="POST" enctype="multipart/form-data" id="fileUploadForm" class="form-horizontal">
<!-- id="uploadlogo" -->
              <div class="col-md-2"></div>
              <div class="col-md-8 col-xs-12">
                
              <input type="hidden" name="id" id="logoid" value="<?php echo$data['id']?>">
              
                <input type="file" style="display:none" name="userfile" id="file-2" class="forn-control picture logo" />
                <label for="file-2" style="border:none;cursor: pointer;">
                  <img id='preview' src="<?php echo@$data['image']?>" 
                  style="width:250px;height:250px;margin:auto" 
                  class="img-circle img-responsive">
                </label>
              </div>
              <div class="col-md-2"></div>

          </form>


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
      $scope.schoolname     = '<?php echo$data['name']?>';
      $scope.schoolemail    = '<?php echo$data['email']?>';
      $scope.schooladdress  = '<?php echo$data['address']?>';
      $scope.schoolcontact  = '<?php echo$data['contact']?>';
    });


</script>
