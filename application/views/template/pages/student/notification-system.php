<?php 
if(isset($_SESSION['notification']))
{
	switch ($_SESSION['notification']) {
		case 'a':
		echo $message = '<div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> No record found.</div>';
		break;
		case 'updated':
			?>
			<script type="text/javascript">
			swal({
				type: "success",
				title: "",
				text: '<h4>School Information has been updated.</h4>',
				html: true,
				timer: 3000,
				confirmButtonText: "Close",
				confirmButtonColor: "#336699",
				showConfirmButton: true
				});
			</script>
			<?php
		break;

		case 'deleted':
			?>
			<script type="text/javascript">
			swal({
				type: "success",
				title: "",
				text: '<h4>All records has been deleted.</h4>',
				html: true,
				timer: 3000,
				confirmButtonText: "Close",
				confirmButtonColor: "#336699",
				showConfirmButton: true
				});
			</script>
			<?php
		break;

		case 'smtpsuccess':
			?>
			<script type="text/javascript">
			swal({
				type: "success",
				title: "",
				text: '<h4>SMTP Credentials has been saved.</h4>',
				html: true,
				timer: 3000,
				confirmButtonText: "Close",
				confirmButtonColor: "#336699",
				showConfirmButton: true
				});
			</script>
			<?php
		break;

		case 'smtpupdated':
			?>
			<script type="text/javascript">
			swal({
				type: "success",
				title: "",
				text: '<h4>SMTP Credentials has been updated.</h4>',
				html: true,
				timer: 3000,
				confirmButtonText: "Close",
				confirmButtonColor: "#336699",
				showConfirmButton: true
				});
			</script>
			<?php
		break;

		case 'student_successfully_deleted':
			?>
			<script type="text/javascript">
			swal({
				type: "success",
				title: "",
				text: '<h4>Student has been successfully removed.</h4>',
				html: true,
				timer: 3000,
				confirmButtonText: "Close",
				confirmButtonColor: "#336699",
				showConfirmButton: true
				});
			</script>
			<?php
		break;

		case 'myaccount_updated':
			?>
			<script type="text/javascript">
			swal({
				type: "success",
				title: "",
				text: '<h4>Account has been updated.</h4>',
				html: true,
				timer: 3000,
				confirmButtonText: "Close",
				confirmButtonColor: "#336699",
				showConfirmButton: true
				});
			</script>
			<?php
		break;
		
		case 'success':
			?>
			<script type="text/javascript">
			swal({
				type: "success",
				title: "",
				text: '<h4>School Information has been created.</h4>',
				html: true,
				timer: 3000,
				confirmButtonText: "Close",
				confirmButtonColor: "#336699",
				showConfirmButton: true
				});
			</script>
			<?php
		break;

		case 'success_add_student':
		?>
		<script type="text/javascript">
		swal({
			type: "success",
			title: "",
			text: '<h4>New student has been added.</h4>',
			html: true,
			timer: 3000,
			confirmButtonText: "Close",
			confirmButtonColor: "#336699",
			showConfirmButton: true
			});
		</script>
		<?php 
		break;

		case 'duplicated_email_student':
		?>
		<script type="text/javascript">
		swal({
			type: "error",
			title: "",
			text: '<h4>Email is in use.</h4>',
			html: true,
			timer: 3000,
			confirmButtonText: "Close",
			confirmButtonColor: "#336699",
			showConfirmButton: true
			});
		</script>
		<?php
		break;

		
		default:
			# code...
			break;
	}
}

