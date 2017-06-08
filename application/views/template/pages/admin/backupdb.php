   <div class="right_col" role="main">
    <div class="title_left">
      <h3><i class="fa fa-database"></i> Back Up Database</h3>
    </div>


    <div class="row">
      
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
         
          <div class="x_content">
            <!-- start -->
            <div class="row">
              <div id="myProgress">
                <div id="myBar" hidden></div>
              </div>
              <hr><button id='start' class='btn btn-success flat'><i class='fa fa-database'></i> Back Up</button> 
            </div>
            <!-- end -->


          </div>
        </div>
        
        </div>
        </div>
      </div>
    </div>   

<?php 
    $this->load->view('template/components/footer');
 ?>

 <script type="text/javascript">
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
    var app = angular.module('app', ['ngMessages']);
    app.controller('myCtrl',function($scope){});

 </script>