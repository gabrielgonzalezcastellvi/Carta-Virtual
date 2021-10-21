<?php

require 'header-wpanel.php';
error_reporting(0);

?>
<!--


los archivos de la carpeta /wpanel NO DEBERIAN RASTREARSE POR GOOGLE: https://developers.google.com/search/docs/advanced/robots/create-robots-txt?hl=es

-->
<section id="wPanelcontainer" class="">
    <div class="container alignCenter">
    <h1>wPanel</h1>
    </div>
    <div class="container contenedorgris alignLeft">
        <h4>recuperar cuenta</h4>
        <div class="formularioLogin alingLeft">
            <form id="LoginForm" class="login-input" action="recuperarContraseña_backend.php" method="POST" name="login" >
                <div class="mb-3">
                <label for="idCliente" class="form-label">Ingrese su E-mail o Celular</label>    
                <input id="idCliente" class="form-control" type="text" name="datos" placeholder="E-mail o Celular" required>
                </div>
                <div class="mb-3">
                <label for="show-pass" class="form-label">Contraseña Nueva</label>  
                    <input class="form-control" id="show-pass" id = "Validar" type="password" name="password" placeholder="Contraseña Nueva" min = "8" max="15"  required>
                    <div class="checkbox">
                        <input class="form-check-input" type="checkbox" value="Mostrar Contraseña" onclick="showPass()"> Mostrar contraseña 
                    </div>
                   <?php echo "La contraseña debe contener más de 8 caracteres";?> 
                </div>
                <button type="submit" class="btn btn-warning">Recuperar</button>
            </form>
        </div>
    </div>

</section>


<?php

require '../footer.php';

?>