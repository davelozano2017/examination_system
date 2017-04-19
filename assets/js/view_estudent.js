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