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
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div class="x_panel">
          <div class="x_content">

            <!-- start -->
            <?php 
            foreach ($information as $info):?>
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <img style="margin:auto" class="img-circle img-responsive col-xs-12 col-md-12" src="<?php echo $info->image?>">
            <h3 class="text-center"><?php echo $info->name?></h3>
            <h4 class="text-center"><?php echo $info->email?></h4>
            <h4 class="text-center"><?php echo $info->address?></h4>
            <h4 class="text-center"><?php echo $info->contact?></h4>
            <h4 class="text-center text-danger">* GOODLUCK TO ALL PARTICIPANTS! *</h4>
            </div>
            <div class="col-md-4"></div>
            <?php endforeach;?>
            <!-- end -->

          </div>
        </div>


        <!-- start -->
      <form method="POST" action="<?= site_url('execute/finish')?>" data-parsley-validate class="form-horizontal">
        <?php $i=1; foreach ($questions as $q): ?>
          <div class="x_panel">
            <div class="x_content">
              
              <h4 class="pull-right">Q #<?php echo $i++?></h4>
              <h4 class="text-danger"><?php echo $q['question']?></h4>
              <div class="clearfix"></div>
              
              <div class="form-group">
                <select name="answer[]" class="form-control" required>
                  <option value="<?php echo $q['option_a']?>" selected><?php echo $q['option_a']?></option>
                  <option value="<?php echo $q['option_b']?>"><?php echo $q['option_b']?></option>
                  <option value="<?php echo $q['option_c']?>"><?php echo $q['option_c']?></option>
                  <option value="<?php echo $q['option_d']?>"><?php echo $q['option_d']?></option>
                </select>
              </div>
            
            </div>
          </div>
        <?php endforeach ?>
        <div class="x_panel">
            <div class="x_content">
            <button id="send" class="btn btn-dark flat pull-right"> <i class="fa fa-check-circle"></i> Click To Submit </button>
           </div>
        </div>
      </form>
        <!-- end -->
        </div>
      </div>
    </div>   


<?php $this->load->view('template/components/footer');?>
<script type="text/javascript">
//School information
   var app = angular.module('app', ['ngMessages']);
   app.controller('myCtrl',function($scope){});
</script>