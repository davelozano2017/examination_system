<?php foreach ($instructions as $r) {$udata = array('id' => $r->id, 'instructions' => $r->instructions);}?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-pencil"></i> Modify Instructions</h3>
    </div>

    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> Instructions</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->
            <form method="POST" name="inst" novalidate class="form-horizontal">
              
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Instructions
                    <b ng-messages="inst.instructions.$error" ng-if="inst.instructions.$dirty">
                      <strong ng-message="required" class="label label-danger flat" >This field is required</strong>
                    </b>
                    </label>
                    <input type="hidden" name="id" id='id' value="<?php echo $udata['id']?>" required>
                    <input class="form-control" type="text" name="instructions" ng-model="instructions" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ln_solid"></div>
                    <div class="btn-group pull-right">
                      <a href="<?= site_url('view_instructions')?>" class="btn btn-primary flat"><i class="fa fa-arrow-left"></i> Back</a>
                      <button type='submit' id='insdelete' class="btn btn-danger flat"><i class="fa fa-trash"></i> Delete</button>
                      <button type="submit" id='modifyinstruction' ng-disabled="!inst.$valid" class="btn btn-dark flat"><i class="fa fa-check-circle"></i> Save Changes</button>
                    </div>
                  </div>
                </div>
                         
              </form>

            <!-- end -->
           </div>
          </div>
        </div>
      </div>
    </div>   

<?php $this->load->view('template/components/footer');?>
<script type="text/javascript">
  var app = angular.module('app', ['ngMessages']);
    app.controller('myCtrl',function($scope){
    $scope.instructions = '<?php echo$udata['instructions']?>';
  });
</script>