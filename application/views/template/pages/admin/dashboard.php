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
         <?php 
          $errors = $this->session->flashdata('errors');
          if($errors):
          echo '<div class="alert alert-danger">'.$errors.'</div>';
          endif;
          include 'notification-system.php';
          ?>
            <div class="row top_tiles">
              
              <a href="<?php echo$url?>viewstudents"> 
                <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats flat">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="count"><?php echo $count;?></div>
                    <p><strong class="text-primary">Registered Students</strong></p>
                    <p></p>
                  </div>
                </div>
              </a>

              <a href="<?php echo$url?>"> 
                <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats flat">
                    <div class="icon"><i class="fa fa-check"></i></div>
                    <div class="count">0</div>
                    <p><strong class="text-primary">Students Attended</strong></p>
                    <p></p>
                  </div>
                </div>
              </a>

              <a href="<?php echo$url?>"> 
                <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats flat">
                    <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
                    <div class="count">0</div>
                    <p><strong class="text-primary">Passing Students</strong></p>
                    <p></p>
                  </div>
                </div>
              </a>
              
              <a href="<?php echo$url?>"> 
                <div class="animated fadeInDown col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats flat">
                    <div class="icon"><i class="fa fa-thumbs-o-down"></i></div>
                    <div class="count">0</div>
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


            <form method="POST" data-parsley-validate class="form-horizontal">
              
              <div class="form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>School Name</label>
                  <input type="hidden" name="id" value="<?php echo@$data['id']?>">
                  <input type="text" class="form-control " name="name" 
                  value="<?php echo @$data['name']?>" required>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>School Email</label>
                  <input type="email" class="form-control" name="email" 
                  value="<?php echo@$data['email']?>" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>School Address</label>
                  <input type="text" class="form-control" name="address" 
                  value="<?php echo@$data['address']?>" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>School Contact</label>
                  <input type="number" minlength=11 maxlength=11  class="form-control" 
                  value="<?php echo@$data['contact']?>" name="contact" required>
                </div>
              </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" id="insertupdate" class="btn btn-dark pull-right animated fadeInDown flat "><i class="fa fa-check-circle"></i> Save Changes</button>
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

              <form method="POST" enctype="multipart/form-data"  class="form-horizontal">
<!-- id="uploadlogo" -->
                  <div class="col-md-2"></div>
                  <div class="col-md-8 col-xs-12">
                    
                  <input type="hidden" name="id" id="logoid" value="<?php echo$data['id']?>">
                  
                    <input type="file" style="display:none" name="userfile" id="file-2" class="forn-control schoollogo" />
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

