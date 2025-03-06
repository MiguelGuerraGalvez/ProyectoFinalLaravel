<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel='stylesheet' href="<?php echo e(asset('css/videojuegos/delete.css')); ?>" type='text/css'>
</head>
<body>
    <header>
        <h1>¿Deseas eliminar el producto <?=$videojuego->nombre?>?</h1>
    </header>
    
    <main>
       <form action="<?php echo e(route('videojuegos.destroy', $videojuego)); ?>" method="post">
            
            <?php echo csrf_field(); ?>

            <?php echo method_field('delete'); ?>

            <input class="si" type="submit" value="SÍ">
        </form>
        <form action="<?php echo e(route('videojuegos.index')); ?>" method="get">
            <input class="no" type="submit" value="NO">
        </form> 
    </main>
</body>
</html><?php /**PATH C:\Users\guerr\Desktop\Laravel\htdocs\proyectoFinal\resources\views/videojuegos/delete.blade.php ENDPATH**/ ?>