   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-eye"></i> View Questions</h3>
    </div>


    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> List of Questions</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->
            <button type="button" autofocus class="btn btn-dark flat" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus-circle"></i> Add Questions</button>
            <div class="clearfix"></div><hr>

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Add Questions</h4>
                  </div>
                  
                <br>
              <form method="POST" name='que' data-parsley-validate class="form-horizontal" novalidate="">

                <div class="col-md-12 col-xs-12">

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Question
                      <b ng-messages="que.question.$error" ng-if="que.question.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                    </label>
                      <textarea class="form-control" name="question" ng-model='question' style="resize:none;height:40px" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Category</label>
                      <select class="form-control" name="category" style="width:100%" required>
                        <?php 
                        foreach ($category as $r):
                          echo '<option value="'.$r['category'].'">'.$r['category'].'</option>';
                        endforeach; 
                       ?>                        
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Choice A
                      <b ng-messages="que.option_a.$error" ng-if="que.option_a.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b></label>
                      <textarea class="form-control" name="option_a" id="option_a" ng-model='option_a' style="resize:none;height:40px" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Choice B
                      <b ng-messages="que.option_b.$error" ng-if="que.option_b.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <textarea class="form-control" name="option_b" ng-model='option_b' style="resize:none;height:40px" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Choice C
                      <b ng-messages="que.option_c.$error" ng-if="que.option_c.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <textarea class="form-control" name="option_c" ng-model='option_c' style="resize:none;height:40px" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Choice D
                      <b ng-messages="que.option_d.$error" ng-if="que.option_d.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <textarea class="form-control" name="option_d" ng-model='option_d' style="resize:none;height:40px" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Answer</label>
                      <input class="form-control" type="hidden" name="answer" id="answer">
                      <textarea class="form-control" id="ans" style="resize:none;height:40px" disabled></textarea>
                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="modal-footer">
                        <button type="submit" id='addquestions' ng-disabled='!que.$valid' class="btn btn-dark flat">
                          <i class="fa fa-check-circle"></i> Submit
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form> 
              
            
          <table id="ShowQuestions" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Category</th>
                    <th>Answer</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>

          

            <!-- end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   



<?php $this->load->view('template/components/footer');?>
<!-- angluar -->
<script src="<?php echo base_url()?>assets/angular/1.4.8.angular.min.js"></script>
<script src="<?php echo base_url()?>assets/angular/1.4.2.angular.min.js"></script>
 <script type="text/javascript">
   var app = angular.module('app', ['ngMessages']);
   app.controller('myCtrl',function($scope){});
</script>