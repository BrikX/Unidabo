<?php require_once 'header.php'; ?>

<nav id="nav3" class="navbar navbar-default ">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header navbar-left pull-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3" aria-expanded="false" aria-controls="navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div> -->

    <div class="navbar-header" id="navbar3">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a class="nav-link" href="mision-vision.php" id="mision-vision-link">Misión y visión</a></li>
          <li><a class="nav-link" href="equipo.php" id="equipo-link" >Equipo</a></li>
          <li><a class="nav-link" href="politicas-privacidad.php" id="politicas-privacidad-link">Politicas de privacidad</a></li>
          <li><a class="nav-link" href="terminos-condiciones.php" id="terminos-condiciones-link">Términos y condiciones</a></li>
        </ul>
      </div>
    </div>    
  </div>    
</nav>

<?php if($aUrl[$lengthUrl - 1] !== 'equipo.php' && $aUrl[$lengthUrl - 1] !== 'politicas-privacidad.php' && $aUrl[$lengthUrl - 1] !== 'politicas-privacidad.php' && $aUrl[$lengthUrl - 1] !== 'terminos-condiciones.php' ){ ?>

<?php require_once 'mision-vision.php' ?>

<?php } ?>






