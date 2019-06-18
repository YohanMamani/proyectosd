<?php

function Headerb () 

{
?>
<!-- START HEADER -->
<header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RED</b>SOCIAL</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/<?php echo $_SESSION['avatar']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo(ucwords($_SESSION['usuario'])); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/<?php echo $_SESSION['avatar']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo ucwords($_SESSION['usuario']); ?>
                  <small>Miembro desde Mayo 31</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="#">Seguidores</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="#">Seguidos</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="editarperfil.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-default btn-flat">Editar perfil</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>      
              </ul>
        </div>
    </nav>
  </header>
<!-- END HEADER -->
<?php
}
?>

<?php
function Side ()

{
?>
<!-- START LEFT SIDE -->
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left">
          <img src="avatars/<?php echo ($_SESSION['avatar']); ?>" width="50" alt="User Image">
        </div>
        <div class="pull-left info">


          <a href="perfil.php?id=<?php echo ($_SESSION['id']); ?>"><p><?php echo ($_SESSION['usuario']); ?></p></a>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Encuentra a tus amigos">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENÚ DE NAVEGACIÓN</li>
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Noticias</span>
          </a>
        </li>
        <li>
          <a href="chats.php">
            <i class="fa fa-comment"></i> <span>Chat</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">1</small>
            </span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-user"></i> <span>Mis seguidores</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-arrow-right"></i> <span>Seguidos</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-heart"></i> <span>Me gusta</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fas fa-align-justify"></i><span>Inversion</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fas fa-align-justify"></i> <span>Emprendimiento</span>
          </a>
        </li>                
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<!-- END LEFT SIDE -->
<?php
}
?>