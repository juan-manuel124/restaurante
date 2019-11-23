<?php $__env->startSection('seccion'); ?>
    
    <br>
    <br>
    <br>
    <h1>Modificar Producto</h1>
    <br>
    <br>
    <form action="<?php echo e(route('actualizarproducto', $producto)); ?>" method="post">
    <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
    <table class="table table-striped">
        <tr>
            <td><center><input type="varchar" name="nombreProducto" placeholder="Nombre del Producto" value="<?php echo e($producto->nombreProducto); ?>"  class="form-control form-control-lg"></center></td>
        </tr>
        <tr>
            <td><center><input type="double" name="precioVenta" placeholder="Precio de Venta" value="<?php echo e($producto->precioVenta); ?>" class="form-control form-control-lg"></center></td>
        </tr>
    </table>
    <center><button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?php echo e(route('producto')); ?>" ><button type="button" class="btn btn-danger">volver</button></a></center>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\restaurante\resources\views/modificarproducto.blade.php ENDPATH**/ ?>