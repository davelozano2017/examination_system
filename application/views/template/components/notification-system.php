<?php 
if(isset($_SESSION['notification']))
{
	switch ($_SESSION['notification']) {
		case 'deleted':
			?>
			<script type="text/javascript">
				$("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> All records has been deleted."});
			</script>
			<?php
		break;
		
		default:
			# code...
			break;
	}
}

