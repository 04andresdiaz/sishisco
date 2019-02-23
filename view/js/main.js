$(document).ready(function(){
  $("#btnLogin").on("click", function(){
    var userName = document.getElementById("nameUser").value,
        userPassword = document.getElementById("passwordUser").value;
      if (userName == "") {
        $("#mensajes").fadeIn(1400).html("Recuerda No dejar el campo usuario Vacio");
        $("#mensajes").addClass("mensajesError");
        $("#mensajes").removeClass("mensajesErrorUserPass");
        $("#nameUser").focus();
      }else if (userPassword == "") {
        $("#mensajes").fadeIn(1400).html("Recuerda No dejar el campo contraseña Vacio");
        $("#mensajes").addClass("mensajesError");
        $("#mensajes").removeClass("mensajesErrorUserPass");
        $("#passwordUser").focus();
      }else{
        $.ajax({
          type: "POST",
          url: "controller/controllerValidarFormularioLogin.php",
          data: "user="+userName+"&password="+userPassword,
          success: function(res){
            if (res == "1") {
              location.href = 'view/home.php';
            }else if(res == "2"){
              $("#mensajes").fadeIn(1400).html("Al parecer el usuario es incorrecto");
              $("#mensajes").addClass("mensajesErrorUserPass");
              $("#nameUser").focus();
            }else if(res == "3"){
              $("#mensajes").fadeIn(1400).html("Al parecer la contraseña es incorrecta");
              $("#mensajes").addClass("mensajesErrorUserPass");
              $("#passwordUser").focus();
            }
          }
        })
      }
  })
  $("#nameUser, #passwordUser").bind('blur keyup', function(){
    if ($(this).val() != "") {
      $("#mensajes").slideUp(400);
    }
  })
})
