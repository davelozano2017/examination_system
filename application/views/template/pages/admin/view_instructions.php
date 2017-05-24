<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';           
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-eye"></i> View Instructions</h3>
    </div>


    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> List of Instructions</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->
            <button type="button" autofocus class="btn btn-dark flat" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus-circle"></i> Add Instructions</button>
            <div class="clearfix"></div><hr>
            <?php if($errors):echo '<div class="alert alert-danger">'.$errors.'</div>';endif; ?>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle"></i> Add Instructions</h4>
                  </div>
                  
                <br>
              <form method="POST" action="<?=site_url('execute/add_instructions')?>" data-parsley-validate class="form-horizontal form-label-left input_mask">
            

                <div class="col-md-12 col-xs-12">

                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Instructions</label>
                      <input class="form-control" name="instructions" required>
                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <div class="modal-footer">
                        <button type="submit" class="animated fadeInDown btn btn-dark flat">
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
                          <th>Instructions</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $i = 1;
                      foreach ($instructions as $row) {?>
                        <tr>
                          <td><?php echo$i++?></td>
                          <td><?php echo$row->instructions?></td>
                          <td><a onClick="modify('<?php echo$url?>instructions/modify/','<?php echo $row->id?>')" class="btn btn-dark flat"><i class="fa fa-pencil"></i> Modify</a></td>
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
    <script type="text/javascript">
      function modify($url,$id) 
      {
        var url = $url;
        var id = $id;
        location.href = url + id;

      }
    </script>