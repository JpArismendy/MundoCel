<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SN</b>KP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SENA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="View/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">PimNashi</span>
            </a>
            <ul class="dropdown-menu">

                <p>
                  PimNashi - Web Developer
                </p>
              </li>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <form action="" method="post">
                    <input type="hidden" name="txtSalir">
                  <button type ="submit" href="index.php?ruta=salir" class="btn btn-default btn-flat">Cerrar Sesion</button>
                  </form>
                  <?php
                  if (isset($_POST['txtSalir'])){
                    $_SESSION['login'] = false;
                    unset($_SESSION['login']);
                    header("location:index.php");
                  }
                  ?>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>