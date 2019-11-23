<?php $__env->startSection('seccion'); ?>
    <h1>modificar usuario</h1>
    <br>
    &nbsp;
    <br>
    &nbsp;
    <br>
    <form action="<?php echo e(route('actualizarusuario',$usuario)); ?>" method="post">
                <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
                <table class="table table-striped">
                    <tr><h3>Solo puedes cambiar los nombres y los correos electronicos</h3></tr>
                    <tr>
                        <td><center><input type="varchar" name="name" class="form-control form-control-lg" value="<?php echo e($usuario->name); ?>"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="email" name="email" class="form-control form-control-lg" value="<?php echo e($usuario->email); ?>"></center></td>
                    </tr>
                    <tr>
                       <!--<td><center><input type="varchar" name="name" class="form-control form-control-lg" value="<?php echo e($usuario->password); ?>"></center></td>-->
                    </tr>
                </table>
                <div class="container">
                    <div class="col" align="center">
                        <button type="submit" class="btn btn-primary">Guardar</button><a href="<?php echo e(route('usuarios')); ?>" ><button type="button" class="btn btn-danger">Volver</button></a>
                    </div>
                    
                </div>
            </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto/restaurante/resources/views/modificarusuario.blade.php ENDPATH**/ ?>