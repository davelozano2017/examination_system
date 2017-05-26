<?php 
$errors = $this->session->flashdata('errors');
foreach ($instructions as $r):
  $udata = array('id' => $r->id, 'instructions' => $r->instructions,);
endforeach;
?>
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
            <?php if($errors):echo '<div class="alert alert-danger">'.$errors.'</div>';endif;?>
            <form method="POST" data-parsley-validate class="form-horizontal">
              
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Instructions</label>
                    <input type="hidden" name="id" id='id' value="<?php echo $udata['id']?>" required>
                    <input class="form-control"  type="text"  name="instructions" value="<?php echo $udata['instructions']?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ln_solid"></div>
                    <div class="btn-group pull-right">
                      <a href="<?= site_url('view_instructions')?>" class="animated fadeInDown btn btn-primary flat"><i class="fa fa-arrow-left"></i> Back</a>
                      <button type='submit' id='insdelete' class="animated fadeInDown btn btn-danger flat"><i class="fa fa-trash"></i> Delete</button>
                      <button type="submit" id='modifyinstruction' class="animated fadeInDown btn btn-dark flat"><i class="fa fa-check-circle"></i> Save Changes</button>
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
