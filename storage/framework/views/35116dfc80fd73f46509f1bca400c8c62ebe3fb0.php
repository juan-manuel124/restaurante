<?php $__env->startSection('seccion'); ?>
<link href="<?php echo e(asset('css/example.css')); ?>" rel="stylesheet"> 
<script src="<?php echo e(asset('js/example.js')); ?>"></script>


<style>

.title {
    font-size: 84px;
}

.m-b-md {
    margin-bottom: 30px;
}

</style>

    <h4> <div class="title m-b-md">
                  <center>Mesa</center>
         </div>    
        <!--<span class="badge badge-pill badge-success">Cuentas</span>
        <span class="badge badge-pill badge-success">Facturas</span>
        <span class="badge badge-pill badge-success">Promocion</span>
        <span class="badge badge-pill badge-success">Platos</span>
        <span class="badge badge-pill badge-success">Imprimir</span>-->
    </h4>
    <h5>
        <div class="row">
          <!--<div class="col">Nombre<input type="text" class="form-control" placeholder="Campo de texto1"></div>
          <div class="col">Apellido<input type="text" class="form-control" placeholder="Campo de texto2"></div>
          <div class="w-100"></div>
          <div class="col">Dirección<input type="text" class="form-control" placeholder="Campo de texto3"></div>
          <div class="col">Correo<input type="text" class="form-control" placeholder="Campo de texto4"></div>-->
          <table class ="table table-striped">

		<tr>
			<td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
		</tr>
		<tr>
            <td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			
		</tr>
		<tr>
        <td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
		</tr>
		<tr>
        <td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                 <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
			<td>
                <center><button type="button" name="mesa1" class="btn btn-secondary">Mesa1</button></center>
			</td>
   		</tr>
        </table>
        </div>
    </h5>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto/restaurante/resources/views/mesa.blade.php ENDPATH**/ ?>