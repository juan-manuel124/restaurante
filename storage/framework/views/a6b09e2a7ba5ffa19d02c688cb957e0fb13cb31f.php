<?php $__env->startSection('seccion'); ?>
<link href="<?php echo e(asset('css/example.css')); ?>" rel="stylesheet"> 
<script src="<?php echo e(asset('js/example.js')); ?>"></script>


<style type="text/css">
  .infoMesas .card-body{
    padding: 10px !important;
    text-align: center;
  }
  .mesasList .card-body{
    cursor: pointer;
  }
  .mesasList .card-body a{
    text-decoration: none;
    color: #fff;
  }

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
        



    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Descargar Reporte</a>
    </div>

    <?php echo $__env->make('partials/informe-ventas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 offset-md-1 text-center" style="border-right: 1px solid">

          <!-- Project Card Example -->
          <!-- Color System -->
          <div class="row mesasList">
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  <a href="/mesa/1">Mesa 1</a>     
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  <a href="/mesa/2">Mesa 2</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  <a href="/mesa/3">Mesa 3</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                 <a href="/mesa/4">Mesa 4</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  <a href="/mesa/5">Mesa 5</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa 6
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  <a href="/mesa/7">Mesa 7</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa 8
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa 9
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  <a href="/mesa/10">Mesa 10</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Mesa 11
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  <a href="/mesa/10">Mesa 10</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa 13
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa 14
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Mesa 15
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  <a href="/mesa/16">Mesa 16</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Mesa 17
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa 18
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-5 infoMesas">
          <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa Disponible
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Mesa Ocupada
                </div>
              </div>
            </div>
            <div></div>
            <p>Presione la mesa deseada para ver sus pedidos</p>
        </div>

    </div>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurante/resources/views/mesa.blade.php ENDPATH**/ ?>