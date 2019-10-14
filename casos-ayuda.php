<?php require_once 'header.php' ?>
<?php
	echo "<script>";
	$jsonCaseOutstanding = file_get_contents('http://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos');
	echo "var jsonCasos = ".$jsonCaseOutstanding.";";
	echo "</script>";
?>
<section id="casos-ayuda">
  <div class="container">
		<div class="row">
			<div class="casos-ayuda_container">
				<div class="col-md-12">
					<div class="content-casos-ayuda_title">
					<!--
						<div class="button1">
							<a class="nav-link active"><button class="btn btn-default" type="button"><span>Todos</span></button></a>
						</div>
						<div class="button2">
							<a class="nav-link"><button class="btn btn-default" type="button"><span>Abiertos</span></button></a>             
						</div>
						<div class="button3">
							<a class="nav-link"><button class="btn btn-default" type="button"><span>Tomados</span></button></a>             
						</div>
						<div class="button4">
							<a class="nav-link"><button class="btn btn-default" type="button"><span>Cerrados</span></button></a>             
						</div>

						<div class="casos-ayuda-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Ordenar por<span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li><a href="#"><span>Fecha</span></a></li>
								<li><a href="#"><span>Titulo A-Z</span></a></li>
								<li><a href="#"><span>Zona A-Z</span></a></li>
								</ul>
							</li>
						</div>
					-->
						<div class="casos-ayuda_icons">
							
							<h5>Tipo de Vista</h5>
							<div class="btn-group" id="button-icons" role="group">
								<a href="#"><button class="btn btn-default active" type="button" id="1" onclick="buttonca1Active()"><i class="fas fa-list-ul"></i></button></a>
								<a href="#"><button class="btn btn-default" type="button"  id="2" onclick="buttonca2Active()"><i class="fas fa-th"></i></button></a>
							</div>  
						</div>          
					</div>			
				</div>   
			</div>
			<div class="content-casos-ayuda_container">
				<div class="col-md-3 col-xs-12">
					<div class="content-casos-ayuda_left">
							<div class="casos-ayuda_elements">
									<h5 class="title">Filtrar por:</h5>
									<div id="accordion" class="panel-group">
										<div class="panel panel-default" id="casos-ayuda-dropdown2">
											<div class="panel-heading" id="casos-ayuda-text2">
												<a href="#collapseTwo" class="dropdown-toggle" data-toggle="collapse" data-parent="#accordion" role="button" aria-haspopup="true" aria-expanded="true">Categoría<span class="caret"></span></a>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse in" aria-expanded="true">
												<div class="panel-body" id="menu-dropdown2">
													<ul class="menu2">
														<div class="me1">
															<li><label><input type="checkbox" name="categoria" value="Alimento y bebidas"><span>Alimento y bebidas</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Computación"><span>Computación</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Deportes y fitness"><span>Deportes y fitness</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Electrodomésticos"><span>Electrodomésticos</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Herramientas y construcción"><span>Herramientas y construcción</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Hogar y muebles"><span>Hogar y muebles</span></label></li>

															<li><label><input type="checkbox" name="categoria" value="Juego y juguetes"><span>Juego y juguetes</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Libros y revistas"><span>Libros y revistas</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Ropa"><span>Ropa</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Salud y eq. médicos"><span>Salud y eq. médicos</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Medicina y salud"><span>Medicina y salud</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Otras categorías"><span>Otras categorías</span></label></li>

															<li><label><input type="checkbox" name="categoria" value="Transporte"><span>Transporte</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Cursos y clases"><span>Cursos y clases</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Hogar y construcción"><span>Hogar y construcción</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Otros servicios"><span>Otros servicios</span></label></li>
															<li><label><input type="checkbox" name="categoria" value="Útiles escolares"><span>Útiles escolares</span></label></li> 
														</div>																					
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>   	
					</div>
				</div>
				<!-- case template -->
				<div class="col-md-9 col-xs-12">
							<!-- vista larga rectangular -->
							<div class="content-casos-ayuda1_right " >			
								<ul class="paginationList" id="casos-ayuda1">

								</ul>
							</div>
							
							<div id="pagination-container">
								<p class='paginacaoCursor' id="beforePagination"><</p>
								<p class='paginacaoCursor' id="afterPagination">></p>
							</div>
				</div>
				
				<script>
			
							var casos = [];
							var htmlItems = "";
							var htmlItemsPeque="";
							var items= jsonCasos.items;
							var mini=false;

							$(document).ready(function() { //carga post de los checkeados cacheados o todos si no hay
								$("input").each(function(){
									var category = jQuery(this).val();
									category = category.toLowerCase();
									category = category.replace(/\s/g, '');
									if(this.checked==true){
										AddToCategoryList(category);
										contador++;
									}
								});
								if (contador==0) {
									CargaTodo();
								}
							});

							function CargaTodo(){

								for( var i = 0; i < items.length; i++){//carga los datos de var Casos
									
									var img =0;
									if (items[i].images === undefined) {
										img="img/nodisponible.png";	

									}else{
										if(items[i].images.length==0 ||  typeof items[i].images=== 'undefined' ){ //Si no tiene imagen pone la de no disponible
											img="img/nodisponible.png";	
								  
										}else{
											img=items[i].images[0];
										}	
									}
										
									var itemTemplate ='<li class="listItem"><div class="casos-pixel"><div class="casos-ayuda1_itemwall caso '+items[i].category+' "><div class="ca1-itemwall_img"><img src="'+img+'" class="img-responsive "/></div><div class="ca1-itemwall_text"><div class="ca1-itemwall_icons"><i class="far fa-clock"></i><p>'+items[i].created_at+' por <b>'+00+'h '+00+'min</b></p><div class="classysocial" data-theme="slick" data-image-type="picture" data-picture="img/icon-download.png" data-facebook-handle="endeos" data-google-handle="+Endeos" data-twitter-handle="Endeos_SL" data-orientation="line" data-gap="50" data-networks="facebook,twitter,google"></div></div><h4 id="title" class="subtitle1">'+items[i].title+'</h4><h5 id="location">'+items[i].currentLocation+'</h5><span class="categ">'+items[i].category+'</span></div></div></div></li>';

									htmlItems += itemTemplate;
								}

								jQuery('#casos-ayuda1').html(htmlItems);//jquery q carga la variable htmlitems en el html
								if (mini===true) {
									buttonca2Active();
								}
								htmlItems="";
							}
							function AddToCategoryList(c){

								FilterCasos(c);
							}
			
							function RemoveToCategoryList(c){
								contInterno=0;
								$("input").each(function(){
									var category = jQuery(this).val();
									category = category.toLowerCase();
									category = category.replace(/\s/g, '');
									if(this.checked==true){
										AddToCategoryList(category);
										contInterno++;
									}
								});
								contador=contInterno;
								/* 
									for( var i = 0; i < categories.length; i++){ 
										if ( categories[i] === c) {
											categories.splice(i, 1); 
										}
									}
								
									for(i=0;i<categories.length;i++){
										console.log(categories[i]);
									}
									
								*/
							}

							function FilterCasos(c){ //filtra y carga en la var Casos los items correspondientes; Luego carga la lista
								
								for( var i = 0; i < jsonCasos.items.length; i++){

									var currentCategory = jsonCasos.items[i].category;// recoje la categoria de la posicion actual del for en el json
									currentCategory = currentCategory.toLowerCase();// la pone en minusc
									currentCategory = currentCategory.replace(/\s/g, '');//le saca los espacios
									if ( currentCategory === c) {					// si es = a la del checkbox
										casos.push(jsonCasos.items[i]);				//envia la pos actual del json a la var casos
									}
								}
								GenerateList();
							} 

							function GenerateList(){//agarra cada item en var Casos los formatea en una var y la carga en el html
								
								for( var i = 0; i < casos.length; i++){//carga los datos de var Casos
									var img =0;
									
									console.log(casos[i]);

									if(casos[i].images.length==0 ){ //Si no tiene imagen pone la de no disponible  
										img="img/nodisponible.png";	
									}else{
										img=casos[i].images[0];
									}
									
									var itemTemplate ='<li class="listItem"><div class="casos-pixel"><div class="casos-ayuda1_itemwall caso '+casos[i].category+' "><div class="ca1-itemwall_img"><img src="'+img+'" class="img-responsive "></div><div class="ca1-itemwall_text"><div class="ca1-itemwall_icons"><i class="far fa-clock"></i><p>'+casos[i].created_at+' por <b>'+00+'h '+00+'min</b></p><div class="classysocial" data-theme="slick" data-image-type="picture" data-picture="img/icon-download.png" data-facebook-handle="endeos" data-google-handle="+Endeos" data-twitter-handle="Endeos_SL" data-orientation="line" data-gap="50" data-networks="facebook,twitter,google"></div></div><h4 id="title" class="subtitle1">'+casos[i].title+'</h4><h5 id="location">'+casos[i].currentLocation+'</h5><span class="categ">'+casos[i].category+'</span></div></div></div></li>';

									
									htmlItems += itemTemplate;
								}

								jQuery('#casos-ayuda1').html(htmlItems);//jquery q carga la variable htmlitems en el html

								if (mini===true) {
									buttonca2Active();
								}
								htmlItems="";

							}

							var contador = 0;
							jQuery('.menu2 .me1 li :checkbox').change(function() {//lo que pasa cuando checkeas o sacas una categoria
								var category = jQuery(this).val();
								category = category.toLowerCase();
								category = category.replace(/\s/g, '');
								
								if (this.checked) { //al checkear agarra el val del chek y lo envia a addcatego
									console.log("Checked");
									contador++;					// suma 1 al contador
									AddToCategoryList(category); //carga las de la categoria seleccionada

								} else {	
									contador --;			
									console.log(contador);	
									if(contador==0 || contador<0){//si no tiene categorias checkeadas saca todas las por defecto y vacia el html
										contador=0;
										casos = [];
										CargaTodo();
										
									}else{
										casos = [];
										jQuery('#casos-ayuda1').html("");	
										RemoveToCategoryList(category);

									}																

								}
							});
				</script>
			</div>  


		</div>  
	</div>  
</section>

<script>
      var header = document.getElementById("button-icons");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("btn btn-default active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }

    //   $('.pagination').on('click', 'li', function() {
    // $('.pagination li.active').removeClass('active');
    // $(this).addClass('active');
	// });


</script>


 <!--  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <!-- <script type="text/javascript" src="js/HZpagination.js"></script> -->

<?php require_once 'footer.php' ?>