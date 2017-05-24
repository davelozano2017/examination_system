function addstudent()
{

	$(document).ready(function(){
		$('#addstudent').click(function(e){
			e.preventDefault();
			var url  = 'execute/add_student';
			var data = $('form').serialize();
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					if (response == 'error') {
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> Email is already exist."});
					} else {
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#0da65a",message: "<i class='fa fa-check-circle'></i> New student has been added."});
					}
				}
			});
		});
	});

}

function insertupdate() {

	$(document).ready(function(){
		$('#insertupdate').click(function(e){
			e.preventDefault();
			var url  = 'execute/InsertUpdate';
			var data = $('form').serialize();
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'updated':
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> School information has been updated."});
						break;

						case 'success':
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
		$('.schoollogo').on('change',(function(e){
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


function updatestudentprofile() 
{

	$(document).ready(function(){
		$('#updatestudentprofile').click(function(e){
			e.preventDefault();
			var id = $('#id').val();
			var data = $('form').serialize();
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
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Student information has been updated."});
						break;

						default:
						$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#ff5d57",message: "<i class='fa fa-remove'></i> All fields are required."});
						break;
					}
				}
			});
		});


		$('#deletestudentprofile').click(function(){
			var id = $('#id').val();
			var url = 'http://localhost/examination_system/execute/DeleteStudent/'+id;
			$("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Do you want to delete this record?",
			  callback: function (value) {
			    var response = value ? "yes" : "no";
			    if(response == 'yes') { 
				$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Student information has been removed."});
				    setInterval(function(){
				    location.href = url 
			    	},1500);
			    };
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
			$.ajax({
				type:'POST',
				url: url,
				data: data,
				success:function(response){
					switch(response)
					{
						case 'error':
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


      
addstudent();
insertupdate();
uploadlogo();
updatestudentprofile();