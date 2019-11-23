<?php $__env->startSection('seccion'); ?>

  <h1>Cocina</h1>
  
  <table class ="table table-striped">

    <thead >
        <tr>
            <th scope="col"><h2>Mesa</h2></th>
            <th scope="col"><h2>Descripcion del pedido</h2></th>
            <th scope="col"><h2>Estado del pedido</h2></th>  
            <th scope="col"><h2></h2></th>    
        </tr>
    </thead>

  
    <tbody>
      <tr>
          <th scope="col"><h2>1</h2></th>
          <td>medio pollo, 2 gaseosas manzana 350</td>
          <td>pendiente</td>
          <td><button type="button" class="btn btn-primary">listo</button></td>
      </tr>
      <tr>
          <th scope="col"><h2>5</h2></th>
          <td>1 muslo, hit mora</td>
          <td>listo</td>
          <td>listo</td>
      </tr>
      <tr>
          <th scope="col"><h2>3</h2></th>
          <td>2 pollos enteros, 1 gaseosa manzana 3lt, 1 cocacola2lt</td>
          <td>pendiente</td>
          <td><button type="button" class="btn btn-primary">listo</button></td>
      </tr>
      <tr>
          <th scope="col"><h2>8</h2></th>
          <td>1 pollo entero, 1 ocacola 2lt</td>
          <td>pendiente</td>
          <td><button type="button" class="btn btn-primary">listo</button></td> 
      </tr>
      <div>
          <tr>
            <th scope="col"><h2>12</h2></th>
            <td>medio pollo, 2 hit lulo</td>
            <td>pendiente</td>
            <td><button type="button" class="btn btn-primary">listo</button></td> 
          </tr> 
      </div>
      </tbody>

     



  </table>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        
       

       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\restaurante\resources\views/cocina.blade.php ENDPATH**/ ?>