<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel='stylesheet' href="<?php echo e(asset('css/login/registro.css')); ?>" type='text/css'>
</head>
<body>
<header>
        <h1>REGISTRO</h1>
    </header>

    <main>
        <form action="<?php echo e(route('login.store')); ?>" method="post">

            <?php echo csrf_field(); ?>

            <article>
                <label for="nombre">Usuario: </label>
                <input type="text" name="nombre" id="nombre" placeholder="Introducir usuario" required>
            </article>

            <article>
                <label for="correo">Correo: </label>
                <input type="email" name="correo" id="correo" placeholder="Introducir correo" required>
            </article>

            <article>
                <label for="password">Contraseña: </label>
                <input type="password" name="password" id="password" placeholder="Introducir contraseña" required>
            </article>

            <article>
                <label for="password2">Repite la contraseña: </label>
                <input type="password" name="password2" id="password2" placeholder="Repetir contraseña" required>
            </article>
            
            <input class="registrar" type="submit" value="REGISTRAR">
        </form>
    </main>

    <?php if(isset($error)): ?>
        <p>Error: <?php echo e($error); ?></p>
    <?php endif; ?>

    <footer>
        <p>Si ya tienes una cuenta, inicia sesión <a href="<?php echo e(route('login.index')); ?>">aquí</a>.</p>
    </footer>
</body>
</html><?php /**PATH C:\Users\guerr\Desktop\Laravel\htdocs\proyectoFinal\resources\views/login/create.blade.php ENDPATH**/ ?>