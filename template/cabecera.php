<!-- HEADER -->
<header>
  <!-- top Header -->
  <div id="top-header">
    <div class="container">
      <div class="pull-left">
        <span>Bienvenido a Electro-SHOP!</span>
      </div>
      <div class="pull-right">
        <ul class="header-top-links">
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-twitter"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /top Header -->

  <!-- header -->
  <div id="header">
    <div class="container">
      <div class="pull-left">
        <!-- Logo -->
        <div class="header-logo">
          <a class="logo" href="index.php">
            <img src="./img/logo.png" alt="">
          </a>
        </div>
        <!-- /Logo -->

        <!-- Search -->
        <div class="header-search">
          <form>
            <input class="input search-input" type="text" placeholder="Enter your keyword">
            <select class="input search-categories">
              <option value="0">Todas las Categorias</option>
              <option value="1">Focos</option>
              <option value="1">Tubos de LED</option>
              <option value="1">Luminaria de LED</option>
              <option value="1">Iluminacion Decorativa</option>
              <option value="1">Toras de LED</option>
              <option value="1">Linea Solar</option>
              <option value="1">Alumbrado Publico</option>
              <option value="1">Accesorios</option>
            </select>
            <button class="search-btn"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <!-- /Search -->
      </div>
      <div class="pull-right">
        <ul class="header-btns">
          <!-- Account -->
          <li class="header-account dropdown default-dropdown">
            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
              <div class="header-btns-icon">
                <i class="fa fa-user-o"></i>
              </div>
              <strong class="text-uppercase">Mi Cuenta <i class="fa fa-caret-down"></i></strong>
            </div>
            <a class="text-uppercase pointer" data-toggle="modal" data-target="#myModal">Login</a> / <a href="session/logout.php" class="text-uppercase">Join</a>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Iniciar Secion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="">
                      <form class="" action="session/loginsession.php" method="post">
                        <div class="form-group">
                          <label for="email">Usuario:</label>
                          <input type="text" class="form-control" name="user">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" name="pwd">
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-secondary">Login</button>
                        </div>
                      </form>
                    </div><br>
                    <div class="text-left">
                      <h6><a href="#">Recuperar Contraseña</h6>
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /The Modal -->
            <ul class="custom-menu">
              <li><a href="#"><i class="fa fa-user-o"></i> Mi Cuenta</a></li>
              <li><a href="#"><i class="fa fa-heart-o"></i> Mi lista de deseos</a></li>
              <li><a href="#"><i class="fa fa-exchange"></i> Comparar</a></li>
              <li><a href="mostrarcarrito.php"><i class="fa fa-check"></i> Revisar</a></li>
              <li><a href="register.php"><i class="fa fa-user-plus"></i> Crear una Cuenta</a></li>
            </ul>
          </li>
          <!-- /Account -->

          <!-- Cart -->
          <li class="header-cart dropdown default-dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <div class="header-btns-icon">
                <i class="fa fa-shopping-cart"></i>
                <span class="qty"><?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?></span>
              </div>
              <a href="mostrarcarrito.php" ><strong class="text-uppercase">Mi Carrito:</strong></a>
              <br>
              <span></span>
            </a>
            <div class="custom-menu">
              <div id="shopping-cart">
                <div class="shopping-cart-list">
                  <div class="product product-widget">
                    <div class="product-thumb">
                      <img src="./img/thumb-product01.jpg" alt="">
                    </div>
                    <div class="product-body">
                      <h3 class="product-price"> <span class="qty"><?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?></span></h3>
                    </div>
                    <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                  </div>
                  <div class="product product-widget">
                    <div class="product-thumb">
                      <img src="./img/thumb-product01.jpg" alt="">
                    </div>
                    <div class="product-body">
                      <h3 class="product-price"> <span class="qty"><?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?></span></h3>
                      <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    </div>
                    <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                  </div>
                </div>
                <div class="shopping-cart-btns">
                  <button class="main-btn">View Cart</button>
                  <button href="mostrarcarrito.php" class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </div>
            </div>
          </li>
          <!-- /Cart -->

          <!-- Mobile nav toggle-->
          <li class="nav-toggle">
            <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
          </li>
          <!-- / Mobile nav toggle -->
        </ul>
      </div>
    </div>
    <!-- header -->
  </div>
  <!-- container -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<div id="navigation">
  <!-- container -->
  <div class="container">
    <div id="responsive-nav">
      <!-- category nav -->
      <div class="category-nav show-on-click">
        <span class="category-header">Categorias <i class="fa fa-list pointer"></i></span>
        <ul class="category-list">
          <li class="dropdown side-dropdown ">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Focos <i class="fa fa-angle-right pointer"></i></a>
            <div class="custom-menu menu">
              <div class="row">
                <div class="col-md-8">
                  <ul class="list-links">
                    <li>
                      <h3 class="list-links-title">Categorias</h3></li>
                    <li><a href="#">Iluminacion</a></li>
                    <li><a href="#">12 V cc</a></li>
                    <li><a href="#">Decorativas</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown side-dropdown ">
            <a class="dropdown-toggle pointer" data-toggle="dropdown" aria-expanded="true">Tubos de LED <i class="fa fa-angle-right"></i></a>
            <div class="custom-menu menu">
              <div class="row">
                <div class="col-md-4">
                  <ul class="list-links">
                    <li>
                      <h3 class="list-links-title">Categorias</h3></li>
                    <li><a href="#">Tubos</a></li>
                    <li><a href="#">Regletas</a></li>
                    <li><a href="#">Decorativo</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown side-dropdown ">
            <a class="dropdown-toggle pointer" data-toggle="dropdown" aria-expanded="true">Luminario de LED <i class="fa fa-angle-right"></i></a>
            <div class="custom-menu menu">
              <div class="row">
                <div class="col-md-8">
                  <ul class="list-links">
                    <li>
                      <h3 class="list-links-title">Categorias</h3></li>
                    <li><a href="#">Interior</a></li>
                    <li><a href="#">Exterior</a></li>
                    <li><a href="#">Uso industrial</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li><a href="#">Iluminacion Decorativa</a></li>
          <li><a href="#">Tiras de LED</a></li>
          <li><a href="#">Linea Solar</a></li>
          <li><a href="#">Alumbrado Publico</a></li>
          <li><a href="#">Accesorios</a></li>
        </ul>
      </div>
      <!-- /category nav -->

      <!-- menu nav -->
      <div class="menu-nav">
        <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
        <ul class="menu-list">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Lo Nuevo</a></li>
          <li><a href="#">Ofertas</a></li>
          <li class="dropdown default-dropdown"><a class="dropdown-toggle pointer" data-toggle="dropdown" aria-expanded="true">Paginas <i class="fa fa-caret-down"></i></a>
            <ul class="custom-menu">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="productos.php">Productos</a></li>
              <li><a href="product-page.html">Detalle de Productos</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- menu nav -->
    </div>
  </div>
  <!-- /container -->
</div>
<!-- /NAVIGATION -->
