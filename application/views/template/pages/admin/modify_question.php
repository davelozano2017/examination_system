<?php 
foreach ($questions as $r):
  $udata = array(
    'id'        => $r->id,        'option_c'    => $r->option_c,
    'question'  => $r->question,  'option_d'    => $r->option_d,
    'answer'    => $r->answer,    'option_a'    => $r->option_a,
    'option_b'  => $r->option_b,  'category'    => $r->category
    );
endforeach;
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-pencil"></i> Modify Question</h3>
    </div>

    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> Question Information</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->
            <!-- action="<?=site_url('execute/modify_question')?>" -->
            <form method="POST" name="modify" class="form-horizontal" novalidate>
              
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Question
                    <b ng-messages="modify.question.$error" ng-if="modify.question.$dirty">
                      <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                    </b>
                    </label>
                    <textarea class="form-control" ng-model="modifyquestion" name="question" style="resize:none;height:60px" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Category
                    <b ng-messages="modify.category.$error" ng-if="modify.category.$dirty">
                      <strong ng-message="required" class="label label-danger flat" >This field required.</strong>
                    </b>
                    </label>
                    <select class="form-control category" ng-model="modifycategory" name="category" style="width:100%" required>
                    <option value="<?php echo $udata['category']?>"><?php echo $udata['category']?></option>
                    <?php foreach ($category as $r) { echo '<option value="'.$r['category'].'">'.$r['category'].'</option>'; }?>                     
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice A
                    <b ng-messages="modify.option_a.$error" ng-if="modify.option_a.$dirty">
                      <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                    </b>
                    </label>
                    <textarea class="form-control" ng-model="modifyoption_a" name="option_a" id="option_a"  style="resize:none;height:60px" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice B
                    <b ng-messages="modify.option_b.$error" ng-if="modify.option_b.$dirty">
                      <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                    </b>
                    </label>
                    <textarea class="form-control" ng-model="modifyoption_b" name="option_b" style="resize:none;height:60px" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice C
                    <b ng-messages="modify.option_c.$error" ng-if="modify.option_c.$dirty">
                      <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                    </b>
                    </label>
                    <textarea class="form-control" ng-model="modifyoption_c" name="option_c" style="resize:none;height:60px" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice D
                    <b ng-messages="modify.option_d.$error" ng-if="modify.option_d.$dirty">
                      <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                    </b>
                    </label>
                    <textarea class="form-control" ng-model="modifyoption_d" name="option_d" style="resize:none;height:60px" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Answer</label>
                    <input type="hidden" name="id" id="id" value="<?php echo $udata['id']?>">
                    <input type="hidden" name="answer"  value="<?php echo $udata['answer']?>" id="answer">
                    <textarea class="form-control" ng-model="modifyanswer" id="ans" style="resize:none;height:60px" disabled></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ln_solid"></div>
                    <div class="btn-group pull-right">
                      <a href="<?= site_url('view_questions')?>" class="btn btn-primary flat">
                      <i class="fa fa-arrow-left"></i> Back</a>
                      
                      <button type="submit" id="deletequestion" class="btn btn-danger flat">
                      <i class="fa fa-trash"></i> Delete</button>
                      
                      <button type="submit" id="updatequestion" ng-disabled="!modify.$valid" class="btn btn-dark flat">
                      <i class="fa fa-check-circle"></i> Save Changes</button>
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
      $scope.modifyquestion = '<?php echo$udata['question']?>';
      $scope.modifycategory = '<?php echo$udata['category']?>';
      $scope.modifyoption_a = '<?php echo$udata['option_a']?>';
      $scope.modifyoption_b = '<?php echo$udata['option_b']?>';
      $scope.modifyoption_c = '<?php echo$udata['option_c']?>';
      $scope.modifyoption_d = '<?php echo$udata['option_d']?>';
      $scope.modifyanswer   = '<?php echo$udata['answer']?>';
    });
</script>