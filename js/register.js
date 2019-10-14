



// register 
$('document').ready(function () {





    /* validation */
    $("#register-form").validate({


        rules:
        {
            name: {
                required: true,
                // minlength: 3
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                minlength: 8,
                maxlength: 10,
                number: true,
            },
            location: {
                required: true,
            },
            cuit: {
                required: true,
                number: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            cpassword: {
                required: true,
                equalTo: '#password'
            },

        },
        messages:
        {
            name: {
                required: "Campo obligatorio",
            },
            password: {
                required: "Ingrese su contraseña",
                minlength: "La contraseña tiene 8 caracteres como minimo",
            },
            cpassword: {
                required: "Reingrese su contraseña",
                equalTo: "Las contraseñas no coinciden. Reintentelo"
            },
            email: {
                required: "Campo obligatorio",
            },
            phone: {
                number: "Ingrese numeros sin espacios unicamente",
                required: "Campo obligatorio",
                minlength: "Ingrese los numeros restantes (10)",
                number: "Ingrese numeros únicamente"
            },
            cuit: {
                number: "Ingrese numeros sin espacios unicamente",
                required: "Campo obligatorio",
            },
            location: {
                required: "Campo obligatorio",
            },
        },
        submitHandler: submitForm

    });
    /* validation */

    /* form submit */

    function submitForm(e) {

        var data = JSON.stringify({
            'name': $("#name").val(),
            'email': $("#email").val(),
            'cuit': $("#cuit").val(),
            'phone': $("#phone").val(),
            'location': $("#location").val(),
            'password': $("#password").val(),
        });

        $.ajax({
            "async": true,
            "crossDomain": true,
            "url": "https://api.unidabo.com/instituciones/register",
            "method": "POST",
            "data": data,
            beforeSend: function () {
                $("#loginErrorMessage").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   Enviando ...');
            },
            success: function (data) {
                // console.log(data);

                if (data.success === false) {
                    document.querySelector("#registerErrorMessage").innerHTML = data.error.message;
                    $('#registerErrorMessage').removeClass('hide')
                    $('#registerErrorMessage').fadeIn()
                    $("#btn-submit span").remove('');
                    $("#btn-submit").html('<span class="">Intente Nuevamente</span>');
                } else {
                    $("#ModalRegister").modal('toggle');
                    $("#ModalRegExito").modal('show')
                    // console.log(data, 'data success')
                }



            },
            complete: function (res) {
                // console.log(res, 'res on complete');
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://api.unidabo.com/confirmation",
                    "method": "POST",
                    "data": data,
                }
                console.log(data);

                $.ajax(settings).done(function (response) {
                    console.log(response, 'response');
                });
                var resArray = JSON.parse(res.responseText);
                var token = resArray.token;
                localStorage.setItem('token', token);

                // sessionStorage.setItem("logged", institucion);
                // var expires = new Date();
                // expires.setTime(expires.getTime() + (24*60*60*1000));
                // document.cookie = 'logged=' + institucion + ';domain=.unidabo.com ;expires=' + expires.toUTCString();

            },
        })

        return false;
    }

    /* form submit */
});
