<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INVNTRY </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('css/_all-skins.min.css')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bgcolors.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>">
  </head>
  <body>

  <div class="bg-display">
    <h1 class="display-4 bg-display"> InvntrY </h1>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-tabs flex-column mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('layouts')); ?>"><i class="fas fa-home"></i> Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('seguridad/usuario')); ?>"><i class="fas fa-address-card"></i> Usuarios </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('ventas/cliente')); ?>"><i class="fas fa-user-tag"></i> Clientes </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('compras/proveedor')); ?>"><i class="fas fa-users"></i> Proveedores </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('almacen/articulo')); ?>"><i class="fas fa-box-open"></i> Articulos </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('almacen/categoria')); ?>"><i class="fas fa-dolly fa-lg"></i> Categoria Articulos </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('compras/ingreso')); ?>"><i class="far fa-clipboard fa-lg"></i> Resumen </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="sesionMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                <i class="fas fa-user-circle fa-lg"></i> Sesion </a>
                <div class="dropdown-menu" aria-labelledby="sesionMenu">
                  <a class="dropdown-item disabled"> Nombre Usuario </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>"> Cerrar Sesión </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-md-10">
        <?php echo $__env->yieldContent('contenido'); ?>
      </div>
    </div>
  </div>

                              

      
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo e(asset('js/jQuery-2.1.4.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-select.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>


    
  </body>
</html>
