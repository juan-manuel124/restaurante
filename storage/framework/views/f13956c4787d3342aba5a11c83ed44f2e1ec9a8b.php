<?php $__env->startSection('seccion'); ?>
<br><br>
        <h1>Usuarios</h1>
        <br>
        <br>
        <br>
        <br>
        <div margin-left=30px>
        <!--<center>-->  
            <table class ="table table-striped">
                <thead >
                <tr>
                    <th scope="col"> <h4><strong>Nombre</strong></h4></th>
                    <th scope="col"> <h4><strong>Correo electronico</strong></h4></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                    
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->name); ?></td>
                    <td><?php echo e($usuario->email); ?></td>
                    <?php $user = $usuario->name; ?>
                    <td><a href="<?php echo e(route('modificarusuario',$user)); ?>"> <button type="button" class="btn btn-secondary">Modificar</button></a></td>
                    <!--<td><form action="<?php echo e(route ('eliminarusuario',$user)); ?>" method="post">
                        <?php echo csrf_field(); ?>  <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Eliminar</button></td>-->
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <br>
            <br>
        </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/davier/Descargas/restaurante/resources/views/usuarios.blade.php ENDPATH**/ ?>