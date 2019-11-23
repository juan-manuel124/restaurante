<?php $__env->startSection('seccion'); ?>

        <h1>Modificar Compra</h1>

            <form action="<?php echo e(route('actualizarcompra', $compra)); ?>" method="post">
                <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
                <table class="table table-striped">
                    <tr>
                        <td><center><select name="nombreProducto" class="form-control form-control-lg" >
                            <option><?php echo e($compra->nombreProducto); ?></option>
                            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($producto->nombreProducto); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="cantidadProducto" placeholder="Cantidad" value="<?php echo e($compra->cantidadProducto); ?>"  class="form-control form-control-lg"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="varchar" name="fecha" placeholder="fecha" value="<?php echo e($compra->fecha); ?>" class="form-control form-control-lg"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="precio" placeholder="Precio" value="<?php echo e($compra->precio); ?>" class="form-control form-control-lg"></center></td>
                    </tr>
                </table>
                <div class="container">
                    <div class="col" align="center">
                        <button type="submit" class="btn btn-primary">Guardar</button><a href="<?php echo e(route('compras')); ?>" ><button type="button" class="btn btn-danger">Volver</button></a>
                    </div>
                    
                </div>
            </form>
        
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/davier/Descargas/restaurante/resources/views/modificarcompra.blade.php ENDPATH**/ ?>