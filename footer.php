<section id="footer">
	<div class="container-fluid">
		<div class="footer-container">
			<div class="row">

				<div class="col-md-5 col-xs-12">
					<div class="footer-art">
						<h5>©2018 - <span>unidabo.com</span> - Todos los derechos reservados - d_<span>mobillers.com</span></h5>		
					</div>	
				</div>

        <div class="col-md-4 col-xs-12">
          <div class="footer-links">
                <a href="equipo.php">Equipo</a>
                <a href="politicas-privacidad.php">Políticas de Privacidad</a>
                <a href="terminos-condiciones.php">Términos y Condiciones</a>
          </div>  
        </div>

        <div class="col-md-3 col-xs-12">
          <div class="footer-socials_container">
              <ul class="footer-icons">
                <li><a href="https://www.facebook.com/unidabo.ong.50?ref=br_tf&epa=SEARCH_BOX" target="_blank"><img src="img/socialw-icon1.png" class="img-responsive"></a></li>
                <li><a href="https://www.instagram.com/unidabo/" target="_blank"><img src="img/socialw-icon3.png" class="img-responsive"></a></li>
                <li><a href="https://www.youtube.com/channel/UC91h9fl5k36FkTPFK3lA9dw" target="_blank"><img src="img/socialw-icon4.png" class="img-responsive"></a></li>
                 <li class="arrow-up"><a href="#nav"><img src="img/arrow-up.png" class="img-responsive"></a></li>   
              </ul>
          </div>
        </div>

			</div>
		</div>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="search-text">
          <form>
            <div class="form-group">
              <label for="staticSearch" class="col-form-label">
                <i class="fas fa-search"></i>
              </label>
              <input type="search" name="search" value="" id="staticSearch" placeholder="Buscá por tipo de donación o título del caso">   
            </div>
          </form>
        </div> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="login-text">
          <form method="post" id="login-form" >
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Ingresar</h5>

              <div class="container">
                <div class="login-datos">
                  <input type="email" class="Text2" placeholder="E-mail" name="mail_login" id="mail_login" required>
                 <!--  <input type="text" class="Text2" placeholder="Cuit / DNI" name="cuit_login" id="cuit_login" required> -->
                  <input type="password" class="Text4" placeholder="Password" name="password_login" id="password_login" />

                  <!-- <li><input type="checkbox" name="rec" value="rec contr"><span>Recordar Contraseña</span></li> -->

                  <label><li>
                    <input type="checkbox" name="rec" value="rec contr"><span>Recordar Contraseña</span>
                  </li></label>

                  <button id="buttonLogin" type="submit"><span class="ingresarBtn">Ingresar</span></button>
                </div>    
              </div>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              
              <div class="container">
                <div class="login-links">
                <p id="loginErrorMessage" class="hide"></p>
                  <span class="psw"><a href="#">Olvidé mi contraseña</a></span>
                  <span class="reg"><a href="#" data-toggle="modal" data-target="#ModalRegister">No estoy registrado</a></span>
                </div>
              </div>
    
            </div>
          
          </form>
        </div> 
      </div>
    </div>
  </div>
</div>



<?php require_once 'modals/modal-register.php' ?>

<script>
  var input = document.getElementById('autocomplete');
  var autocomplete = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
  google.maps.event.addListener(autocomplete, 'place_changed', function(){
     var place = autocomplete.getPlace();
  })
</script>


<div class="modal fade" id="ModalRegExito" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="registerEx-text">
          <form>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Registro Exitoso ¡Bienvenido! :)</h5>

              <div class="container">
                <div class="registerEx-datos">
                  <p class="text">En breves te llegará un e-mail para confirmar el registro y un<br/>
                  representante se comunicará con vos</p>
                  
                  <button id="buttonRegExito" type="button">¡OK!</button>
                </div>    
              </div>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              
            </div>
          
          </form>
        </div> 
      </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- share buttons -->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTt40K_ecLJ-d1uwRmn7fF9TbIXSkHS8Y&libraries=places" async defer></script>-->



   
    <script type="text/javascript" src="js/casosDeAyuda.js"></script>
    <script type="text/javascript" src="js/register.js"></script>


    <script>
    
      //voy a mi cuenta y le mando el token en la url
      $("#miCuenta").click(function(event) {
        var token = sessionStorage.getItem('token');                
        console.log(token);
          

          // window.open('http://unidabo.com/admin'); 
          window.location.replace('http://unidabo.com/admin');    
      });

      
      // $("#buttonLogin").click(function(event) {
      //   var token = sessionStorage.getItem('token');                
      //   console.log(token);
          
      //     window.location.replace('http://unidabo.com/admin');    
      // });  
</script>
  <script>

function logged(){
  
      var $btnLogin =  $(".botoneraLogggedIn")
      var $btnEmpresa = $(".login-container")
      var rawData = sessionStorage.getItem('logged')
        var data = JSON.parse(rawData)
      if( data === null ){
        $btnEmpresa.removeClass("hide");
        CaseButton(false);
      }else {
      CaseButton(true);
        $btnLogin.removeClass('hide')
        document.querySelector(".nombreInstitucion").innerHTML = data.institucion.name;

        $('#buttonCase').click(function(){
            console.log('click');
            
            var token = sessionStorage.getItem('token')
            var url = 'http://unidabo.com/admin'
            // var url = 'http://localhost:3000/'
            // window.open(url)
            window.location.replace(url)
          })
        
      }
      }
logged();

function CaseButton(isLog){

  if(isLog){
    $('#buttonCase').click(function(){
      console.log('clickOn');
      
      var token = sessionStorage.getItem('token')
      var url = 'http://unidabo.com/admin'
      // var url = 'http://localhost:3000/'
      // window.open(url)
      window.location.replace(url)
    })

  }else{
    $('#buttonCase').click(function(){
      console.log('clickOff');
      $('#ModalLogin').modal('show');       
      })
  }
}


    
    </script>
    <script>

      

      // $('#buttonLogin').click(function(){
      //   console.log('click');
        
      //   var token = sessionStorage.getItem('token')
      //   var url = 'http://unidabo.com/admin'
      //   var url = 'http://localhost:3000/'
      //   window.open(url)
      //   window.location.replace(url)
      // })

      $('#MiCuenta').click(function(){
        console.log('click');
        
        var token = sessionStorage.getItem('token')
        var url = 'http://unidabo.com/admin'
        // var url = 'http://localhost:3000/'
        // window.open(url)
        window.location.replace(url)
      })



      $('#cerrarSesion').click(function(){
      var $btnLogin =  $(".botoneraLogggedIn")
      var $btnEmpresa = $(".login-container")

        $btnLogin.toggleClass('hide')
        $btnEmpresa.toggleClass('hide')
        sessionStorage.clear()
      sessionStorage.setItem('story','');

      })

      //  $('#buttonCase').click(function(){
      //     console.log('click');
      //     $('#ModalLogin').modal('show');       
      // })
    </script>









    <script>
      $(document).ready(function(){
        $('.content-funciona_buttons .buttonE button').addClass('active');
      })
      function howToEntityShow
      () {

          var x = document.getElementById("funciona2")
          var y = document.getElementById("funciona1")
    
              x.style.display = "none";
              y.style.display = "block";
        $('.content-funciona_buttons .buttonE button').toggleClass('active')
        $('.content-funciona_buttons .buttonD button').toggleClass('active')

          
      }

      function howToUserShow
      () {

          var x = document.getElementById("funciona2")
          var y = document.getElementById("funciona1")
        
              y.style.display = "none";
              x.style.display = "block";
        $('.content-funciona_buttons .buttonE button').toggleClass('active')
        $('.content-funciona_buttons .buttonD button').toggleClass('active')
          
      }

      $(document).ready(function(){
        $('.content-categorias_buttons .buttonB button').addClass('active')
      })
      function button1Active
      () {

          var x = document.getElementById("categorias2")
          var y = document.getElementById("categorias1")
    
              x.style.display = "none";
              y.style.display = "block";
        $('.content-categorias_buttons .buttonB button').toggleClass('active')
        $('.content-categorias_buttons .buttonS button').toggleClass('active')
          
      }

      function button2Active
      () {

          var x = document.getElementById("categorias2")
          var y = document.getElementById("categorias1")
        
              y.style.display = "none";
              x.style.display = "block";
        $('.content-categorias_buttons .buttonB button').toggleClass('active')
        $('.content-categorias_buttons .buttonS button').toggleClass('active')
          
      }

      function buttonca1Active() {
        /*
        $("#casos-ayuda1 li").each(function() {
          var c1 = document.getElementById("c1");                
          var c2 = document.getElementById("c2");                
          var c3 = document.getElementById("c3");                
          var c4 = document.getElementById("c4");                
          var c5 = document.getElementById("c5");                
          var c6 = document.getElementById("c6");
          c1.classList.remove("col-xs-4 casos-pixel");
          c1.classList.add("casos-ayuda1_itemwall");
          
          c2.classList.remove("casos-ayuda2_itemwall");
          c2.classList.add("placeholder");
          
          c3.classList.remove("parent");
          c3.classList.add("ca1-itemwall_img");
          
          c4.classList.add("carousel_thumbnail");
          
          c5.classList.remove("ca2-itemwall_text");
          c5.classList.add("ca1-itemwall_text");
          
          c6.classList.remove("ca2-itemwall_icons");
          c6.classList.add("ca1-itemwall_icons");
        });
        */
        $(".listItem").toggleClass('mini');
        mini=false;
        console.log(mini);
      }

      function buttonca2Active() {
      /* $("#listItem").each(function() 
            var c1 = document.getElementById("c1");                
            var c2 = document.getElementById("c2");                
            var c3 = document.getElementById("c3");                
            var c4 = document.getElementById("c4");                
            var c5 = document.getElementById("c5");                
            var c6 = document.getElementById("c6");
      
            $("this div").first().removeClass("placeholder");
            $("this div").first().addClass("col-xs-4");
            $("this div").first().addClass("casos-pixel");

            
            $("this div div div").eq(0).removeClass("ca1-itemwall_img");
            $("this div div div").eq(0).addClass("parent");
            
            $("this div div div img").removeClass("carousel_thumbnail");
            
            $("this div div div").eq(1).removeClass("ca1-itemwall_text");
            $("this div div div").eq(1).addClass("ca2-itemwall_text");
            
            $("this div div div div").first().removeClass("ca1-itemwall_icons");
            $("this div div div div").first().addClass("ca2-itemwall_icons");
     
          c1.classList.remove("placeholder");
          c1.classList.add("col-xs-4");
          c1.classList.add("casos-pixel");
          c3.classList.remove("ca1-itemwall_img");
          c3.classList.add("parent");
          c4.classList.remove("carousel_thumbnail");
          c5.classList.remove("ca1-itemwall_text");
          c5.classList.add("ca2-itemwall_text");
          c6.classList.remove("ca1-itemwall_icons");
          c6.classList.add("ca2-itemwall_icons");
        
        });
    */
      
        $(".listItem").toggleClass('mini');
        mini=true;
        console.log(mini);
      }

      // function ModalActive() {
          
      //     var x = document.getElementById("ModalLogin")
      //     var y = document.getElementById("ModalRegister")
      //     var z = document.getElementById("ModalRegExito")
          
    
      //         x.style.display = "none";
      //         y.style.display = "none"
      //         z.style.display = "block";
          
      // }
      if(sessionStorage.getItem("story")== null){
        sessionStorage.setItem("story", 'true');
      }

      $(function() {
      var pgurl = window.location.href.substr(window.location.href
      .lastIndexOf("/")+1);
      console.log(pgurl);
          $("#navbar3 .nav-link").each(function(){
               if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
               $(this).addClass("active");
          })
      });

      
      $(document).ready(function(){

        if (sessionStorage.getItem("story") == 'true') {
          $('#register-message').modal('show');
          sessionStorage.setItem("story", 'false');
        }

        
      });

    
    </script>

    <script>
    $('#btn-submit').submit(function(e){
      e.preventDefault()
    })
    $('#register-form').submit(function(e){
      e.preventDefault()
    })
    $('#buttonRegExito').click(function(e){
      e.preventDefault()
      $('#ModalRegExito').modal('hide')
    })

    
    </script>

    <script>
    // $(document).ready(function(){
    // // //Event for pushed the video
    //     $('#carousel-example-generic').carousel({
    //         pause: true,
    //         interval: false
    //     });
    // });
    </script> 
<!-- <script>
// Original code by Simon. You can check the original code here https://codepen.io/html5andblog/pen/qEqdqO?editors=1010
// Altered and Edited for Bootstrap Modal
// 22 feb 2017

// init
jQuery(document).ready(function(){

// Start //oculto el pop up en home
if (sessionStorage.getItem("story") == 'true') {
  // Calling the bootstrap modal
  $('.ui-widget.ui-widget-content').addClass('hide')
  $('.ui-widget-overlay').addClass('hide')
}
$('.ui-dialog .ui-dialog-titlebar-close').on('click',function(){sessionStorage.setItem('story','true');});
$('.ui-widget-overlay').on('click',function(){sessionStorage.setItem('story','true');});
});
jQuery(document).on('keyup',function(evt) {
    if (evt.keyCode == 27) {
      sessionStorage.setItem('story','true')
    }
});
</script> -->
<script>
// marco en el menu donde estoy
if(window.location.pathname.split('/').pop() == "quienes-somos.php"){
  $('#quienes-somos-link').css(    "border-bottom", "3px solid #d96b1c" )
  $('#mision-vision-link').css(    "border-bottom", "3px solid #d96b1c" )
  $('#mision-vision-link').css(    "padding-bottom", "3px" )
}
if(window.location.pathname.split('/').pop() == "index.php#casos-exito"){
  $('#casos-exito-link').css(    "border-bottom", "3px solid #d96b1c" )
}
if(window.location.pathname.split('/').pop() == "index.php#categorias"){
  $('#categorias-link').css(    "border-bottom", "3px solid #d96b1c" )
}
if(window.location.pathname.split('/').pop() == "casos-ayuda.php"){
  $('#casos-ayuda-link').css(    "border-bottom", "3px solid #d96b1c" )
}

if(window.location.pathname.split('/').pop() == "mision-vision.php"){
   $('#quienes-somos-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#mision-vision-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#mision-vision-link').css(    "padding-bottom", "3px" )
}
if(window.location.pathname.split('/').pop() == "equipo.php"){
   $('#quienes-somos-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#equipo-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#equipo-link').css(    "padding-bottom", "3px" )
}
if(window.location.pathname.split('/').pop() == "politicas-privacidad.php"){
   $('#quienes-somos-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#politicas-privacidad-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#politicas-privacidad-link').css(    "padding-bottom", "3px" )
}
if(window.location.pathname.split('/').pop() == "terminos-condiciones.php"){
   $('#quienes-somos-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#terminos-condiciones-link').css(    "border-bottom", "3px solid #d96b1c" )
   $('#terminos-condiciones-link').css(    "padding-bottom", "3px" )
}

</script>
<script>
// compartir redes sociales
// hay que resolver primero la pantalla de descripcion de los casos. 
// una vez definida es url (unidabo.com/casos/id) // id viene de la api 
  $('#social_share').click(function(){

    $('#social_share').attr("href", "http://www.facebook.com/sharer/sharer.php?u="+URL+"&title=[TITLE]")
  })
</script>

<script>
<?php
$currentURL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
echo "var currentURL= '".$currentURL."';";
?>
  jQuery('.classysocial').ClassySocial(currentURL);

</script>

  </body>
</html>