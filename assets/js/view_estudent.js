function view_profile($url,$action,$id)
{
  var url = $url;
  var action = $action;
  var id = $id;
    switch (action)
    {
      case action:
        location.href = url + action + id;
      break;
    }
} 

function delete_student($url,$id)
{
  var url = $url;
  var id = $id;
  
	  swal({
	  title: "",
	  text: "<h4>Are you sure you want to delete this student?</h4>",
	  type: "warning",
	  html:true,
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Yes, delete it!",
	  closeOnConfirm: false
	},
	function(){
	  location.href = url + id;
	});

    
} 