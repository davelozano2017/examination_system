  
<!-- execute/updateinfo/'.$data['session_id'].' -->
  <form method="POST" name='pwd' class="form-horizontal" movalidate>
      <input type="hidden" class="form-control" id="id" value="<?php echo$data['session_id']?>" required>
  <div class="form-group">
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
      <label>New Password 
      <b ng-messages="pwd.password.$error" ng-if="pwd.password.$dirty">
        <strong ng-message="required" class="label label-danger" >name is required.</strong>
        <strong ng-message="minlength" class="label label-danger" >Password is too short.</strong>
      </b>
      </label>
      <input type="password" class="form-control" id="password" ng-minlength=6 ng-model="password" name="password" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
      <label>Confirm New Password
      <b ng-messages="pwd.cpassword.$error" ng-if="pwd.cpassword.$dirty">
        <strong ng-show="cpassword !== password" class="label label-danger" >Password not matched.</strong>
        <strong ng-message="required" class="label label-danger" >name is required.</strong>
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