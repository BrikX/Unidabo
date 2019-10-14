$("document").ready(function () {
  var cookiename = getCookie("cookiename");
  if (cookiename == "value") {
  } else {
  }

  //function getCookie
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") c = c.substring(1);
      if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return "";
  }

  /* validation */
  $("#login-form").validate({
    rules: {
      mail_login: {
        required: true
      },
      // cuit_login: {
      //     required: true
      // },
      password_login: {
        required: true
      }
    },
    messages: {
      mail_login: "Ingrese un mail de usuario existente",
      // cuit_login: "Ingrese cuit/dni de usuario existente",
      password_login: {
        required: "Ingrese su contraseña"
      }
    },
    submitHandler: submitForm
  });
  /* validation */

  /* form submit */

  function submitForm() {
    var data = JSON.stringify({
      email: $("#mail_login").val(),
      // 'cuit': $("#cuit_login").val(),
      password: $("#password_login").val()
    });

    $.ajax({
      async: true,
      crossDomain: true,
      url:
        "https://api.unidabo.com/instituciones/login",
      method: "POST",
      data: data,
      beforeSend: function () {
        $("#loginErrorMessage").fadeOut();
        $("#buttonLogin span").html(
          '<span class="glyphicon glyphicon-transfer"></span>   Enviando ...'
        );
      },
      success: function (data) {
        // $('#loginErrorMessage').hide()

        if (data.success === false) {
          // $('#ModalLogin').modal('hide')
          // $('.login-container').addClass('hide')
          // $('.botoneraLogggedIn').addClass('show')
          // document.querySelector(".nombreInstitucion").innerHTML = data.institucion.name;
          document.querySelector("#loginErrorMessage").innerHTML =
            data.error.message;
          $("#loginErrorMessage").removeClass("hide");
          $("#loginErrorMessage").fadeIn();
          $("#buttonLogin span").remove("");
          $("#buttonLogin").html('<span class="">Intente Nuevamente</span>');
        } else {
          $("#ModalLogin").modal("hide");
          $(".login-container").addClass("hide");
          $(".botoneraLogggedIn").addClass("show");
          document.querySelector(".nombreInstitucion").innerHTML =
            data.institucion.name;
        }
      },
      complete: function (data) {
        console.log(data, "response on complete");
        // if (data.instutucion.success === true) {
        //     $('#ModalLogin').modal('hide')
        //     $('.login-container').addClass('hide')
        //     $('.botoneraLogggedIn').addClass('show')
        //     document.querySelector(".nombreInstitucion").innerHTML = data.institucion.name;
        // }

        //Cookie temporal
        document.cookie = "mtracker=somevalue; path=/";
        //Cookie temporal

        var resArray = JSON.parse(data.responseText);
        var token = resArray.token;
        var logged = resArray.success;
        var institucion = JSON.stringify(resArray);
        sessionStorage.setItem("token", token);
        sessionStorage.setItem("logged", institucion);
        var expires = new Date();
        expires.setTime(expires.getTime() + (24*60*60*1000));
        document.cookie = 'logged=' + institucion + ';domain=.unidabo.com ;expires=' + expires.toUTCString();
        // document.cookie = token;
        // document.cookie = logged;
        CaseButton(true);
      }
    });
    return false;
  }
  /* form submit */
});
