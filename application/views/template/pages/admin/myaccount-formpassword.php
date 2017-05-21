  
<!-- execute/updateinfo/'.$data['session_id'].' -->
  <form method="POST" class="form-horizontal" name="pwd" novalidate>

  <div class="form-group">
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
      <label>New Password
      <b ng-messages="pwd.password.$error" ng-if="pwd.password.$dirty">
        <strong ng-message="required" class="label label-danger" >name is required.</strong>
      </b>
      </label>
      <input type="password" class="form-control" id="password" ng-model="password" name="password" required>
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
      <button type="submit" class="animated fadeInDown btn btn-dark pull-right flat"><i class="fa fa-check-circle"></i> Save Changes</button>
    </div>
  </div>
           
  </form>