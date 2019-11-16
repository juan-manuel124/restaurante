<?php $__env->startSection('seccion'); ?>
    <br><br>
        <h1>Usuarios</h1>
        <br>
        <br><br>
        <br>

        <div margin-left=30px>
        <!--<center>-->  
            <table class ="table table-striped">
                <tr>
                    <td><center><input type="varchar" name="nombre" value="Nombre Usuario"></center></td>
                </tr>
                <tr>
                    <td><center><input type="varchar" name="contraseña" value="Contraseña"></center></td>
                </tr>  
                    
                
            </table>

            <br>
            <br>
        </div>
        <center><button type="button" class="btn btn-danger">Volver</button><button type="button" class="btn btn-primary">Guardar</button></center>
<?php $__env->stopSection(); ?>
       

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto/restaurante/resources/views/insertarusuario.blade.php ENDPATH**/ ?>