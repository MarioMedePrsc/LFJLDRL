$(document).ready(function() {
  
  $('#bttnTrabajador').click(function() {
    $('#bttnTrabajador').removeClass('white-button').addClass('blue-button');
    $('#bttnEmpleador').removeClass('blue-button').addClass('white-button');
    $(".email").attr("id", "email_trabajador");
  });

  $('#bttnEmpleador').click(function() {
    $('#bttnTrabajador').removeClass('blue-button').addClass('white-button');
    $('#bttnEmpleador').removeClass('white-button').addClass('blue-button');
    $(".email").attr("id", "email_empleador");
  });

  $('#show_password').click(function(){
    if ($('#show_password').is(':checked')) {
      $('#password').attr('type', 'text');
    }else{
      $('#password').attr('type', 'password');
    }
  });

});