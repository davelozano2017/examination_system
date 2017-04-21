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

function delete_all($url)
{

  var url = $url;
	  swal({
	  title: "",
	  text: "<h4>Are you sure you want to delete all students?</h4>",
	  type: "warning",
	  html:true,
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Yes, delete it!",
	  closeOnConfirm: false
	},
	function(){
	  location.href = url;
	});

}

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}