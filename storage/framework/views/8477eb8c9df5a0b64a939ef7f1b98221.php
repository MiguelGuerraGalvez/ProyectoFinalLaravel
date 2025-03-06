<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo</title>
    <link rel='stylesheet' href="<?php echo e(asset('css/videojuegos/create.css')); ?>" type='text/css'>
</head>
<body>
    <header>
        <h1>Crear nuevo producto</h1>
    </header>
    
    <main>
        <form action="<?php echo e(route('videojuegos.store')); ?>" method="post">

            <?php echo csrf_field(); ?>

            <article>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" value="<?php echo e(old('nombre')); ?>" placeholder="Introducir título">
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
                <input type="text" name="consola" id="consola" value="<?php echo e(old('consola')); ?>" placeholder="Introducir consola">
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
                <label for="precio">Precio: </label>
                <input type="number" name="precio" id="precio" value="<?php echo e(old('precio')); ?>" step="0.01" placeholder="Introducir precio">
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

            <input class="crear" type="submit" value="CREAR">
        </form>
    </main>
    
    <footer>
        <a class="volver" href="<?php echo e(route('videojuegos.index')); ?>">VOLVER</a>
    </footer>
</body>
</html><?php /**PATH C:\Users\guerr\Desktop\Laravel\htdocs\proyectoFinal\resources\views/videojuegos/create.blade.php ENDPATH**/ ?>