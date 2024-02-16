<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Guitars</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <!--<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>-->
      <a href="#"><img src="img/cart.png" alt="cart"/></a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <ul class="navbar-nav d-flex">
      <?php 
          session_start();
          $_SESSION['role'] = 'admin';
       ?>
        <li class="nav-item dropstart">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ramon</a>
          <ul class="dropdown-menu dropdown-menu-lg-start">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <?php if ($_SESSION['role'] == 'admin'){ ?>
            <li><a class="dropdown-item" href="?controller=Dashboard">Admin</a></li>
            <?php } ?>
            <li><a class="dropdown-item" href="#">Cerrar</a></li>

          </ul>
        </li>
      </ul>

      
    </div>
  </div>
</nav>