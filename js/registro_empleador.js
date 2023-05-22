$(document).ready(function() {
  
  $('#show_password').click(function(){
    if ($('#show_password').is(':checked')) {
      $('#empleador_password').attr('type', 'text');
    }else{
      $('#empleador_password').attr('type', 'password');
    }
  });

  $('#show_password_confirm').click(function(){
    if ($('#show_password_confirm').is(':checked')) {
      $('#empleador_password_confirm').attr('type', 'text');
    }else{
      $('#empleador_password_confirm').attr('type', 'password');
    }
  });
  
});