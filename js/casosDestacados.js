// $(document).ready(function() {
 
//  $("#owl-demo").owlCarousel({

//      autoPlay: 3000, //Set AutoPlay to 3 seconds

//      items : 4,
//      itemsDesktop : [1199,3],
//      itemsDesktopSmall : [979,3]

//  });

// });
	

//     var settings = {
//       "async": true,
//       "crossDomain": true,
//       "url": "https://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos",
//       "method": "GET",
//     }

//     $.ajax(settings).done(function (response) {
//       leerItem(response.items)
//     })
//     var $listadoProductos = $('.casoDestacado');
//     var plantillaProducto = $listadoProductos.html();
//     // $listadoProductos.empty();

//   function leerItem(data){
    
//     var plantilla = document.querySelector(".casoDestacado");
//     document.querySelector(".subtitle1").innerHTML = data.title;
//     document.querySelector(".ubicacion").innerHTML = data.zone;
//     document.querySelector(".casoCategoria").innerHTML = data.category;

//     data.forEach(crearItem);
//   }

//   function crearItem(data){
//     var $producto = $(plantillaProducto);
//     //convert time
//     // function getTime(){
//     //   var h = daily.time.getHours();
//     //   console.log(h);
//     // }
//     $('.subtitle1', $producto).html(data.title);
//     $('.ubicacion', $producto).html(data.zone);
//     $('.casoCategoria', $producto).html(data.category);
//     $listadoProductos.append($producto);

//   }
  
 
