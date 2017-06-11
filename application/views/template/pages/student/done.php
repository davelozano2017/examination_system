<?php 
foreach ($results as $r):
    $udata = array(
      'email'=> $r->email, 'name'=> $r->name, 'gender'=> $r->gender,
      'status'=> $r->status, 'score' => $r->score, 'percentage' => $r->percentage);
    $var = ($udata['gender'] == 'Male') ? $gender = 'Mr. ' : $gender = 'Ms. ';
    $stats = strtoupper($udata['status']);
    $var = ($stats == 'PASSED') ? 
    $message = '<blockquote class="text-primary">congratulations and keep going. Thank you.</blockquote>' : 
    $message = '<blockquote class="text-danger">sorry and better luck next time. Thank you.</blockquote>';
endforeach;
?>
   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-exclamation-circle"></i> Result</h3>
    </div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

            <!-- start -->
                <h4>Dear <?php echo $gender.$udata['name']?>,</h4>
                <h5>Please be informed that you are <?php echo$stats?> in the Online Examination by Our Lady of Fatima University with the average score of <?php echo $udata['percentage']?>% (<?php echo$udata['score']?> / 20).</h5>
                <h5>We want to say <?php echo$message?></h5>
                <br>
                <h5>Very truly yours,</h5>
                <h5>Admin Team</h5>
            <!-- end -->
            
          </div>
        </div>
      </div>



        </div>
      </div>
    </div>   
