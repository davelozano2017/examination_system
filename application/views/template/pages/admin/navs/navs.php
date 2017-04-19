<?php 
if(!isset($data['session_id'])) { redirect('login'); }
if($data['role'] == 1){redirect('profile');}
foreach ($admin_data as $r):
  $udata = array(
    'id'     => $r->id, 'image'     => $r->image,
    'email'  => $r->email,'address' => $r->address,
    'gender' => $r->gender,'name'   => $r->name
    );
endforeach;

?>
  <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo $udata['image']?>" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Howdy,</span>
                <h2><?php echo$udata['name']?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                  <li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a href="#"><i class="fa fa-user"></i> Students <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="addstudents">Add New Students</a></li>
                      <li><a href="viewstudents">View Students</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-text"></i> Examination <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="result">Results</a></li>
                      <li><a href="modifyquestions">Modify Questions</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-envelope"></i> Email <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="emailconfiguration">Configuration</a></li>
                    </ul>
                  </li>
                  </ul>

                  <h3>system</h3>
                <ul class="nav side-menu">

                  <li><a><i class="fa fa-database"></i> Database <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="backupdb">Back Up</a></li>
                      <li><a href="restoredb">Restore</a></li>
                    </ul>
                  </li>

                 </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $udata['image']?>"><?php echo $udata['name']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="myaccount"><i class="fa fa-pencil pull-right"></i> My Account</a></li>
                    <li><a href="<?php echo$url?>execute/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
