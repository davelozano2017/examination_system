<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-eye"></i> View Students</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                 <div class="x_title">
                    <h2><i class="fa fa-users"></i> List of Students </h2>
                    <?php if($results == TRUE): ?>
                      <button id='deleteall' class="btn btn-danger pull-right animated fadeInDown flat">
                      <i class="fa fa-trash"></i></button>
                    <?php endif;?>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div id="showallstudents"></div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
