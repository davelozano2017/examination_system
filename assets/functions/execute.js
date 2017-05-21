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
					// $('button').html('Please wait...').attr('disabled',true);
					// $('button').attr('disabled',true);
					// $('button').html('<i class="fa fa-check-circle"></i> Submit');
					// $('button').attr('disabled',true);
					if (response == 'error') {
					swal({type: "error",title: "",text: '<h4>Email is already exist.</h4>',html: true,timer: 3000,confirmButtonText: "Close",confirmButtonColor: "#336699",showConfirmButton: true});
					} else {
					swal({type: "success",title: "",text: '<h4>New student has been added.</h4>',html: true,timer: 3000,confirmButtonText: "Close",confirmButtonColor: "#336699",showConfirmButton: true});
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
			$.ajax({
				type:'POST',
				url: url,
				data: data,
				success:function(response){
					// $('button').html('Please wait...').attr('disabled',true);
					// $('button').attr('disabled',true);
					// $('button').html('<i class="fa fa-check-circle"></i> Submit');
					// $('button').attr('disabled',true);
					switch(response)
					{
						case 'error':
						swal({type: "error",title: "",text: '<h4>Invalid username or password.</h4>',html: true,timer: 3000,confirmButtonText: "Close",confirmButtonColor: "#336699",showConfirmButton: true});
						// new PNotify({text: 'Invalid username or password.',type: 'error',styling: 'bootstrap3',});
						break;

						case 'admin':
						location.href= 'dashboard';
						break;

						case 'student':
						location.href= 'profile';
						break

						default:
						swal({type: "error",title: "",text: '<h4>Complete all fields.</h4>',html: true,timer: 3000,confirmButtonText: "Close",confirmButtonColor: "#336699",showConfirmButton: true});
						// new PNotify({text: 'Complete all fields.',type: 'error',styling: 'bootstrap3',});
						break;
					}
				}
			});
		});
	});

}
