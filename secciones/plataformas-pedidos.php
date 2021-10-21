<section id="plataformasPedidos">
    
<div class="container alignCenter">
    <p>Disfrutá nuestro menú desde casa...</p>
<div class="row">
    <!--el cliente a traves de select mrca los servicios que tiene disponibles y en funcion de ello, se cargan las imágenes
que correspondan.
¿será posible q l cliente cargue el link de su restaurant de la plataforma? así, ya dejamos el href linkeado-->
<?php
$consulta = "SELECT pedidosya, rappi, glovo, deliverypersonal,telefonobar FROM datosempresa";

$result = mysqli_query($conexion,$consulta) or die(mysqli_connect($connect));

while($rows = $result -> fetch_assoc()){
   if($rows['pedidosya'] == '1'){
    print('<div class="col">
    <a href = "https://www.pedidosya.com/">
    <img class="grayscale boxShadow imgRedondeada imgThumbPanel" src="./imagenes/plataforma_pedidosYa.jpg" alt="...">
</a>
</div>'); 
        }
                        if($rows['rappi'] == '1'){
                    print('<div class="col">
                    <a href = "https://www.rappi.com.ar/">
                    <img class="grayscale boxShadow imgRedondeada imgThumbPanel" src="./imagenes/plataforma_rappi.jpg" alt="...">
            </a>
                </div>');
                        }
                        if($rows['glovo'] == '1'){
                       print('<div class="col">
                       <a href = "https://glovoapp.com/">
                       <img class="grayscale boxShadow imgRedondeada imgThumbPanel" src="./imagenes/plataforma_glovo.jpg " alt="...">
               </a>
                   </div>');
                        }
                        if($rows['deliverypersonal'] == '1'){
                         echo '<div class="col">
                         <a href="https://api.whatsapp.com/send?phone=+549'.$rows['telefonobar'].'&text='.'Hola! Quisiera realizar una reserva">
                         <img class="grayscale boxShadow imgRedondeada imgThumbPanel" src="./imagenes/plataforma_deliveryPropio.jpg">
                         </a>
                     </div>';
                    }
                    }?>
   
</div>
</div>    
</section>