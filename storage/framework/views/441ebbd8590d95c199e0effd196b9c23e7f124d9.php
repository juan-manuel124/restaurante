<?php $__env->startSection('seccion'); ?>
    <h4> <center>Facturación</center>      
        <span class="badge badge-pill badge-success">Cuentas</span>
        <span class="badge badge-pill badge-success">Facturas</span>
        <span class="badge badge-pill badge-success">Ingresos</span>
        <span class="badge badge-pill badge-success">Costos</span>
        <span class="badge badge-pill badge-success">Imprimir</span>
    </h4>
    <h5>
        <div class="row">
          <div class="col">Nombre<input type="text" class="form-control" placeholder="Campo de texto1"></div>
          <div class="col">Apellido<input type="text" class="form-control" placeholder="Campo de texto2"></div>
          <div class="w-100"></div>
          <div class="col">Diereción<input type="text" class="form-control" placeholder="Campo de texto3"></div>
          <div class="col">Correo<input type="text" class="form-control" placeholder="Campo de texto4"></div>
        </div>
    </h5>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurante/resources/views/facturacion.blade.php ENDPATH**/ ?>