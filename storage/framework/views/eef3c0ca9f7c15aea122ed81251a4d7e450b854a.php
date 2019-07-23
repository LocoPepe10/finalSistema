<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INVNTRY</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-display">
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">INVNTRY</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="<?php echo e(url('/home')); ?>" class="nav-link">Inicio</a>
                    </li>
                    <?php if(Auth::guest()): ?>
                    <li>
                        <a href="<?php echo e(url('/login')); ?>" class="nav-link">Inicio de sesión</a></li>
                    </li>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo e(Auth::user()->name); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>"> Cerrar Sesión </a>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
    </nav>
    <div class="container">
            <?php echo $__env->yieldContent('content'); ?>  
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo e(asset('js/jQuery-2.1.4.min.js')); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-select.min.js')); ?>"></script>
</body>
</html>
