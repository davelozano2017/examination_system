<?php 
$errors = $this->session->flashdata('errors');
foreach ($category as $r):
  $udata = array('id' => $r->id, 'category' => $r->category,);
endforeach;
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-pencil"></i> Modify Category</h3>
    </div>

    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2><i class="fa fa-exclamation-circle"></i> Category</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <!-- start -->
            <?php if($errors):echo '<div class="alert alert-danger">'.$errors.'</div>';endif;?>
            <form method="POST" data-parsley-validate class="form-horizontal form-label-left input_mask">
              
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Category</label>
                    <input type="hidden" name="id" id='id' value="<?php echo $udata['id']?>" required>
                    <input class="form-control" type="text"  name="category" value="<?php echo $udata['category']?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ln_solid"></div>
                    <div class="btn-group pull-right">

                      <a href="<?= site_url('view_category')?>" class="animated fadeInDown btn btn-primary flat"><i class="fa fa-arrow-left"></i> Back</a>

                      <button type='submit' id='catdelete' class="animated fadeInDown btn btn-danger flat">
                        <i class="fa fa-trash"></i> Delete
                      </button>

                      <button type="submit" id='modifycategory' class="animated fadeInDown btn btn-dark flat">
                        <i class="fa fa-check-circle"></i> Save Changes
                      </button>

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

<script type="text/javascript">
  function del($url,$id)
  {
    var url = $url;
    var id  = $id;
    swal({
    title: "",
    text: "<h4>Are you sure you want to delete this category?</h4>",
    type: "warning",
    html:true,
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
    },
    function(){
      location.href = url + id;
    });

  }
</script>