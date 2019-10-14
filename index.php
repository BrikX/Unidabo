<?php require_once 'header.php' ?>

<div class="modal fade" id="register-message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="register-up">
          <h1 class="title">¡Quiero ayudar ya!</h1>
          <div class="register-text">
            <p class="p1">Si querés hacer una donación, bajate la App en solo un paso</p>
            <a href="#"><img src="img/google-play2.png" class="img-responsive"></a>
            <a href="#"><img src="img/app-store2.png" class="img-responsive"></a>           
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="register-down"> 
            <p class="p2">Si querés crear un caso,<br>registrate y te contamos qué hacer</p>
        </div>
        <button type="button" data-toggle="modal" data-target="#ModalRegister">Registrate</button>
      </div>
    </div>
  </div>
</div>
 
<section id="como-funciona">
  <div class="container">
    <div class="row">
      <div class="como-funciona_container">
          <div class="col-md-6 col-xs-12">
            <div class="content-funciona_left">
              <h1 class="title">Cómo funciona</h1>
              <div class="content-funciona_buttons">
                  <!-- <div class="buttonE">
                    <button class="btn btn-default btn-entidad" type="button" onclick="howToEntityShow()">Entidad</button>
                  </div>
                  <div class="buttonD">
                    <button class="btn btn-default" type="button" onclick="howToUserShow()">Donante</button>
                  </div> -->
                  <div class="btn-func" id="button-func-icons" role="group">
                    <a class="buttonE"><button class="btn btn-default" id="1" type="button" onclick="howToEntityShow()"><span>Entidad</span></button></a>
                    <a class="buttonD"><button class="btn btn-default" id="2" type="button" onclick="howToUserShow()"><span>Donante</span></button></a> 
                  </div>    
                 
              </div>
            </div>
          </div>

          <div class="como-funciona1_container" id="funciona1">
            <div class="col-md-6 col-xs-12">
             <div class="content-funciona_right">
               <div class="col-md-4 col-xs-4">
                  <img src="img/funcion-icon-1.png" class="img-responsive">
                  <p class="p1">Regístrate</p>
               </div>
               <div class="col-md-4 col-xs-4">
                  <img src="img/funcion-icon-2.png" class="img-responsive">
                  <p class="p2">Crea casos</p>
               </div> 
               <div class="col-md-4 col-xs-4">
                  <img src="img/funcion-icon-3.png" class="img-responsive">
                  <p class="p3">Recibí ayuda</p>
               </div>                     
             </div>
            </div>
          </div>

          <div class="como-funciona2_container" id="funciona2">
            <div class="col-md-6 col-xs-12">
             <div class="content-funciona_right">
               <div class="col-md-4 col-xs-4">
                  <img src="img/funcion-icon-4.png" class="img-responsive">
                  <p class="p4">Descárgate la app (iOS/Android)</p>
               </div>
               <div class="col-md-4 col-xs-4">
                  <img src="img/funcion-icon-5.png" class="img-responsive">
                  <p class="p5">Selecciona un caso</p>
               </div> 
               <div class="col-md-4 col-xs-4">
                  <img src="img/funcion-icon-6.png" class="img-responsive">
                  <p class="p6">Ayuda</p>
               </div>                     
             </div>
            </div>
          </div>

      </div>
    </div>
  </div>  
</section>

<section id="casos-destacados">
  <div class="container">
    <div class="row">
      <div class="casos_destacados_container">
            <!--CASOS-->
            

            <div class="col-md-9 col-sm-12">
              <div class="content-destacados_title" id="casos-title">
                <h1 class="title">Casos destacados</h1> 
              </div>

              

             <div class="content-destacados_left">

              <ul id="simple" class="owl-carousel  owl-theme">

              <?php 

                $jsonCaseOutstanding = file_get_contents('http://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos');
                $objOutstanding = json_decode($jsonCaseOutstanding);

                foreach ($objOutstanding->items as $item) {
                    $image;
                    $dateItem = strtotime($item->created_at);
                    $title; 
                    $currentLocation = "";
                    $category; 
                                       
                    if(empty($item->images[0])){
                      $image = "img/nodisponible.png";
                    }else{
                      $image = $item->images[0];
                    }

                    if(empty($item->title)){
                      $title = "Título";
                    }else{
                      $title = $item->title;
                    }

                    if(empty($item->location)){
                      $currentLocation = "Ubicación";
                    }else{
                      $currentLocation = $item->location;

                    }

                    if(empty($item->category)){
                      $category = "Categoría";
                    }else{
                      $category = $item->category;
                    }

                    
       
                  echo '<div class="item">
                        <div class="itemwall">
                          <div class="itemwall-img">
                            <img src="'.$image.'" class="img-responsive" />
                            <div class="overlay">
                              <a href="casos-destacados.php?id='.$item->_id.'"><button class="btn btn-default" type="button"><span>Ver más</span></button></a>
                            </div>
                          </div>       
                          <div class="itemwall-text">
                            <div class="itemwall-icons">
                              <i class="far fa-clock"></i>
                              <p>'.date('d/m/y',$dateItem).' por <b>'.date('H',$dateItem).'h '.date('i',$dateItem).'min'.'</b></p>
                              <div class="classysocial"
                                data-theme="slick"
                                data-image-type="picture"
                                data-picture="img/icon-download.png"
                                data-facebook-handle="endeos"
                                data-google-handle="+Endeos"
                                data-twitter-handle="Endeos_SL"
                                data-orientation="line"
                                data-gap="50"
                                data-networks="facebook,twitter,google">
                              </div>                             
                            </div>    
                            <h4 class="subtitle1">'.$title.'</h4>
                            <h5>'.$currentLocation.'</h5>
                            <span class="categ">'.$category.'</span>
                          </div>       
                        </div>
                       </div>';

                }
              

              ?>

              </ul>
             </div>
            </div>
            <!--CASOS-->

            <div class="col-md-3 col-xs-12">

              <div class="content-destacados_arrows" id="casos-arrows">
                 <div class="arrows-destacados">
                  <a class="left" href="" onclick="javascript:return false;" role="button" data-slide="prev">
                  <img src="img/arrow-left1.png" class="img-responsive" />
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right" href="" onclick="javascript:return false;" role="button" data-slide="next">
                      <img src="img/arrow-right1.png" class="img-responsive" />  
                      <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="button-destacados">
                  <a href="casos-ayuda.php">
                    <button class="btn btn-default" type="button"><span>Ver todos</span></button>
                  </a>                  
                </div>     
              </div>

              <div class="content-destacados_right" id="casos-ta">
                <h1 class="title">Casos destacados</h1>
                <div class="arrows-destacados">
                  <a class="left" href="" onclick="javascript:return false;" role="button" data-slide="prev">
                  <img src="img/arrow-left1.png" class="img-responsive" />            
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right" href="" onclick="javascript:return false;" role="button" data-slide="next">
                      <img src="img/arrow-right1.png" class="img-responsive" />         
                      <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="button-destacados">
                  <a href="casos-ayuda.php">
                    <button class="btn btn-default" type="button"><span>Ver todos</span></button>
                  </a>
                </div>    

              </div>
            </div>

      </div>
    </div>
  </div>
</section>

<section id="categorias">
  <div class="container">
    <div class="row">
      <div class="categorias_container">
          <div class="col-md-12">
            <div class="content-categorias_title">
              <h1 class="title">Categorías</h1>
            </div>
            <div class="content-categorias_buttons">
                <div class="btn-categ" id="button-categ-icons" role="group">
                  <a class="buttonB"><button class="btn btn-default" id="b1" type="button" onclick="button1Active()"><span>Bienes</span></button></a>
                  <a class="buttonS"><button class="btn btn-default" id="b2" type="button" onclick="button2Active()"><span>Servicios</span></button></a> 
                </div>                                     
            </div>
          </div>

          <div class="categorias1_container" id="categorias1">
            <div class="col-md-6 col-xs-12">
               <div class="content-categorias_left">
                  <img src="img/categorias-img1.png" class="img-responsive">   
               </div>
            </div>
            <div class="col-md-6 col-xs-12">
             <div class="content-categorias_right">
               <div class="col-xs-6 categ-pixel">
                <ul class="categorias-list_left">
                  <li class="bl1"><span><i class="fas fa-square-full"></i></span>Alimento y bebidas</li>
                  <li class="bl2"><span><i class="fas fa-square-full"></i></span>Computación</li>
                  <li class="bl3"><span><i class="fas fa-square-full"></i></span>Deportes y fitness</li>
                  <li class="bl4"><span><i class="fas fa-square-full"></i></span>Electrodomésticos</li>
                  <li class="bl5"><span><i class="fas fa-square-full"></i></span>Herramientas</li>
                  <li class="bl6"><span><i class="fas fa-square-full"></i></span>Hogar y muebles</li>
                </ul>
               </div>
               <div class="col-xs-6 categ-pixel">
                <ul class="categorias-list_right">
                  <li class="bl7"><span><i class="fas fa-square-full"></i></span>Juegos y juguetes</li>
                  <li class="bl8"><span><i class="fas fa-square-full"></i></span>Libro y revistas</li>
                  <li class="bl9"><span><i class="fas fa-square-full"></i></span>Ropa</li>
                  <li class="bl10"><span><i class="fas fa-square-full"></i></span>Salud y eq. médicos</li>
                  <li class="bl11"><span><i class="fas fa-square-full"></i></span>Útiles escolares</li>  
                  <li class="bl12"><span><i class="fas fa-square-full"></i></span>Mascotas</li>
                  <li class="bl13"><span><i class="fas fa-square-full"></i></span>Otras categorías</li> 
                </ul>
               </div>
               
              <!--  <ul class="categorias-list_center">
                 <li class="bl13"><a href="#"><button class="btn btn-default" type="button"><span><i class="fas fa-square-full"></i></span>Mascotas</button></a></li> 
               </ul> -->

             </div>
            </div>
          </div>    
      </div>

      <div class="categorias2_container" id="categorias2">
        <div class="row">
          <div class="col-md-6 col-xs-12">
           <div class="content-categorias2_left">
             <div class="col-xs-6 categ-pixel">
              <ul class="categorias-list2_left">
                <li class="br1"><span><i class="fas fa-square-full"></i></span>Transporte</li>
                <li class="br2"><span><i class="fas fa-square-full"></i></span>Cursos y clases</li>
                <li class="br3"><span><i class="fas fa-square-full"></i></span>Hogar</li>
              </ul>
             </div>
             <div class="col-xs-6 categ-pixel">
              <ul class="categorias-list2_right">
                <li class="br4"><span><i class="fas fa-square-full"></i></span>Construcción</li>
                <li class="br5"><span><i class="fas fa-square-full"></i></span>Medicina y salud</li>
                <li class="br6"><span><i class="fas fa-square-full"></i></span>Otros servicios</li>
              </ul>
             </div>                 
           </div>
          </div>
          <div class="col-md-6 col-xs-12">
              <div class="content-categorias2_right">
                <img src="img/categorias-img2.png" class="img-responsive">   
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>


<section id="casos-exito">
  <div class="container">
  <!--Container -->


  <div class="row">
    <!--row-->

    <div class="casos-exito_container">
      <!--casotonainer-->


       <div class="col-md-3 col-xs-12">
          <div class="content-casos_left">
            <h1 class="title">Casos de éxito</h1>
            <div class="right-slide-controls content-exitos_arrows" id="casos-ex-arrows">
              <div class="arrows-exito">
                <a class="left" href="" onclick="javascript:return false;" role="button" data-slide="prev">
                <img src="img/arrow-left1.png" class="img-responsive" />
                    <span class="sr-only">Previous</span>
                  </a>
                 <a class="right" href="" onclick="javascript:return false;" role="button" data-slide="next">
                    <img src="img/arrow-right1.png" class="img-responsive" />  
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              <div class="button-exito">
                  <button class="btn btn-default" type="button"><span>Ver todos</span>
                  </button>                 
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-xs-12">
          <div id="owl-carousel-right" class="content-casos_right owl-carousel  owl-theme">

            <?php

                $jsonCaseSuccess = file_get_contents('http://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos');
                  $objSuccess = json_decode($jsonCaseSuccess);
                  
                  foreach ($objSuccess->items as $itemSuccess) {
                    $image;
                    $title; 
                    $currentLocation = "";
                    $dateItem = strtotime($itemSuccess->created_at);

                    if(empty($itemSuccess->images[0])){
                      $image = "img/nodisponible.png";
                    }else{
                      $image = $itemSuccess->images[0];
                    }

                    if(empty($itemSuccess->title)){
                      $title = "Título";
                    }else{
                      $title = $itemSuccess->title;
                    }

                    if(empty($itemSuccess->location)){
                      $currentLocation = "Ubicación";
                    }else{
                      $currentLocation = $itemSuccess->location;

                    }

                    if(empty($itemSuccess->category)){
                      $category = "Categoría";
                    }else{
                      $category = $itemSuccess->category;
                    }

                    echo '<div class="item">
                            <div class="itemwall">
                              <div class="itemwall-img">
                                <img src="'.$image.'" class="img-responsive" />
                                <div class="overlay">
                                  <a href="casos-destacados.php?id='.$item->_id.'"><button class="btn btn-default" type="button"><span>Ver más</span></button></a>
                                </div>
                              </div>       
                              <div class="itemwall-text">
                                <div class="itemwall-icons">
                                  <i class="far fa-clock"></i>
                                  <p>'.date('d/m/y',$dateItem).' por <b>'.date('H',$dateItem).'h '.date('i',$dateItem).'min'.'</b></p>
                                  <div class="classysocial"
                                    data-theme="slick"
                                    data-image-type="picture"
                                    data-picture="img/icon-download.png"
                                    data-facebook-handle="endeos"
                                    data-google-handle="+Endeos"
                                    data-twitter-handle="Endeos_SL"
                                    data-orientation="line"
                                    data-gap="50"
                                    data-networks="facebook,twitter,google">
                                  </div>
                                </div>    
                                <h4 class="subtitle1">'.$title.'</h4>
                                <h5>'.$currentLocation.'</h5>
                                <span class="categ">'.$category.'</span>
                              </div>       
                            </div>
                          </div>';

                          // img/circle-img1.png

                  }
            ?>
          </div> 
        </div>

         <div class="col-xs-12">
            <div class="right-slide-controls content-exito_arrows" id="casos-e-arrows">
              <div class="arrows-exito">
                <a class="left" href="" onclick="javascript:return false;" role="button" data-slide="prev">
                <img src="img/arrow-left1.png" class="img-responsive" />
                    <span class="prev sr-only">Previous</span>
                  </a>
                  <a class="right" href="" onclick="javascript:return false;" role="button" data-slide="next">
                    <img src="img/arrow-right1.png" class="img-responsive" />  
                    <span class="next sr-only">Next</span>
                  </a>
              </div>
              <div class="button-exito">
                <button class="btn btn-default" type="button"><span>Ver todos</span></button>
              </div>     
            </div>          
           </div>

          

      
      <!--casocontainer-->
    </div>


    <!--row-->  
  </div>  


  <!--container-->          
      
  </div>  
</section>



<section id="images-footer">
  <div class="container-fluid">
      <div class="images-footer_container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div class="content-images-footer_left">       
              <div class="col-md-6 col-xs-6">
                <img src="img/images-footer-img1.png" class="img-responsive">
              </div>
              <div class="col-md-6 col-xs-6">
                <a data-toggle="modal" data-target="#register-message">
                  <h3 class="text">¡Quiero ayudar ya!</h3>
                  <button class="btn btn-default" type="button"><span>Ver más</span></button>
                </a>                
              </div>   
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="content-images-footer_center">
              <div class="col-md-6 col-xs-6">
                <img src="img/images-footer-img2.png" class="img-responsive">
              </div>
              <div class="col-md-6 col-xs-6">
                <a data-toggle="modal" data-target="#ModalLogin">
                  <h3 class="text">Soy una entidad</h3>
                  <button class="btn btn-default" type="button"><span>Ver más</span></button>
                </a>         
              </div>    
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
             <div class="content-images-footer_right">            
                <div class="col-md-6 col-xs-6">
                  <img src="img/images-footer-img3.png" class="img-responsive">
                </div>
                <div class="col-md-6 col-xs-6">
                  <a data-toggle="modal" data-target="#ModalSearch">
                    <h3 class="text">Búsca por institución</h3>
                    <button class="btn btn-default" type="button"><span>Ver más</span></button>
                  </a>                    
                </div>   
             </div>
          </div>
        </div>  
      </div>
  </div>  
</section>

<script>


  var header = document.getElementById("button-categ-icons");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("btn btn-default active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }

  var header2 = document.getElementById("button-func-icons");
  var btns2 = header2.getElementsByClassName("btn");
  for (var i = 0; i < btns2.length; i++) {
    btns2[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("btn btn-default active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }


// $(".arrows-destacados a").click(function(event){
//   event.preventDefault()
// })

          $(document).ready(function() {

              var owl = $('#simple');
              owl.owlCarousel({
                loop: true,
                margin: 10,
                dots:false,
                nav:false,
                autoplay: true,
                autoplayTimeout: 10000,
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                    },
                    450:{
                        items:2,
                    },
                    750:{
                        items:3,
                    },
                    1000:{
                        items:3,
                    }
                }
            
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

              var owlRight = $('#owl-carousel-right');
              owlRight.owlCarousel({
                loop: true,
                margin: 10,
                dots:false,
                nav:false,
                autoplay: true,
                autoplayTimeout: 10000,
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                    },
                    450:{
                        items:2,
                    },
                    750:{
                        items:3,
                    },
                    1000:{
                        items:3,
                    }
                }
            
              });
              
              $('.right-slide-controls .left').click(function() {
                  // With optional speed parameter
                  // Parameters has to be in square bracket '[]'
                  owlRight.trigger('prev.owl.carousel', [300]);
              });

              $('.right-slide-controls .right').click(function() {
                  // With optional speed parameter
                  // Parameters has to be in square bracket '[]'
                  owlRight.trigger('next.owl.carousel', [300]);
              })


            })

//google maps

</script>

<?php require_once 'footer.php' ?>