<div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-check"></i> Results</h3>
    </div>
  <div class="row">
      <div class="x_panel">
        <div class="x_content">
        <table id="datatable-buttons" class="table table-striped  dt-responsive nowrap ShowResults" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Score</th>
              <th>Percentage</th>
              <th>Status</th>
              <th>Date of Assestment</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            foreach ($results as $row): 
              $stats = $row->status;
              $status = ($stats == 'Passed') ? '<label class="label label-success">Passed</label>' : '<label class="label label-danger">Failed</label>'
              ?>
              <tr>
                <td><?php echo$i++?></td>
                <td><?php echo$row->name?></td>
                <td><?php echo$row->email?></td>
                <td><?php echo$row->score?></td>
                <td><?php echo$row->percentage.'%'?></td>
                <td><?php echo$status?></td>
                <td><?php echo$row->date?></td>
              </tr>  
            <?php endforeach;?>
          </tbody>
        </table>

        </div>
      </div>
  </div>
</div>   

<?php $this->load->view('template/components/footer');?>
<script type="text/javascript">
  // $('#datatable-buttons').dataTable({
  //   "aaData": orgContent,
  //   searching: false
  // });

   var app = angular.module('app', ['ngMessages']);
   app.controller('myCtrl',function($scope){});
</script>
