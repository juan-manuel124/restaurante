<?php $__env->startSection('seccion'); ?>
    <br>
    <br>
    <h1>Productos</h1>
    <br>
    <br>
    <div class="m-3"><a href="<?php echo e(route('crearproducto')); ?>" ><button type="button" class="btn btn-primary">Ingresar Producto</button></a></div>
    <br>
    <br>
    <table class="table table-striped">
       
            <tr>
                <th scope="col"><h2><br>id</h2></th>
                <th scope="col"><h2>Nombre Producto</h2></th>
                <th scope="col"><h2><br>Cantidad &nbsp;</h2></th>
                <th scope="col"><h2>Precio de Costo</h2></th>
                <th scope="col"><h2>Precio de Venta</h2></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($producto->id); ?></td>
                <td><?php echo e($producto->nombreProducto); ?></td>
                <td><?php echo e($producto->cantidadProducto); ?></td>
                <td><?php echo e($producto->precioCosto); ?></td>
                <td><?php echo e($producto->precioVenta); ?></td>
                <td><a href="<?php echo e(route('modificarproducto',$producto)); ?>"><button type="button" class="btn btn-secondary">Modificar</button></a></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
       
    </table>  
   
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto/restaurante/resources/views/producto.blade.php ENDPATH**/ ?>