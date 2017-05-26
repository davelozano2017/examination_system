
        <!-- footer content -->
        <footer>
        <div class="pull-right">
            <label>Developed By  <a target="_blank" href="https://www.facebook.com/bm.aishie"> John David Lozano</a></label>
        </div>
          <label>Online Examination System</label>

          
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo $url?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $url?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   
    <!-- FastClick -->
    <script src="<?php echo $url?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo $url?>assets/vendors/nprogress/nprogress.js"></script>

    <script src="<?php echo $url?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo $url?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo $url?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo $url?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?php echo $url?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- View Student -->
    <script src="<?php echo$url?>assets/js/execute.js"></script>
    <!-- Parsley -->
    <script src="<?php echo $url?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo $url?>assets/build/js/custom.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo $url?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo$url?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo$url?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo$url?>assets/angular/1.4.8.angular.min.js"></script>
    <script src="<?php echo$url?>assets/angular/1.4.2.angular.min.js"></script>
    <script src="<?php echo$url?>assets/functions/execute.js"></script>
    <script src="<?php echo$url?>assets/build/js/overhang.min.js"></script>
    <script src="<?php echo$url?>assets/build/js/jquery-ui.min.js"></script>
    <script src="<?php echo$url?>assets/build/js/custom-file-input.js"></script>
     <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2").select2({
          placeholder: "Select a gender",
          allowClear: true
        });
      });


      $(document).ready(function(){
        $('#ShowCategory').dataTable({
            'ajax':'execute/GetCategory',
        });
      });

      $(document).ready(function(){
        $('#ShowInstructions').dataTable({
            'ajax':'execute/GetInstructions',
        });
      });

      $(document).ready(function(){
        $('#ShowQuestions').dataTable({
            'ajax':'execute/GetQuestions',
        });
      });
    </script>
    <!-- /Select2 -->

    <script type="text/javascript">
    var app = angular.module('app', ['ngMessages']);
    $(document).keyup(function(){
        var x = $("#option_a").val();
        $("#answer").val(x);
        $("#ans").val(x);
    });

    $(document).ready(function(){
        $('.picture').change( function(event) {
            $("#preview").attr('src',URL.createObjectURL(event.target.files[0]));
        });
    });

    function modify($url,$id) 
      {
        var url = $url;
        var id = $id;
        location.href = url + id;

      }

     $(document).ready(function(){
        $('#start').click(function(){
              var elem = $("#myBar");   
              var width = 1;
              var id = setInterval(frame, 30);
              var url = '<?= site_url('execute/dbexport')?>';
              $('#start').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
              elem.show();
              function frame() {
                if (width >= 100) {
                  clearInterval(id);
                } else {
                  width++; 
                  elem.css('width',width+'%');
                  if(width == 100) { 
                        $.ajax({
                            type:'GET',
                            url: url,
                            cache: false,
                            data: {},
                            success:function(response){
                                switch(response)
                                {
                                    
                                    case 'success':
                                    $('#start').html('<i class="fa fa-database"></i> Back Up').attr('disabled',false);
                                    $("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> Database has been successfully exported."});
                                    break;
                                   
                                }
                            }
                        });
                    };
                }
            };
        });
    });

    </script>
    </body>
    <?php include 'notification-system.php' ?>
</html>
