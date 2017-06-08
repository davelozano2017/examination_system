<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
foreach ($user_data as $r):
  $udata = array(
    'id'     => $r->id,     'image'   => $r->image,
    'email'  => $r->email,  'address' => $r->address,
    'gender' => $r->gender, 'name'    => $r->name,
    'date'   => $r->date,   'role'    => $r->role
    );
endforeach;
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-exclamation-circle"></i> Assestment Information</h3>
    </div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
          <?php 
          $errors = $this->session->flashdata('errors');
          if($errors):
          echo '<div class="alert alert-danger">'.$errors.'</div>';
          endif;?>
          </div>

      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

            <!-- start -->

            <div class="alert alert-info flat">
              <div class="form-group">
                <h4>Examination Rules!</h4>
                <ul>
                  <?php foreach($instructions as $r){ echo '<li>'.$r['instructions'].'</li>'; }?>
                </ul>
              </div>

              <div class="form-group">
                <h4>Possible Questions!</h4>
                <ul>
                  <?php foreach($category as $r){ echo '<li>'.$r['category'].'</li>'; }?>
                </ul>
              </div>

                <p>Please click the button below to begin your assestment.</p>
            </div>
            <button id="begin" onclick="begin('<?php echo urlencode($udata['email'])?>')" class="btn btn-dark flat"> <i class="fa fa-check-circle"></i> Begin </button>


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
   app.controller('myCtrl',function($scope){});
</script>