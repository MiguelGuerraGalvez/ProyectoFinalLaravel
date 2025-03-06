<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel='stylesheet' href="<?php echo e(asset('css/videojuegos/index.css')); ?>" type='text/css'>
</head>
<body>
    <header>
        <h1>Catálogo de videojuegos</h1>
    </header>

    <div>
        <a class="crear" href="<?php echo e(route('videojuegos.create')); ?>">Crear Nuevo</a>
    </div>

    <main>

        <table border="0">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CONSOLA</th>
                <th>PRECIO</th>
                <th colspan="3">ACCIONES</th>
            </tr>
                <?php $__currentLoopData = $videojuegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videojuego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?=$videojuego->id?></td>
                        <td><?=$videojuego->nombre?></td>
                        <td><?=$videojuego->consola?></td>
                        <td><?=$videojuego->precio?></td>
                        <td>
                            <a class="editar" href="<?php echo e(route('videojuegos.edit', $videojuego)); ?>">EDITAR</a>
                        </td>
                        <td>
                            <a class="eliminar" href="<?php echo e(route('videojuegos.delete', $videojuego)); ?>">ELIMINAR</a>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="submit" value="">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <?php echo e($videojuegos->links()); ?>


        <div class="divCerrar">
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>

                <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['class' => 'cerrar','href' => route('logout'),'onclick' => 'event.preventDefault();
                                    this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cerrar','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                    this.closest(\'form\').submit();']); ?>
                    <?php echo e(__('CERRAR SESIÓN')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
            </form>
        </div>
        
    </main>
</body>
</html><?php /**PATH C:\Users\guerr\Desktop\Laravel\htdocs\proyectoFinal\resources\views/videojuegos/index.blade.php ENDPATH**/ ?>