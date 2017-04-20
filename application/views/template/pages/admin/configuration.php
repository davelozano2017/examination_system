<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
foreach ($credentials as $r):
  $data = array(
    'id'        => $r->id,
    'hostname'  => $r->hostname,
    'username'  => $r->username,
    'password'  => $r->password,
    'port'      => $r->port);
endforeach;
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-gears"></i> Mail Configuration</h3>
    </div>


    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> STMP Credentials</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->

            <?php if($errors):
            echo '<div class="alert alert-danger">'.$errors.'</div>';
            endif;
            ?>
            <form method="POST" action="<?php echo$url?>execute/configuration" data-parsley-validate class="form-horizontal form-label-left input_mask">
              
              <div class="form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>SMTP Hostname</label>
                  <input type="text" class="form-control " value="<?php echo$data['hostname']?>" name="hostname"  required>
                </div>              
              </div>
              
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>SMTP Username</label>
                  <input type="email" class="form-control" value="<?php echo$data['username']?>"  name="username" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>SMTP Password</label>
                  <input type="password" class="form-control" value="<?php echo$data['password']?>" name="password" required>
                </div>
              </div>

              <div class="form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                  <label>SMTP Port</label>
                  <input type="number" class="form-control " value="<?php echo$data['port']?>" name="port"  required>
                </div>              
              </div>

              


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" class="animated fadeInDown btn btn-dark pull-right"><i class="fa fa-check-circle"></i> Submit</button>
              </div>
            </div>
                     
            </form>

            <!-- end -->
          </div>
        </div>
        


        </div>

     

        </div>
      </div>
    </div>   
