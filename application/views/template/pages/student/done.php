<?php 
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
        <div class="x_panel">
          <div class="x_content">

            <!-- start -->
                <h4>Congratulations <?php echo $udata['name']?></h4>
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