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
    <script src="<?php echo base_url()?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>assets/vendors/nprogress/nprogress.js"></script>

    <script src="<?php echo base_url()?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url()?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?php echo base_url()?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>assets/build/js/custom.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url()?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url()?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url()?>assets/functions/execute.js"></script>
    <!-- angluar -->
    <script src="<?php echo base_url()?>assets/angular/1.4.8.angular.min.js"></script>
    <script src="<?php echo base_url()?>assets/angular/1.4.2.angular.min.js"></script>
    <!-- overhang -->
    <script src="<?php echo base_url()?>assets/build/js/overhang.min.js"></script>
    <script src="<?php echo base_url()?>assets/build/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url()?>assets/build/js/custom-file-input.js"></script>
    <!-- Costum Scripts -->
    <script src="<?php echo base_url()?>assets/build/js/costum-scripts.js"></script>
    <script type="text/javascript">

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

    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();
      $("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Username has been copied."});
    }


    </script>
    </body>
</html>
