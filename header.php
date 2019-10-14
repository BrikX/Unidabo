<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Unidabo</title>

    <meta property="og:url" content="http://unidabo.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Unidabo" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> -->
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">

    <!-- <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">

    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96"> -->

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> 
    <link href="css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/register.js"></script>
    <script type="text/javascript" src="js/HZpagination.js"></script>
    
    <script src="js/owlcarousel/owl.carousel.js"></script>

    <!-- Classy Social y jQuery -->
    <script src="js/jquery.classysocial.min.js"></script>
    <!-- ClassySocial CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.classysocial.min.css" />

    <script type = "text/JavaScript" src ="https://MomentJS.com/downloads/moment.js"></script>

    <link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/owlcarousel/assets/owl.theme.default.min.css">

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTt40K_ecLJ-d1uwRmn7fF9TbIXSkHS8Y&libraries=places&language=en"></script>
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9cwfo7bkmZEw7YtUbCWbpmazbJIZLGPc&libraries=places"></script>-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

  <nav id="nav" class="navbar navbar-default ">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header navbar-left pull-left">
        <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="index.php">
          <img src="img/logounidabo.png" class="img-responsive" />
        </a>
      </div>

      <div class="navbar-header navbar-right pull-right" id="navbar">
        <div class="container-fluid">
          <div class="header-container">
            <div class="lenguaje-img">
              <img src="img/flag_arg.png" class="img-responsive" alt="flagarg">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Arg.<!-- <span class="caret"></span> --></a>
                <!-- <ul class="dropdown-menu">
                  
                </ul> -->
              </li>
            </div>
            <div class="social-container">
              <ul class="sociallinks">
                <li><a href="https://www.facebook.com/unidabo.ong.50?ref=br_tf&epa=SEARCH_BOX" target="_blank"><img src="img/social-facebook.png" class="img-responsive"></a></li>
                <li><a href="https://www.instagram.com/unidabo/" target="_blank"><img src="img/social-instagram.png" class="img-responsive"></a></li>
                <li><a href="https://www.youtube.com/channel/UC91h9fl5k36FkTPFK3lA9dw" target="_blank"><img src="img/social-youtube.png" class="img-responsive"></a></li>   
              </ul>     
            </div>
          </div>
        </div>
      </div>    
    </div>    
</nav>

<div class="container-fluid">
  <div class="row">         
    <?php 
    $aUrl = explode('/',$_SERVER['REQUEST_URI']);

    $lengthUrl = count($aUrl);

    $backgroundClassName = 'banner_principal';
    $navBarClassName = 'navbar-nav';
    $loginClassName = 'login-container';
    $login2ClassName = 'login2-container';
    $loginImgClassName = 'login-img';
    $loginImgMobClassName = 'loginMob-img';
    $loginImg2ClassName = 'login2-img';
    $loginBut2ClassName = 'button2';

    if($aUrl[$lengthUrl - 1] !== 'index.php' && $aUrl[$lengthUrl - 1] !== ''){
      $backgroundClassName = 'banner_principal_quienes_somos';
      $navBarClassName = 'navbar-nav-quienes-somos';
      $loginClassName = 'login-container-quienes-somos';
      $login2ClassName = 'login-container-quienes-somos';
      $loginImgClassName = 'login-img-quienes-somos';
      $loginImgMobClassName = 'loginMob-img-quienes-somos';
      $loginImg2ClassName = 'login-img-quienes-somos';
      $loginBut2ClassName = 'button2-quienes-somos';
    }
    ?>
      <div class="<?php echo $backgroundClassName; ?>">
        <nav id="nav2" class="navbar navbar-default ">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar2">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <div class="<?php echo $loginImgMobClassName; ?>">
                    <a href="" data-toggle="modal" data-target="#ModalSearch"><i class="fas fa-search"></i></a> 
                </div> 
            </div>

            <div class="collapse navbar-collapse" id="navbar2">
              <div class="container-fluid">
                <ul class="nav <?php echo $navBarClassName; ?>">
                  <li><a href="index.php#como-funciona">Cómo funciona</a></li>
                  <li><a href="quienes-somos.php" id="quienes-somos-link">Quiénes somos</a></li>
                  <li><a href="casos-ayuda.php" id="casos-ayuda-link">Casos de ayuda</a></li>
                  <li><a href="index.php#categorias" id="categorias-link">Categorías</a></li>
                  <li><a href="index.php#casos-exito" id="casos-exito-link">Casos de éxito</a></li>                   
                </ul>

                <div class="login-container hide">

                  <div class="<?php echo $loginImgClassName; ?>">
                    <a href="" data-toggle="modal" data-target="#ModalSearch"><i class="fas fa-search"></i></a> 
                  </div>  

                  <div class="login-registro_perfil">
                    <div class="button1">
                      <button class="btn btn-default" type="button" data-toggle="modal" data-target="#ModalLogin"><span>Ingresar</span></button>
                    </div>
                    <div class="<?php echo $loginBut2ClassName; ?>">
                      <button class="btn btn-default" type="button" data-toggle="modal" data-target="#ModalRegister"><span>Registrarme</span></button>
                    </div>          
                  </div>

                </div>
            
                <div class="<?php echo $login2ClassName; ?>">
            
              

                    <div class="botoneraLogggedIn hide">
                      <div class="login-perfil">
                      <div class="login-circle"></div>
                      <div class="login-dropdown">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle nombreInstitucion" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a id="MiCuenta"><span>Mi cuenta</span></a></li>
                              <!-- <li><a href="#"><span>Cambiar usuario</span></a></li> -->
                              <li><a href="" id="cerrarSesion"><span>Cerrar Sesión</span></a></li>
                            </ul>
                        </li>
                      </div>
                    </div>     
                    <div class="icons-container">
                      <ul class="icons">
                        <li><a href="#"><i class="far fa-bell"></i></a></li>  
                      </ul>     
                    </div>
                  </div>
                    
                </div>

              </div>
            </div>    
          </div>    
        </nav>

        <div class="modal fade" id="ModalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <div class="register-up">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe src="https://www.youtube.com/embed/iXSUbjOIgPI"></iframe>
                  </div>
                </div>
              </div>
              <!-- <div class="modal-footer">
              </div> -->
            </div>
          </div>
        </div>

        <?php
        $urlDestacadosStr = $aUrl[$lengthUrl - 1];
        $destacadosUrl = false;
        
        if(preg_match('/casos-destacados/i', $urlDestacadosStr)){
            $destacadosUrl = true;
        }

        if($aUrl[$lengthUrl - 1] !== 'quienes-somos.php' && $aUrl[$lengthUrl - 1] !== 'mision-vision.php' && $aUrl[$lengthUrl - 1] !== 'equipo.php' && $aUrl[$lengthUrl - 1] !== 'politicas-privacidad.php' && $aUrl[$lengthUrl - 1] !== 'terminos-condiciones.php' && $aUrl[$lengthUrl - 1] !== 'casos-ayuda.php' &&  $destacadosUrl == false && $aUrl[$lengthUrl - 1] !== 'error.php') { ?>

          <section id="text-principal">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">

                  <ul id="principal" class="owl-carousel  owl-theme">

                    <div class="item">
                        <div class="principal_container">
                          <div class="principal-text">
                            <h1>Compartiendo, podés ayudar a muchos</h1>
                            <p>Conocé los distintos <b>lugares</b> donde te podés acercar a donar todo el año</p>
                            <button class="btn btn-default" type="button"  id="buttonCase"><span>Crear un caso</span></button>
                          </div>    
                        </div>
                    </div>

                    <div class="item">
                      <div class="principal_container">
                        <div class="col-md-6">
                          <div class="principal-text">
                            <h1>¿Queres saber como donar?</h1>
                            <p>Es una aplicación solidaria, sin fines de lucro que conecta a las personas que quieren ayudar con entidades benéficas que necesitan, insumos o servicios de diferentes tipo. En la misma podrás ver casos de necesidad y ayudar a las personas que más lo necesitan de una forma sencilla, segura y rápida.</p>
                          </div> 
                        </div>
                        <div class="col-md-6">
                          <div class="principal-img">
                            <!-- <a href="" data-toggle="modal" data-target="#ModalVideo"><img src="img/play_button1.png" class="img-responsive" /></a> -->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/PEVyHnrkPHI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                        
                           
                      </div>
                    </div>

                  </ul>

                <div class="content-principal_arrows" id="principal-arrows">
                   <div class="arrows-principal">
                    <a class="left" href="" onclick="javascript:return false;" role="button" data-slide="prev">
                    <img src="img/arrow-left1.png" class="img-responsive" />
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right" href="" onclick="javascript:return false;" role="button" data-slide="next">
                        <img src="img/arrow-right1.png" class="img-responsive" />  
                        <span class="sr-only">Next</span>
                      </a>
                  </div> 
                </div>

                  <!-- <div class="principal_container">
                      <div class="principal-text">
                        <h1>Compartiendo, podés ayudar a muchos</h1>
                        <p>Conocé los distintos <b>lugares</b> donde te podés acercar a donar todo el año</p>
                        <button class="btn btn-default" type="button"  id="buttonCase"><span>Crear un caso</span></button>
                      </div>    
                  </div> -->
                </div>
              </div>
            </div>
          </section>

        <?php } ?>

      </div>
  </div>
</div>

<script>
  $(document).ready(function() {

              var owl = $('#principal');
              owl.owlCarousel({
                loop: true,
                items:1,
                margin: 10,
                dots:false,
                nav:false,
                autoplay: true,
                autoplayTimeout: 15000,
                autoplayHoverPause: true,
                responsiveClass:true,
            
              });

              $('.left').click(function() {
                  // With optional speed parameter
                  // Parameters has to be in square bracket '[]'
                  owl.trigger('prev.owl.carousel', [300]);
              });

              $('.right').click(function() {
                  // With optional speed parameter
                  // Parameters has to be in square bracket '[]'
                  owl.trigger('next.owl.carousel', [300]);
              })

            })
</script>
