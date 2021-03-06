<?php $__env->startSection('seccion'); ?>
<br><br>
        <h1>Compras</h1>
        
        <div class="m-3"><a href="<?php echo e(route('crearcompra')); ?>" ><button type="button" class="btn btn-primary">Ingresar Compra</button></a></div>
        
        <div margin-left=30px>
        <!--<center>-->  
            <table class ="table table-striped">
                <thead >
                <tr>
                    <!--<td><h2>Producto</h2></td>
                    <td><h2>Valor pagado</h2></td>
                    <td><h2>fecha</h2></td>
                    <td><h2></h2></td>
                    <td><h2></h2></td>-->
                    <th scope="col"><h2>Id</h2></th>
                    <th scope="col"><h2>Producto</h2></th>
                    <th scope="col"><h2>cantidad</h2></th>
                    <th scope="col"><h2>fecha</h2></th>
                    <th scope="col"><h2>precio unidad</h2></th>
                    <th scope="col"><h2>subtotal</h2></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                $cons = $compra->cantidadProducto * $compra->precio;
                //$compr = $compra->nombreProducto;
                ?>
                
                <tr>
                    <td><?php echo e($compra->id); ?></td>
                    <td><?php echo e($compra->nombreProducto); ?></td>
                    <td><?php echo e($compra->cantidadProducto); ?></td>
                    <td><?php echo e($compra->fecha); ?></td>
                    <td><?php echo e($compra->precio); ?></td>
                    <td><?php echo e($cons); ?></td>
                    <td><a href="<?php echo e(route('modificarcompra',$compra)); ?>"><button type="button" class="btn btn-secondary">Modificar</button></a></td>
                    <td><form action="<?php echo e(route ('eliminarcompra',$compra)); ?>" method="post">
                        <?php echo csrf_field(); ?>  <?php echo method_field('DELETE'); ?>
                    <button type="button" class="btn btn-danger">Eliminar</button></td>
                    </form></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <br>
            <br>
        </div>
        <!--</center>-->

        
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto/restaurante/resources/views/compras.blade.php ENDPATH**/ ?>