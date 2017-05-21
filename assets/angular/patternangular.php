
<!DOCTYPE html><!doctype html>
<html lang="en">
<head>
<title>SMIXS - Danish Joy</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="dist/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<link rel="shortcut icon" href="img/meg.png"/>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>
</head>
<body ng-app="app">


<div class="container">
	
    <!--Registration-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="myModalLabel">Register a New User</h4>
			      </div>

			      <div class="modal-body">
			      	<div>

  					<!-- Nav tabs -->
					  

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="student">

					    	<div class="row">
                             	<div class="col-xs-12 col-md-12">
	                               <form class="form-horizontal" name="register" method="post" action="" novalidate>
	                                <div class="radio">
	                                	<label class="radio-inline">
										  <input type="radio" name="user_type" required id="rbStudents" value="1" ng-model="user"> Students
										</label>
	                                	<label class="radio-inline">
										  <input type="radio" name="user_type" required id="rbTeachers" value="2"ng-model="user"> Teachers
										</label>
										<label class="radio-inline">
										  <input type="radio" name="user_type" required id="rbParents" value="3" ng-model="user"> Parents
										</label>
									</div>
									<div ng-messages="register.user_type.$error" ng-if="register.user_type.$dirty">
										      <span ng-message="required" class="label label-danger">Username is required </span>
								    </div>
	                                	<br>
	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-user"></i>
			        						    <input type="text" class="form-control" id="inputUsername" name="r_username" placeholder="Username" ng-model="r_username" ng-minlength="6" ng-maxlength="40" required>
			        						</div>
			        						<div ng-messages="register.r_username.$error" ng-if="register.r_username.$dirty">
										      <span ng-message="minlength" class="label label-danger">Username is too short.</span>
						    				  <span ng-message="maxlength" class="label label-danger">Username is too long. </span>
						    				  <span ng-message="required" class="label label-danger">Username is required </span>
										    </div>
	                                      </div>
	                                    </div>
	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-envelope"></i>
			        						    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address" ng-model="email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required>
			        						</div>
			        						<div ng-messages="register.email.$error" ng-if="register.email.$dirty">
										      <span ng-message="pattern" class="label label-danger">Please enter a valid email address.</span>
										      <span ng-message="required" class="label label-danger">Email Address is required.</span>
						    				</div>
	                                      </div>
	                                    </div>
	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-lock"></i>
			        						    <input type="password" class="form-control" id="inputPassword" name="r_password" placeholder="Password" ng-model="r_password" ng-minlength="6" ng-maxlength="40" required>
			        						</div>
			        						<div ng-messages="register.r_password.$error" ng-if="register.r_password.$dirty">
			        						  <span ng-message="required" class="label label-danger">Password is required.</span>
										      <span ng-message="minlength" class="label label-danger">Password is too short.</span>
						    				  <span ng-message="maxlength" class="label label-danger">Password is too long. </span>
										    </div>
	                                      </div>
	                                    </div>
	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-lock"></i>
			        						    <input type="password" class="form-control" id="inputConfirmPass" name="cpassword" placeholder="Confirm Password" ng-model="cpassword" ng-minlength="6" ng-maxlength="40" required>
			        						</div>
			        						<div ng-messages="register.cpassword.$error" ng-if="register.cpassword.$dirty">
			        						  <span ng-message="required" class="label label-danger">Confirm Password is required.</span>
										      <span ng-message="minlength" class="label label-danger">Confirm Password is too short.</span>
						    				  <span ng-message="maxlength" class="label label-danger">Confirm Password is too long. </span>
										    </div>
	                                      </div>
	                                    </div>
	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-info-sign"></i>
			        						    <input type="text" class="form-control" id="inputFirstname" required name="firstname" ng-model="firstname" placeholder="First Name">
			        						    <div ng-messages="register.firstname.$error" ng-if="register.firstname.$dirty">
											      <span ng-message="required" class="label label-danger">Firstname is required.</span>
							    				</div>
			        						</div>
	                                      </div>
	                                    </div>

	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-info-sign"></i>
			        						    <input type="text" class="form-control" id="inputMiddlename" required name="middlename" ng-model="middlename" placeholder="Middle Name">
			        						    <div ng-messages="register.middlename.$error" ng-if="register.middlename.$dirty">
											      <span ng-message="required" class="label label-danger">Middlename is required.</span>
							    				</div>
			        						</div>
	                                      </div>
	                                    </div>

	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-info-sign"></i>
			        						    <input type="text" class="form-control" id="inputLastname" required name="lastname" ng-model="lastname" placeholder="Last Name">
			        						    <div ng-messages="register.lastname.$error" ng-if="register.lastname.$dirty">
											      <span ng-message="required" class="label label-danger">Lastname is required.</span>
							    				</div>
			        						</div>
	                                      </div>
	                                    </div>

	                                    <div class="form-group" ng-show="user =='3'">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-briefcase"></i>
			        						    <input type="text" class="form-control" id="inputProfession" name="profession" placeholder="Profession">
			        						</div>
	                                      </div>
	                                    </div>

	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-gift"></i>
			        						    <input type="date" class="form-control" id="inputBirthday" name="birthday" ng-model="birthday" required placeholder="Birthday">
			        						</div>
			        						<div ng-messages="register.birthday.$error" ng-if="register.birthday.$dirty">
											      <span ng-message="required" class="label label-danger">Birthday is required.</span>
							    			</div>
	                                      </div>
	                                    </div>
	                                    <div class="form-group">
	                                      <div class="col-sm-10">
		                                    	<label class="radio-inline">
												  <input type="radio" required name="gender" id="Male" value="Male"> Male
												</label>
												<label class="radio-inline">
												  <input type="radio" required name="gender" id="Female" value="Female"> Female
												</label>
											</div>
											<div ng-messages="register.gender.$error" ng-if="register.gender.$dirty">
											      <span ng-message="required" class="label label-danger">Gender is required.</span>
							    			</div>
										</div>
	                                
										<div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-info-sign"></i>
			        						    <input type="text" class="form-control" id="inputStreet" name="street" required ng-model="street" placeholder="House No. / Street">
			        						</div>
			        						<div ng-messages="register.street.$error" ng-if="register.street.$dirty">
											      <span ng-message="required" class="label label-danger">House No. / Street is required.</span>
							    			</div>
	                                      </div>
	                                    </div>

	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-info-sign"></i>
			        						    <input type="text" class="form-control" id="inputBarangay" name="barangay" required ng-model="barangay" placeholder="Barangay">
			        						</div>
			        						<div ng-messages="register.barangay.$error" ng-if="register.barangay.$dirty">
											      <span ng-message="required" class="label label-danger">Barangay is required.</span>
							    			</div>
	                                      </div>
	                                    </div>

	                                    <div class="form-group">
                                      	 <div class="col-sm-10">
	                                        <select class="form-control" id="inputCity" required title="City must not be empty"placeholder="City / Municipality" name="municipality">
	                                          <option>Select City</option>
	                                          <option value='1'>Caloocan</option><option value='2'>Manila</option><option value='3'>Makati</option><option value='4'>Taguig</option>	                                        </select>
	                                      </div>
	                                      <div ng-messages="register.municipality.$error" ng-if="register.municipality.$dirty">
											      <span ng-message="required" class="label label-danger">Municipality is required.</span>
							    			</div>
	                                    </div>

	                                    <div class="form-group" ng-show="user =='1'">
                                      	 <div class="col-sm-10">
	                                        <select class="form-control" id="inputClasses" required title="Class must not be empty"placeholder="Section" name="classes">
	                                          <option>Select Class</option>
	                                          <option value='1'>M11</option><option value='2'>M12</option><option value='3'>M13</option><option value='4'>M21</option>	                                        </select>
	                                      </div>
	                                      <div ng-messages="register.classes.$error" ng-if="register.classes.$dirty">
											      <span ng-message="required" class="label label-danger">Class/Section is required.</span>
							    			</div>
	                                    </div>

	                                    <div class="form-group" ng-show="user =='1'">
                                      	 <div class="col-sm-10">
	                                        <select class="form-control" id="inputCourse" required title="Course must not be empty"placeholder="Course" name="course">
	                                          <option>Select Course</option>
	                                          <option value='1'>BSIT</option><option value='2'>BSHRM</option><option value='3'>ComSci</option><option value='4'>BSBA</option><option value='5'>CTE</option>	                                        </select>
	                                      </div>
	                                      <div ng-messages="register.course.$error" ng-if="register.course.$dirty">
											      <span ng-message="required" class="label label-danger">Course is required.</span>
							    			</div>
	                                    </div>

	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-phone-alt"></i>
			        						    <input type="text" class="form-control" id="inputPhone" name="telephone" placeholder="Phone No.">
			        						</div>
	                                      </div>
	                                    </div>

	                                    <div class="form-group">
	                                      <div class="col-sm-10">
	                                        <div class="inner-addon right-addon">
			        						 <i class="glyphicon glyphicon-earphone"></i>
			        						    <input type="text" class="form-control" id="inputMobile" name="mobile" ng-model="mobile" placeholder="Mobile" ng-pattern="/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/" required maxlenght="10">
			        						</div>
			        						<div ng-messages="register.mobile.$error" ng-if="register.mobile.$dirty">
											  <div ng-message="required" class="label label-danger">This field is required</div>
											  <div ng-message="pattern" class="label label-danger">Must be a valid 10 digit phone number</div>
											</div>
	                                      </div>
	                                    </div>
	                                    <input type="submit" class="btn btn-danger" ng-show="user == '3'" name="linktostudents" value="Link to Student" ng-disabled="!register.$valid">
	                                    <input type="submit" name="submit" class="btn btn-primary" value="Register a new membership" ng-disabled="!register.$valid"></button>
	                                    <a type="button" class="btn btn-default" href="home">Back to Login Page</a>
			        				</form>

                                </div>
                            </div>


					    </div>
					   </div>

					</div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
      </div>
<!--Terms and Conditions-->
      <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h5 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
			      </div>

			      <div class="modal-body">
			      </div>
				  <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>

			    </div>
			  </div>
			</div>
		</div>
      </div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('#myModal').modal({
    backdrop: 'static',
    keyboard: false
	});
</script>
<script>
      var app = angular.module('app', ['ngMessages']);
       app.controller('MyController', function ($scope) {
            //This will hide the DIV by default.
            $scope.IsHidden = true;
            $scope.ShowHide = function () {
                //If DIV is hidden it will be visible and vice versa.
                $scope.IsHidden = $scope.IsHidden ? false : true;
            }
        });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-messages.min.js"></script>

</html>