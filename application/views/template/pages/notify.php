<?php
$errors = $this->session->flashdata('errors');
if($errors):
  echo '<div class="alert alert-danger">'.$errors.'</div>';
endif;
if(isset($_SESSION['notification']) == 'login_failed'):
?>
<script type="text/javascript">
swal({
type: "error",
title: "",
text: '<h4>Invalid username or password.</h4>',
html: true,
timer: 3000,
confirmButtonText: "Close",
confirmButtonColor: "#336699",
showConfirmButton: true
});
</script>
<?php
endif;