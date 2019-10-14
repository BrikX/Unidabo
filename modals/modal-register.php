<!-- modal registrarme -->
<div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="register-text">


          <!--  -->
          <form method="post" id="register-form" > 
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Registrarme</h5>
              <div class="container">
                <div class="register-datos">
                  <input type="text" class="Text1" placeholder="Nombre de Sociedad / Persona a cargo" name="name" id="name" required>
                  <input type="text" class="Text2" placeholder="Cuit / DNI" name="cuit" id="cuit" required>
                  <input type="email" class="Mail" placeholder="E-mail" name="email" id="email" required>
                  <input type="text" class="Text3" placeholder="Celular (con código de área sin guiones)" name="phone" id="phone" required>
                  <!-- <input type="text" class="Text4" placeholder="Ubicación" name="location" id="location" required> -->
                  <input id="autocomplete" class="controls Text4" type="text" placeholder="Ubicación">

<!--                  <input type="text" id="searchBox" />-->

                  
                  
<!-- <ul id="geoData">
    <li>Full Address: <span id="location-snap"></span></li>
    <li>Latitude: <span id="lat-span"></span></li>
    <li>Longitude: <span id="lon-span"></span></li>
</ul> -->


                  <input type="password" class="Text4" placeholder="Password" name="password" id="password" />
                  <input type="password" class="Text4" placeholder="Ingrese de nuevo el Password" name="cpassword" id="cpassword" />
                  <!-- <button type="submit"  name="btn-save" id="btn-submit"> -->
                  <br/>
                  <p id="registerErrorMessage" class="hide"></p>
                  <button type="submit"  class="buttonReg" data-toggle="modal" name="btn-save" id="btn-submit" > <!-- data-target="#ModalRegExito"   -->
                    Registrarme
                </button>
                </div>    
              </div>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              
              <div class="container">
                <div class="register-links">
                  <span class="reg"><a data-dismiss="modal" data-toggle="modal" href="#ModalLogin">Ya estoy registrado</a></span>
                </div>
              </div>
    
            </div>
          
          </form>
          <!--  -->
        </div> 
      </div>
    </div>
  </div>
</div>

