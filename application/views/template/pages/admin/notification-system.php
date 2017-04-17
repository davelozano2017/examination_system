<?php 
if(isset($_SESSION['notification']))
{
	switch ($_SESSION['notification']) {
		
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

