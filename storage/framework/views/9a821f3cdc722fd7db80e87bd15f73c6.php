<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel='stylesheet' href="<?php echo e(asset('css/login/index.css')); ?>" type='text/css'>
</head>
<body>
    <header>
        <h1>INICIAR SESIÓN</h1>
    </header>

    <main>
        <form action="<?php echo e(route('login.show')); ?>" method="post">

            <?php echo csrf_field(); ?>

            <article>
                <label for="nombre">Usuario: </label>
                <input type="text" name="nombre" id="nombre" placeholder="Introducir usuario" required>
            </article>

            <article>
                <label for="password">Contraseña: </label>
                <input type="password" name="password" id="password" placeholder="Introducir contraseña" required>
            </article>
            
            <input class="iniciar" type="submit" value="INICIAR SESIÓN">
        </form>
    </main>

    <?php if(isset($error)): ?>
        <p>Error: <?php echo e($error); ?></p>
    <?php endif; ?>

    <footer>
        <p>Si no tienes una cuenta, regístrate <a href="<?php echo e(route('login.create')); ?>">aquí</a>.</p>
    </footer>
</body>
</html><?php /**PATH C:\Users\guerr\Desktop\Laravel\htdocs\proyectoFinal\resources\views/login/index.blade.php ENDPATH**/ ?>