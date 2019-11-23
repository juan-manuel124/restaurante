<?php $__env->startSection('seccion'); ?>

        <h1>Ingresar Compra</h1>
     
         
       
            <form action="<?php echo e(route('insertarcompra')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <table class="table table-striped">
                    <tr>
                        <td><center><select name="nombreProducto" class="form-control form-control-lg" >
                            
                            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($producto->nombreProducto); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="cantidadProducto" placeholder="Cantidad"  class="form-control form-control-lg"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="varchar" name="fecha" placeholder="fecha  ejm:2008-08-23" class="form-control form-control-lg"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="precio" placeholder="Precio" class="form-control form-control-lg"></center></td>
                    </tr>
                </table>
                <div class="container">
                    <div class="col" align="center">
                        <button type="submit" class="btn btn-primary">Guardar</button><a href="<?php echo e(route('compras')); ?>" ><button type="button" class="btn btn-danger">Volver</button></a>
                    </div>
                    
                </div>
            </form>
        
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/davier/Descargas/restaurante/resources/views/insertarcompra.blade.php ENDPATH**/ ?>