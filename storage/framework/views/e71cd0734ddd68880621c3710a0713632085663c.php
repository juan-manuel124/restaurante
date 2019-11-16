<?php $__env->startSection('seccion'); ?>

        <h1>Ingresar Compras</h1>
     
         
        <table class="table table-striped">
                <thead >
                <tr>
                    <!--<td><h2>Producto</h2></td>
                    <td><h2>Cantidad</h2></td>
                    <td><h2>Precio Unidad</h2></td>
                    <td><h2>Subtotal</h2></td>-->
                    <th scope="col"><h2>Producto</h2></th>
                    <th scope="col"><h2>Cantidad</h2></th>
                    <th scope="col"><h2>Precio Unidad</h2></th>
                    <th scope="col"><h2>Subtotal</h2></th>
                </tr>
                <tr>
                    <td><input type="text" name="producto"></td>
                    <td><input type="int" name="cantidad"></td>
                    <td><input type="int" name="precio"></td>
                    <td><input type="varchar" name="subtotal" value="cantidad * precio"></td>
                </tr>
                <tr>
                    <td><input type="text" name="producto"></td>
                    <td><input type="int" name="cantidad"></td>
                    <td><input type="int" name="precio"></td>
                    <td><input type="varchar" name="subtotal" value="cantidad * precio"></td>
                </tr>
                <tr>
                    <td><input type="text" name="producto"></td>
                    <td><input type="int" name="cantidad"></td>
                    <td><input type="int" name="precio"></td>
                    <td><input type="varchar" name="subtotal" value="cantidad * precio"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-secondary">Aderir Producto</button></td>
                </tr>
            </table>

            
            <div class="container">
                <div class="col" align="center">
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
                <div class="col" align="right">
                    <button type="button" class="btn btn-danger">Volver</button>
                </div>
            </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurante/resources/views/insertarcompra.blade.php ENDPATH**/ ?>