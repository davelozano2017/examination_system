   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-eye"></i> View Categories</h3>
    </div>


    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> List of Categories</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->
            <button type="button" autofocus class="btn btn-dark flat" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus-circle"></i> Add Category</button>
            <div class="clearfix"></div><hr>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Add Category</h4>
                  </div>
                  
                <br>
              <form method="POST" name='catform' novalidate class="form-horizontal">
                <div class="col-md-12 col-xs-12">
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Category
                      <b ng-messages="catform.category.$error" ng-if="catform.category.$dirty">
                        <strong ng-message="required" class="label label-danger flat" >This field is required.</strong>
                      </b>
                      </label>
                      <input type="text" name="category" class="form-control" ng-model='category' required>
                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="modal-footer">
                        <button type="submit" id='category' ng-disabled='!catform.$valid' class="btn btn-dark flat">
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
              
              <div class="col-md-12 col-xs-12 col-sm-12">
                <table id="ShowCategory" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>

              </div>
          

            <!-- end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
<?php $this->load->view('template/components/footer');?>
 <script type="text/javascript">
   var app = angular.module('app', ['ngMessages']);
    app.controller('myCtrl',function($scope){
   
    });
</script>