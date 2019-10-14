<?php 
require_once 'header.php';
  
  if(isset($_GET['id'])){
    $currentIdCase = $_GET['id'];
  }else{
    $currentIdCase = "5c491e34732177f0d8d360df";
  }

  $jsonCaseOutstanding = file_get_contents('http://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos/'.$currentIdCase);
  $caseOutstanding = json_decode($jsonCaseOutstanding);

  $jsonCaseSuccess = file_get_contents('http://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos/'.$currentIdCase);
  $caseSuccess = json_decode($jsonCaseSuccess);

   // foreach ($caseOutstanding->items as $item) {
   //  $titleCase;

   //  if(empty($item->title)){
   //    $titleCase = "Título";
   //  }else{
   //    $titleCase = $item->title;
   //  } 
   // }
  
?>
 
<section id="casos-destacados-p">
  <div class="container">
    <div class="row">
      <div class="casos-destacados_container">
        <div class="col-sm-12">
          <div class="casos-destacados_items">
          	<div class="content-casosdest_title">
              <h1 class="title">Caso Destacado</h1>
            </div>
       		  <div class="casos-destacados_itemwall">
              <div class="cd-itemwall_img">
                <?php if(array_key_exists('images',$caseOutstanding)){ ?>
                <img src="<?php echo $caseOutstanding->images[0]; ?>" class="img-responsive"/>
                <?php }else{ ?>
                <img src="img/nodisponible.png" class="img-responsive"/>
                <?php } ?>
              </div>   

              <div class="cd-itemwall_text">
                <div class="cd-itemwall_iconp">
                  <img src="img/icon-download.png" class="img-responsive"/>
                </div>    
                <div class="cd-itemwall_icons">
                  <i class="far fa-clock"></i>
                  <p>21/06/2018 por <span>20h 35min</span></p>
                  <i class="fas fa-map-marker-alt"></i>
                  <p>General Rodríguez</p>            
                </div>    
                <h4 class="subtitle1"><?php echo $caseOutstanding->title; ?></h4>
                <h5 class="descrip"><?php echo $caseOutstanding->description; ?></h5>
                <span class="categ"><?php echo $caseOutstanding->category; ?></span>
                <div class="cd-itemwall_download">
                  <p class="p1">Si querés hacer ayudar, bajate la App en solo paso</p>
                  <a href="#"><img src="img/google-play2.png" class="img-responsive"></a>
                  <a href="#"><img src="img/app-store2.png" class="img-responsive"></a>           
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>

<section id="otros-casos">
  <div class="container">
    <div class="row">
      <div class="otros_casos_container">
          <div class="col-md-9 col-sm-12">
            <div class="content-o-casos_title" id="o-casos-title">
              <h1 class="title">Otros casos</h1> 
            </div>
           <div class="content-oc_left">

            <ul id="simple" class="owl-carousel  owl-theme">

              <?php 

                $json = file_get_contents('http://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos');
                $obj = json_decode($json);
                foreach ($obj->items as $item) {
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

              <!-- <a href="" id="share_social"><img src="img/icon-download.png" class="img-responsive "/></a> -->

              </ul>                  
           </div>
          </div>

          <div class="col-md-3 col-xs-12">

            <div class="content-o-casos_arrows" id="o-casos-arrows">
              <div class="arrows-o-casos">
                <a class="left" href="" onclick="javascript:return false;" role="button" data-slide="prev">
                <img src="img/arrow-left1.png" class="img-responsive" />
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right" href="" onclick="javascript:return false;" role="button" data-slide="next">
                    <img src="img/arrow-right1.png" class="img-responsive" />  
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              <div class="button-o-casos">
                <button class="btn btn-default" type="button"><span>Ver todos</span></button>
              </div>     
            </div>

            <div class="content-oc_right" id="o-casos-ta">
              <h1 class="title">Otros Casos</h1>
              <div class="arrows-oc">
                <a class="left" href="" onclick="javascript:return false;" role="button" data-slide="prev">
                <img src="img/arrow-left1.png" class="img-responsive" />
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right" href="" onclick="javascript:return false;" role="button" data-slide="next">
                    <img src="img/arrow-right1.png" class="img-responsive" />
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              <button class="btn btn-default" type="button"><span>Ver todos</span></button>
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
                  <a class="buttonB"><button class="btn btn-default" id="1" type="button" onclick="button1Active()">Bienes</button></a>
                  <a class="buttonS"><button class="btn btn-default" id="2" type="button" onclick="button2Active()">Servicios</button></a> 
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
               <div class="col-md-6">
                <ul class="categorias-list_left">
                  <li class="bl1"><span><i class="fas fa-square-full"></i></span>Alimento y bebidas</li>
                  <li class="bl2"><span><i class="fas fa-square-full"></i></span>Computación</li>
                  <li class="bl3"><span><i class="fas fa-square-full"></i></span>Deportes y fitness</li>
                  <li class="bl4"><span><i class="fas fa-square-full"></i></span>Electrodomésticos</li>
                  <li class="bl5"><span><i class="fas fa-square-full"></i></span>Herramientas</li>
                  <li class="bl6"><span><i class="fas fa-square-full"></i></span>Hogar y muebles</li>
                </ul>
               </div>
               <div class="col-md-6">
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
             <div class="col-md-6">
              <ul class="categorias-list2_left">
                <li class="br1"><span><i class="fas fa-square-full"></i></span>Transporte</li>
                <li class="br2"><span><i class="fas fa-square-full"></i></span>Cursos y clases</li>
                <li class="br3"><span><i class="fas fa-square-full"></i></span>Hogar</li>
              </ul>
             </div>
             <div class="col-md-6">
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
                <a href="#" >
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
                <a href="#">
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
                  <a href="#">
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


  $(document).ready(function() {
              var owl = $('.owl-carousel');
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


            })

</script>

<?php require_once 'footer.php' ?>