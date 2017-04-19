<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-eye"></i> View Students</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 <div class="x_title">
                    <h2><i class="fa fa-users"></i> List of Students</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center"></div>
                      <div class="clearfix"></div>
            <?php 
            foreach ($user as $r):
              $udata = array(
                'id'     => $r->id, 'image'     => $r->image,
                'email'  => $r->email,'address' => $r->address,
                'gender' => $r->gender,'name'   => $r->name,
                'date'   => $r->date
                );
            ?>

            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
              <div class="well profile_view">
                <div class="col-sm-12">
                  <h4 class="brief"><i><?php echo $udata['name']?></i></h4>
                  <div class="left col-xs-7">
                    <ul class="list-unstyled">
                      <li><strong> Address:</strong> <p><?php echo $udata['address']?></p></li>
                      <li><strong> Email:</strong> <p><?php echo $udata['email']?></p></li>
                    </ul>
                  </div>
                  
                  <div class="right col-xs-5 text-center">
                    <img src="<?php echo $udata['image']?>"  class="img-circle  img-responsive">
                  </div>

                </div>
                <div class="col-xs-12 bottom text-center">
                  <div class="col-xs-12 col-sm-12 emphasis">
                    <label class="pull-left"><?php echo $udata['date']?></label>
                      <a href="#" onClick="view_profile('<?php echo$url?>execute/','student_profile/','<?php echo$udata['id']?>')" class="btn btn-dark btn-xs pull-right">
                      <i class="fa fa-eye"> </i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <?php endforeach;?>
            
                      

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->