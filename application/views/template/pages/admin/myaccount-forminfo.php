<?php 
foreach ($admin_data as $r):
  $udata = array(
    'id'     => $r->id,     'image'   => $r->image,
    'email'  => $r->email,  'address' => $r->address,
    'gender' => $r->gender, 'name'    => $r->name,
    'date'   => $r->date ,  'role'    => $r->role
    );
endforeach; ?>
<!-- execute/updateinfo/'.$data['session_id'].' -->
<form method="POST" name="info" class="form-horizontal" novalidate>

<div class="form-group">
  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
    <label>Student Name 
      <b ng-messages="info.name.$error" ng-if="info.name.$dirty">
        <strong ng-message="required" class="label label-danger" >name is required.</strong>
      </b>
    </label>
    <input type="text" class="form-control" name="name" id="name" ng-model="name" value="<?php echo$udata['address']?>" required >
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
    <button type="submit" id="addstudent" ng-disabled="!info.$valid"  class="btn btn-dark pull-right flat"><i class="fa fa-check-circle"></i> Save Changes</button>
  </div>
</div>
         
</form>