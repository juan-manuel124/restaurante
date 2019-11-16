<?php $__env->startSection('seccion'); ?>
    <br>
    <br>
    <br>
    <h1>Crear Producto</h1>
    <br>
    <br>
    <form action="<?php echo e(route('prodint')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <table class="table table-striped">
        <tr>
            <td><center><input type="varchar" name="nombreProducto" value="nombre del Producto"></center></td>
        </tr>
        <tr>
            <td><center><input type="double" name="cantidadProducto" value="cantidad del Producto"></center></td>
        </tr>
        <tr>
            <td><center><input type="double" name="precio" value="precio"></center></td>
        </tr>
    </table>
	<center><button type="submit" class="btn btn-primary">Guardar</button><a href="<?php echo e(route('producto')); ?>" ><button type="button" class="btn btn-danger">volver</button></a></center>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto/restaurante/resources/views/crearproducto.blade.php ENDPATH**/ ?>