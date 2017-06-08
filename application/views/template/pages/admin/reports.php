<div class="right_col" role="main">
  <div class="row">
    
    <div class="col-md-6 col-xs-12 col-sm-6">
      <div class="x_panel">
        <div class="x_title">
          <h2> Doughnut Chart</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <!-- start -->
        <div id="canvas-holder" >
          <canvas id="chart-area1" />
        </div>

        <div class="form-group">
          <label class="text text-primary pull-left"><i class="fa fa-thumbs-o-up"></i> Passed: <?php echo$passed?></label>
          <label class="text text-danger pull-right"><i class="fa fa-thumbs-o-down"></i> Failed: <?php echo$failed?></label>
        </div>
        <!-- end -->
      </div>

      </div>
    </div>

    <div class="col-md-6 col-xs-12 col-sm-6">
      <div class="x_panel">
        <div class="x_title">
          <h2> Pie Chart</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <!-- start -->
        <div id="canvas-holder" >
          <canvas id="chart-area2" />
        </div>

        <div class="form-group">
          <label class="text text-primary pull-left"><i class="fa fa-thumbs-o-up"></i> Passed: <?php echo$passed?></label>
          <label class="text text-danger pull-right"><i class="fa fa-thumbs-o-down"></i> Failed: <?php echo$failed?></label>
        </div>
        <!-- end -->
      </div>

      </div>
    </div>

   

  </div>
</div>   

<?php $this->load->view('template/components/footer');?>
 <!-- Chart.js -->
<script src="<?php echo base_url()?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
<script type="text/javascript">
  var app = angular.module('app', ['ngMessages']);
  app.controller('myCtrl',function($scope){});
  var passed = '<?php echo$passed?>';
  var failed = '<?php echo$failed?>';
  var type = {type: ['pie','doughnut','bar']};
  var config1 = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [ passed, failed],
                backgroundColor: ["#336699","#ff0000",]
            }],
            labels: ['Passed',"Failed"]
        },
        options: { responsive: true, animation: { animateScale: true, animateRotate: true }
        }
    };

    var config2 = {
        type: 'pie',
        data: {
            datasets: [{
                data: [ passed, failed],
                backgroundColor: ["#336699","#ff0000",]
            }],
            labels: ['Passed',"Failed"]
        },
        options: { responsive: true, animation: { animateScale: true, animateRotate: true }
        }
    };


    window.onload = function() {
        var ctx1 = document.getElementById("chart-area1").getContext("2d");
        var ctx2 = document.getElementById("chart-area2").getContext("2d");
        new Chart(ctx1, config1);
        new Chart(ctx2, config2);
    };
</script>
