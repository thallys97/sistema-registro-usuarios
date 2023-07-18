<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo e($title); ?> - sistema de registro de usuários</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
  <header>
    <!-- Conteúdo do cabeçalho -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        <?php if(auth()->guard()->check()): ?>
        <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">Home</a>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
        <a class="navbar-brand" href="<?php echo e(route('logout')); ?>">Sair</a>
        <?php endif; ?>

        <!-- <li><a href="#">Sobre</a></li> -->
        <!-- <li><a href="#">Contato</a></li> -->
      </div>
    </nav>

    

  </header>

  <main class="container">

    <h1><?php echo e($title); ?></h1>

    <?php if(isset($mensagemSucesso)): ?>
        <div class="alert alert-success">
            <?php echo e($mensagemSucesso); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php echo e($slot); ?>


  </main>  

  <footer class="container mt-3">
    <!-- Conteúdo do rodapé -->
    <p>&copy; <?php echo e(date('Y')); ?> Meu Sistema de Registro de Usuários. Todos os direitos reservados.</p>
  </footer>


</body>
</html>
<?php /**PATH C:\servidor\nginx\html\sistema_registro_usuario\registro-usuarios\resources\views/components/layout.blade.php ENDPATH**/ ?>