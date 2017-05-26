function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  $("body").overhang({custom: true,html: true,textColor: "#fffff",primary: "#5389ff",message: "<i class='fa fa-check-circle'></i> Username has been copied."});
}

