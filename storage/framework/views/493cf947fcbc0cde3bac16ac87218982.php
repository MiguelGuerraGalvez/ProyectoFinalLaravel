<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel='stylesheet' href="<?php echo e(asset('css/videojuegos/edit.css')); ?>" type='text/css'>
</head>
<body>
    <header>
        <h1>Editar un producto</h1>
    </header>
    
    <main>
        <form action="<?php echo e(route('videojuegos.update', $videojuego)); ?>" method="post">

            <?php echo csrf_field(); ?>

            <?php echo method_field('put'); ?>

            <article>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" value="<?php echo e(old('nombre', $videojuego->nombre)); ?>" placeholder="Introducir título">
            </article>
            <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <article>
                <label for="consola">Consola: </label>
                <input type="text" name="consola" id="consola" value="<?php echo e(old('consola', $videojuego->consola)); ?>" placeholder="Introducir consola">
            </article>
            <?php $__errorArgs = ['consola'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <article>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" step="0.01" value="<?php echo e(old('precio', $videojuego->precio)); ?>" placeholder="Introducir precio">
            </article>
            <?php $__errorArgs = ['precio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input class="editar" type="submit" value="EDITAR">
        </form>
    </main>
    
    <footer>
        <a class="volver" href="<?php echo e(route('videojuegos.index')); ?>">VOLVER</a>
    </footer>
</body>
</html><?php /**PATH C:\Users\guerr\Desktop\Laravel\htdocs\proyectoFinal\resources\views/videojuegos/edit.blade.php ENDPATH**/ ?>