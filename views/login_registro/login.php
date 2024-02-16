<section class="vh-75" style="background-color: #BD99E1;">
  <div class="container py-4 h-75">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/imglogin.jpg" class="img-fluid roundImg" alt="Image">
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card p-4 p-lg-5 text-black">

                <form id="login" action="?controller=usuarios&action=getLogin" method="post" class="w-100">

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesión en tu cuenta</h5>
                  <p class="mb-4 pb-lg-2" style="color: #393f81;">¿Nuevo Cliente? <a href="?controller=usuarioS&action=register" style="color: #393f81;">Regístrate</a></p>


                  <div class="form-outline mb-4">
                    <input name="email" type="email" id="email" class="form-control form-control-lg" pattern="[^ @]*@[^ @]*" placeholder="Correo electrónico" style="font-size: 16px" required="">
                  </div>

                  <div class="form-outline mb-4">
                    <input name="password" type="password" id="password" class="form-control form-control-lg" placeholder="Contraseña" style="font-size: 16px" required="">
                  </div>

                  <a class="small text-muted" href="#!">Olvidaste tu contraseña?</a>
                  <br>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-light btn-lg btn-block col-12" type="submit">Iniciar sesión</button>

                
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
 <?php
  // Verifica si la variable GET "E" está establecida en la URL
  if (isset($_GET["E"])) {

    // Comprueba el valor de la variable GET "E"
    if ($_GET["E"] == 1) {
      // Si el valor es 1, muestra un mensaje de alerta indicando "Contraseña incorrecta"
      echo 'alert("Contraseña incorrecta")';
    } else if ($_GET["E"] == 2) {
      // Si el valor es 2, muestra un mensaje de alerta indicando "Usuario no encontrado"
      echo 'alert("Usuario no encontrado")';
    }
  }
?>


  // Cuando la página haya cargado completamente
  document.addEventListener('DOMContentLoaded', function() {
    // Obtén la altura del formulario
    var formHeight = document.getElementById('login').offsetHeight;

    // Calcula la posición para centrar el formulario
    var scrollTo = formHeight / 2;

    // Hace scroll hasta la posición calculada
    window.scrollTo({
      top: scrollTo,
      behavior: 'smooth' // Para un desplazamiento suave
    });
  });
</script>