<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
if($errors):
echo '<div class="alert alert-danger">'.$errors.'</div>';
endif;
           
?>
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
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus-circle"></i> Add Questions</button>
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
              <form method="POST" action="<?php echo$url?>execute/add_question" data-parsley-validate class="form-horizontal form-label-left input_mask">
            

                  <div class="col-md-12 col-xs-12">

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Question</label>
                        <textarea class="form-control" name="question" style="resize:none;height:60px" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Answer</label>
                        <textarea class="form-control" name="answer" style="resize:none;height:60px" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Choice A</label>
                        <textarea class="form-control" name="choices_a" style="resize:none;height:60px" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Choice B</label>
                        <textarea class="form-control" name="choices_b" style="resize:none;height:60px" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Choice C</label>
                        <textarea class="form-control" name="choices_c" style="resize:none;height:60px" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label>Choice D</label>
                        <textarea class="form-control" name="choices_d" style="resize:none;height:60px" required></textarea>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <div class="modal-footer">
                        <button type="submit" class="animated fadeInDown btn btn-dark pull-right">
                          <i class="fa fa-check-circle"></i> Submit
                        </button>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form> 
              
              <div class="col-md-12 col-xs-12 col-sm-12">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Question</th>
                          <th>Answer</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $i = 1;
                      foreach ($questions as $row) {?>
                        <tr>
                          <td><?php echo$i++?></td>
                          <td><?php echo$row->question?></td>
                          <td><?php echo$row->answer?></td>
                        </tr>

                      <?php } ?>
                        
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











