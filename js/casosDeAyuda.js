if (window.location.href === 'http://localhost/unidabo/casos-ayuda.php') {
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://l0r6i3jcxk.execute-api.us-west-2.amazonaws.com/test/casos",
    "method": "GET",
  }

  $.ajax(settings).done(function (response) {
    getCases(response.items)
  })
  var $case = $('#casos-ayuda1');
  var $caseTemplate = $case.html();

  // $caseTemplate.empty();

  function getCases(data) {
    console.log(data);

    var plantilla = document.querySelector(".casos-ayuda1_itemwall");
    document.querySelector("#title").innerHTML = data.title;
    document.querySelector("#location").innerHTML = data.zone;
    document.querySelector("#category").innerHTML = data.category;

    data.forEach(createCases);
  }

  function createCases(data) {
    console.log();

    var $producto = $($caseTemplate);
    //convert time
    // function getTime(){
    //   var h = daily.time.getHours();
    //   console.log(h);
    // }
    $('#title', $producto).html(data.title);
    $('#location', $producto).html(data.zone);
    $('#category', $producto).html(data.category);
    $('.carousel_thumbnail').attr("src", data.thumbnail)
    // $('#category').attr("href", data.)
    $case.append($producto);

  }
}
