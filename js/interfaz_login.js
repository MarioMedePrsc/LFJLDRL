$(document).ready(function() {
  
  let ojo_estado = $("#eye_password").attr("src");
  
  $('#bttnTrabajador').click(function() {
    $('#bttnTrabajador').removeClass('white-button').addClass('blue-button');
    $('#bttnEmpleador').removeClass('blue-button').addClass('white-button');
  });

  $('#bttnEmpleador').click(function() {
    $('#bttnTrabajador').removeClass('blue-button').addClass('white-button');
    $('#bttnEmpleador').removeClass('white-button').addClass('blue-button');
  });

  /*$('#eye_password').on({
    'click': function(){
      if(ojo_estado == "closed_eye.png"){
        $("#eye_password").attr("src", "images/opened_eye.png");
      }else if(ojo_estado == "opened_eye.png"){
        $("#eye_password").attr("src", "images/closed_eye.png");
      }
    }
  });*/

  $("#eye_password").click(function(){
    if(ojo_estado == "images/closed_eye.png"){
      $("#eye_password").attr("src", "images/open_eye.png");
      $("#password").attr("type", "text");
    }else if(ojo_estado == "images/open_eye.png"){
      $("#eye_password").attr("src", "images/closed_eye.png");
      $("#password").attr("type", "password");
    }
  });

});