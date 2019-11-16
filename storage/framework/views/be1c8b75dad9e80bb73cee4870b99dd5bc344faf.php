<?php $__env->startSection('seccion'); ?>
    <br>
    <br>
    <h1>Productos</h1>
    <br>
    <br>
    <table class="table table-striped">
       
            <tr>
                <th scope="col"><h2>Nombre Producto</h2></th>
                <th scope="col"><h2>Cantidad</h2></th>
            </tr>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($producto->nombreProducto); ?></td>
                <td><input type="int" name="cantidad" placeholder="<?php echo e($producto->cantidadProducto); ?>"></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
       
    </table>  
    <div class="container">
        <div class="coll" align="right">
        <button type="button" class="btn btn-secondary">Guardar</button> <a href="<?php echo e(route('crearproducto')); ?>" ><button type="button" class="btn btn-primary">Crear</button></a>
        </div>
        

    </div>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurante/resources/views/producto.blade.php ENDPATH**/ ?>