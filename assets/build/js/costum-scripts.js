$(document).ready(function(){

   $(".select2").select2({
    placeholder: "Select a gender",
    allowClear: true
  });

  $(".category").select2({
    placeholder: "Select a category",
    allowClear: true
  });


  $('#ShowCategory').dataTable({
      'ajax':'execute/GetCategory',
  });

   $('#ShowInstructions').dataTable({
      'ajax':'execute/GetInstructions',
  });

  $('#ShowQuestions').dataTable({
      'ajax':'execute/GetQuestions',
  });

});

$(document).keyup(function(){
    var x = $("#option_a").val();
    $("#answer").val(x);
    $("#ans").val(x);
});


function begin($email) {
  var email = $email;
  var url = 'execute/checkresult/'+email;
  $('#begin').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
  $("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Are you sure you want to start your assestment?",
  callback: function (value) {
    var response = value ? "yes" : "no";
    if(response == 'yes') { 
      $.ajax({
        type:'POST',
        url : url,
        data : {email : email},
        cache: false,
        success:function(response) {
          if(response == 'finished') {
            location.href = 'done';
          } else {
            location.href = 'exam/begin';
          }
        }

      });
    } else {
      $('#begin').html('<i class="fa fa-check-circle"></i> Begin').attr('disabled',false);
    };
  }
  });
}

$('#send').click(function(){
        $('#send').html('<i class="ld ld-ring ld-cycle"></i> Please wait...').attr('disabled',true);
        $("body").overhang({type: "confirm",primary: "#5389ff",accent: "#5389ff",yesColor: "#3498DB",message: "Are you sure you want to finish this examination?",
        callback: function (value) {
          var response = value ? "yes" : "no";
          if(response == 'yes') { 
            $('form').submit();
          } else {
            $('#send').html('<i class="fa fa-check-circle"></i> Click to submit').attr('disabled',false);
          };
        }
    });
});





function showallstudents() {
  var url = 'http://localhost/examination_system/showallstudents';
  $.ajax({
    type:'POST',
    url : url,
    cache:false,
    success:function(data) {
      $('div#showallstudents').html(data);
    }
  });
}

showallstudents();