<?php require 'config_db.php'?>


<section id="OpPago">
  <?php
$consulta = "SELECT formaspagoefectivo,formaspagocredito,formaspagodebito,formaspagomepa FROM datosempresa";

$result = mysqli_query($conexion,$consulta) or die(mysqli_connect($connect));

while($rows = $result -> fetch_assoc()){
    ?>
    <div class="container alignCenter">
      <h4><i class="bi bi-credit-card-fill"></i> Opciones de pago</h4>
      <?php 
      
          
          if($rows['formaspagoefectivo'] == '1'){
            echo $Efectivo = " Efectivo / ";
           }
           if($rows['formaspagodebito'] == '1'){
            echo $Debito = " Debito / ";
           }
       
           if($rows['formaspagocredito'] == '1'){
             echo $Credito = " Credito / ";
           }
       
           if($rows['formaspagomepa'] == '1'){
             echo $MercadoPago = " Mercado Pago ";
           }   
      ?>
       <!--Traer info suministrada por el cliente, desde la DB-->
        <?php
        }
        ?>
    </div>
</section>