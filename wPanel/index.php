<?php

require 'header-wpanel.php';

?>
<!--


los archivos de la carpeta /wpanel NO DEBERIAN RASTREARSE POR GOOGLE: https://developers.google.com/search/docs/advanced/robots/create-robots-txt?hl=es

-->
<section id="wPanelcontainer" class="">
    <div class="container alignCenter">
    <h1>wPanel</h1>
    </div>
    <div class="container contenedorgris alignLeft">
        <h4>Iniciar sesión</h4>
        <div class="formularioLogin alingLeft">
            <form id="LoginForm" class="login-input" action="indexLogin.php" method="POST" name="login">
                <div class="mb-3">
                <label for="idCliente" class="form-label">Ingresá tu mail o celular</label>    
<<<<<<< HEAD
                <input id="idCliente" class="form-control" type="text" name="IDusuario" placeholder="ID de cliente" required>
=======
                <input id="idCliente" class="form-control" type="text" name="IDusuario" placeholder="Mail o Celular" required>
>>>>>>> 85b8e205d1cf1b14ff3af80dadcdb996eacab5f1
                </div>
                <div class="mb-3">
                <label for="show-pass" class="form-label">Contraseña: <a href="recuperarContraseña.php">(Olvidé la contraseña)</a></label>  
                    <input class="form-control" id="show-pass" type="password" name="password" placeholder="Contraseña" min = "8" max="15" required>

                    <div class="checkbox">
                        <input class="form-check-input" type="checkbox" value="Mostrar Contraseña" onclick="showPass()"> Mostrar contraseña
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Ingresar</button>
            </form>
        </div>
    </div>



</section>


<?php

require '../footer.php';

?>