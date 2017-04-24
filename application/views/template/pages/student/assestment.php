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

            <!-- end -->

            
          </div>
        </div>
      </div>



        </div>
      </div>
    </div>   
