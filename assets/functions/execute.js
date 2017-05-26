function addstudent()
{

	$(document).ready(function(){
		$('#addstudent').click(function(e){
			e.preventDefault();
			var url  = 'execute/add_student';
			var data = $('form').serialize();
			$('#addstudent').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){

					switch(response) {

						case 'duplicated':
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Email is already exist."});
						$('#addstudent').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						break;

						case 'connection error':
						$('#addstudent').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						break;

						case 'success':
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> New student has been added."});
						$('#addstudent').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						break;

						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Please check your internet connection."});
						break;

					};
				}
			});
		});
	});

}


function addnewquestions()
{

	$(document).ready(function(){
		$('#addquestions').click(function(e){
			e.preventDefault();
			var url  = 'execute/add_question';
			var data = $('form').serialize();
			$('#addquestions').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){

					switch(response) {

						case 'success':
						$('#ShowQuestions').DataTable().ajax.reload(null,false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> New question has been added."});
						$('#addquestions').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						break;

						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Please check your internet connection."});
						break;

					};
				}
			});
		});
	});

}




function deleteallrecord() {

	$(document).ready(function(){
		$('#deleteall').click(function(e){
			e.preventDefault();
			var url = 'execute/delete_all';
			$("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Do you want to delete all records?",
			  callback: function (value) {
			    var response = value ? "yes" : "no";
			    if(response == 'yes') { 
			    	location.href = url; 
			    };
			  }
			});
		})
	})
		

}
function insertupdate() {

	$(document).ready(function(){
		$('#insertupdate').click(function(e){
			e.preventDefault();
			var url  = 'execute/InsertUpdate';
			var data = $('form').serialize();
			$('#insertupdate').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'updated':
						$('#insertupdate').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> School information has been updated."});
						break;

						case 'success':
						$('#insertupdate').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> School information has been created."});
						break;

						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> All fields are required."});
						break;
					}
				}
			});
		});
	});

}


function uploadlogo() 
{

	$(document).ready(function (e){
		$('.logo').on('change',(function(e){
			var id = $('#logoid').val();
			e.preventDefault();
				$.ajax({
				url: 'execute/SchoolLogoUpdate/'+id,
				type: "POST",
				data:  new FormData($('#fileUploadForm')[0]),
				contentType: false,
				processData:false,
				success: function(response) {
					switch (response) {
						case 'success':
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> School logo has been updated."});
						break;
						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Something went wrong."});
						break;
					};
				}
			});
		}));
	});

}


function uploadadminprofile() 
{

	$(document).ready(function (e){
		$('.adminphoto').on('change',(function(e){
			var id = $('#id').val();
			e.preventDefault();
				$.ajax({
				url: 'execute/adminprofileupload/'+id,
				type: "POST",
				data:  new FormData($('#UploadAdminProfile')[0]),
				contentType: false,
				processData:false,
				success: function(response) {
					switch (response) {
						case 'updated':
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> Your profile picture has been updated."});
						break;

						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Something went wrong."});
						break;
					};
				}
			});
		}));
	});

}

function updatestudentprofile() 
{

	$(document).ready(function(){
		$('#updatestudentprofile').click(function(e){
			e.preventDefault();
			var id = $('#id').val();
			var data = $('form').serialize();
			$('#deletestudentprofile').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
			$('#updatestudentprofile').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			var url  = 'http://localhost/examination_system/execute/studentupdateinfo/'+id;
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'updated':
						$('#deletestudentprofile').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
						$('#updatestudentprofile').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Student information has been updated."});
						break;


						default:
						$('#updatestudentprofile').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Please check your internet connection."});
						break;
					}
				}
			});
		});


		$('#deletestudentprofile').click(function(){
			$('#deletestudentprofile').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			var id = $('#id').val();
			var url = 'http://localhost/examination_system/execute/DeleteStudent/'+id;
			$("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Do you want to delete this record?",
			  callback: function (value) {
			    var response = value ? "yes" : "no";
			    if(response == 'yes') { 
				$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Student has been removed."});
				    setInterval(function(){
				    location.href = url 
			    	},1500);
			    } else {
					$('#deletestudentprofile').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
			    }
			  }
			});
		});
	});

}





function login() 
{

	$(document).ready(function(){
		$('#login').click(function(e){
			e.preventDefault();
			var url  = 'execute/login';
			var data = $('form').serialize();
			$('#login').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'error':
						$('#login').html('<i class="fa fa-arrow-right"></i> Login').attr('disabled',false);
						$("body").overhang({custom: true,textColor: "#fffff",primary: "#ff5d57",message: "Invalid username or password."});
						break;

						case 'admin':
						location.href= 'dashboard';
						break;

						case 'student':
						location.href= 'profile';
						break

						default:
						$("body").overhang({custom: true,textColor: "#fffff",primary: "#336699",accent: "#336699",message: "This is my custom message 😜"});
						break;
					}
				}
			});
		});
	});

}

function modifyquestion() 
{

	$(document).ready(function(){
		$('#updatequestion').click(function(e){
			e.preventDefault();
			var id = $('#id').val();
			var data = $('form').serialize();
			var url  = 'http://localhost/examination_system/execute/modify_question';
			$('#updatequestion').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'updated':
						$('#updatequestion').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$('#deletequestion').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> This question has been updated."});
						break;


						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Please check your internet connection."});
						break;
					}
				}
			});
		});


		$('#deletequestion').click(function(){
			var id = $('#id').val();
			var url = 'http://localhost/examination_system/execute/que_delete/'+id;
			$('#deletequestion').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Do you want to delete this record?",
			  callback: function (value) {
			    var response = value ? "yes" : "no";
			    if(response == 'yes') { 
				$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Question has been deleted."});
				    setInterval(function(){
				    location.href = url 
			    	},1500);
			    } else {
					$('#deletequestion').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
			    }
			  }
			});
		});
	});

}


function myaccountinfo() {

	$(document).ready(function(){
		$('#updateinfo').click(function(e){
			e.preventDefault();
			var id = $('#id').val();
			var data = $('form').serialize();
			var url  = 'http://localhost/examination_system/execute/updateinfo/'+id;
			$('#updateinfo').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'updated':
						$('#updateinfo').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Account has been updated."});
						break;


						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Required all fields."});
						break;
					}
				}
			});
		});
	});

}

function myaccountpassword() {

	$(document).ready(function(){
		$('#updatepassword').click(function(e){
			e.preventDefault();
			var id = $('#id').val();
			var data = $('form').serialize();
			var url  = 'http://localhost/examination_system/execute/updateinfopassword/'+id;
			$('#updatepassword').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'updated':
						$('#updatepassword').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Password has been changed."});
						break;


						default:
						$('#updatepassword').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Required all fields."});
						break;
					}
				}
			});
		});
	});

}

function addcategory() {

	$(document).ready(function(){
		$('#category').click(function(e){
			e.preventDefault();
			var data = $('form').serialize();
			var url  = 'http://localhost/examination_system/execute/add_category';
			$('#category').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'success':
						$('#category').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						$('#ShowCategory').DataTable().ajax.reload(null,false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> New category has been added."});
						
						break;


						default:
						$('#category').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Required all fields."});
						break;
					}
				}
			});
		});
	});

}

function addinstruction() {

	$(document).ready(function(){
		$('#instruction').click(function(e){
			e.preventDefault();
			var data = $('form').serialize();
			var url  = 'http://localhost/examination_system/execute/add_instructions';
			$('#instruction').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'success':
						$('#ShowInstructions').DataTable().ajax.reload(null,false);
						$('#instruction').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> New instruction has been added."});
						break;


						default:
						$('#instruction').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Required all fields."});
						break;
					}
				}
			});
		});
	});

}

function modifycategory() {

	$(document).ready(function(){
		$('#modifycategory').click(function(e){
			e.preventDefault();
			var id 	 = $('#id').val();
			var data = $('form').serialize();
			var url  = 'http://localhost/examination_system/execute/modify_category/'+id;
			$('#modifycategory').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'success':
						$('#modifycategory').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$('#catdelete').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> Category has been changed."});
						break;


						default:
						$('#modifycategory').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Required all fields."});
						break;
					}
				}
			});
		});
	});

	$('#catdelete').click(function(){
		var id = $('#id').val();
		var url = 'http://localhost/examination_system/execute/cat_delete/'+id;
		$('#catdelete').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
		$("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Do you want to delete this record?",
		  callback: function (value) {
		    var response = value ? "yes" : "no";
		    if(response == 'yes') { 
			$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Category has been deleted."});
			    setInterval(function(){
			    location.href = url 
		    	},1500);
		    } else {
				$('#catdelete').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
		    }
		  }
		});
	});

	

}

function modifyinstruction() {

	$(document).ready(function(){
		$('#modifyinstruction').click(function(e){
			e.preventDefault();
			var id 	 = $('#id').val();
			var data = $('form').serialize();
			var url  = 'http://localhost/examination_system/execute/modify_instructions/'+id;
			$('#modifyinstruction').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'success':
						$('#modifyinstruction').html('<i class="fa fa-check-circle"></i> Save Changes').attr('disabled',false);
						$('#insdelete').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> Instruction has been changed."});
						break;


						default:
						$('#modifyinstruction').html('<i class="fa fa-check-circle"></i> Submit').attr('disabled',false);
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Required all fields."});
						break;
					}
				}
			});
		});
	});

	$('#insdelete').click(function(){
		var id = $('#id').val();
		var url = 'http://localhost/examination_system/execute/ins_delete/'+id;
		$('#insdelete').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
		$("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Do you want to delete this record?",
		  callback: function (value) {
		    var response = value ? "yes" : "no";
		    if(response == 'yes') { 
			$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Instruction has been deleted."});
			    setInterval(function(){
			    location.href = url 
		    	},1500);
		    } else {
				$('#insdelete').html('<i class="fa fa-trash"></i> Delete').attr('disabled',false);
		    }
		  }
		});
	});


}






      
addstudent();
modifyquestion();
insertupdate();
uploadlogo();
updatestudentprofile();
deleteallrecord();
myaccountinfo();
myaccountpassword();
uploadadminprofile();
addnewquestions();
addcategory();
addinstruction();
modifyinstruction();
modifycategory();
