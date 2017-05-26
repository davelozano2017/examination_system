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
<form method="POST" data-parsley-validate class="form-horizontal">

<div class="form-group">
  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
    <label>Name</label>
    <input type="hidden" class="form-control" name="id" id="id"  value="<?php echo$udata['id']?>" required >
    <input type="text" class="form-control" name="name" id="name"  value="<?php echo$udata['name']?>" required >
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
    <button type="submit" id="updateinfo" class="btn btn-dark pull-right flat"><i class="fa fa-check-circle"></i> Save Changes</button>
  </div>
</div>
         
</form>