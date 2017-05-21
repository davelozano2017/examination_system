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
    <div class="title_left">
      <h3><i class="fa fa-exclamation-circle"></i> Assestment Information</h3>
    </div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
          <?php 
          $errors = $this->session->flashdata('errors');
          if($errors):
          echo '<div class="alert alert-danger">'.$errors.'</div>';
          endif;?>
          </div>

      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

            <!-- start -->

            <div class="alert alert-info flat">
              <div class="form-group">
                <h4>Examination Rules!</h4>
                <ul>
                  <?php foreach($instructions as $r): echo '<li>'.$r->instructions.'</li>'; endforeach;?>
                </ul>
              </div>

              <div class="form-group">
                <h4>Possible Questions!</h4>
                <ul>
                  <?php foreach($category as $r): echo '<li>'.$r->category.'</li>'; endforeach;?>
                </ul>
              </div>

                <p>Please click the button below to begin your assestment.</p>
            </div>
            <a href="#" onClick="start('<?php echo$url?>exam/begin/')" class="btn btn-dark flat">Begin</a>

            <!-- end -->

            
          </div>
        </div>
      </div>



        </div>
      </div>
    </div>   


<script type="text/javascript">
  function start($url)
  {
    var url = $url;
    swal({
    title: "",
    text: "<h4>Are you sure you want to start your assestment?</h4>",
    type: "warning",
    html:true,
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes",
    closeOnConfirm: false
  },
    function(){
      location.href = url;
    });
  }
</script>