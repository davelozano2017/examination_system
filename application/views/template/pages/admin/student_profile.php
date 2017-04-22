<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
foreach ($student_info as $r):
  $udata = array(
    'id'     => $r->id,     'image'   => $r->image,
    'email'  => $r->email,  'address' => $r->address,
    'gender' => $r->gender, 'name'    => $r->name,
    'date'   => $r->date,   'gender'  => $r->gender,
    'username' => $r->username,
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
                <a href="<?php echo$url?>viewstudents" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Back</a>
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
                  <li role="presentation" class="active truncate "><a  href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">
                  <i class="fa fa-pencil "></i> User Information</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <form method="POST" 
                    action="<?php echo$url?>execute/studentupdateinfo/<?php echo$udata['id']?>" data-parsley-validate class="form-horizontal form-label-left input_mask">
                    
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo$udata['name']?>" required>
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
                        <select class="select2 form-control" name="gender" required style="width:100%">
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
                      
                      <a href="#" onClick="delete_student('<?php echo$url?>execute/DeleteStudent/','<?php echo$udata['id']?>')" 
                      class="btn btn-danger ">
                      <i class="fa fa-trash"></i> Delete 
                      </a>

                      <button type="submit" class="btn btn-dark pull-right ">
                      <i class="fa fa-check-circle"></i> Save 
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

