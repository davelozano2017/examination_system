<?php 
$errors = $this->session->flashdata('errors');
include 'notification-system.php';
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

            <?php if($errors):
            echo '<div class="alert alert-danger">'.$errors.'</div>';
            endif;
            ?>
            
            <form method="POST" action="<?=site_url('execute/modify_question')?>" data-parsley-validate class="form-horizontal form-label-left input_mask">
              
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Question</label>
                    <textarea class="form-control" name="question" style="resize:none;height:60px" required><?php echo $udata['question']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Category</label>
                    <select class="form-control" name="category" style="width:100%" required>
                        <option value="<?php echo $udata['category']?>"><?php echo $udata['category']?></option>';
                      <?php 
                      foreach ($category as $r):
                        echo '<option value="'.$r->category.'">'.$r->category.'</option>';
                      endforeach; 
                     ?>                        
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice A</label>
                    <textarea class="form-control" name="option_a" id="option_a"  style="resize:none;height:60px" required><?php echo $udata['option_a']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice B</label>
                    <textarea class="form-control" name="option_b" style="resize:none;height:60px" required><?php echo $udata['option_b']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice C</label>
                    <textarea class="form-control" name="option_c" style="resize:none;height:60px" required><?php echo $udata['option_c']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Choice D</label>
                    <textarea class="form-control" name="option_d" style="resize:none;height:60px" required><?php echo $udata['option_d']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>Answer</label>
                    <input type="hidden" name="id"      value="<?php echo $udata['id']?>">
                    <input type="hidden" name="answer"  value="<?php echo $udata['answer']?>" id="answer">
                    <textarea class="form-control" id="ans" style="resize:none;height:60px" disabled><?php echo $udata['answer']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ln_solid"></div>
                    <div class="btn-group pull-right">
                      <a href="<?php echo$url?>view_questions" class="animated fadeInDown btn btn-primary flat"><i class="fa fa-arrow-left"></i> Back</a>
                      <a href="#" onclick="del('<?php echo$url?>execute/que_delete/','<?php echo$udata['id']?>')" class="animated fadeInDown btn btn-danger flat"><i class="fa fa-trash"></i> Delete</a>
                      <button type="submit" class="animated fadeInDown btn btn-dark flat"><i class="fa fa-check-circle"></i> Save Changes</button>
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
    text: "<h4>Are you sure you want to delete this question?</h4>",
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