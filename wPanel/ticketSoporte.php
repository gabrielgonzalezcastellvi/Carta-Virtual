<?php
require 'header-wpanel.php';
require '../config_db.php';
session_start();
?>
<section class="soporte">
    <div class="container">
        <?php require 'encabezadoPanel.php'; ?>
    </div>
    <div class="container">
        <h3>TICKET DE SOPORTE</h3>
    </div>
    <div class="container">
<<<<<<< HEAD
<?php
$consulta = "SELECT * FROM datosempresa WHERE id = '7'";
$result = mysqli_query($conexion,$consulta) or die(mysqli_connect($conexion));
while($rows = $result -> fetch_assoc()){

    $_SESSION['NombreEmpresa'] = $rows['nombreempresa'];
?>
        <form id="SoporteForm" class="login-input" action="ticketSoporte_backend.php" method="POST">
            <fieldset disabled>
                <div class="mb-3">
                    <input type="text" class="form-control" name="" value="<?php echo $rows['nombreempresa']?>">
                </div>
            </fieldset>
            <div class="mb-3">
                <label for="txtSoporte" class="form-label">Comentanos el problema:</label>
                <textarea class="form-control" id="txtSoporte" rows="3" name="mensaje" required></textarea>
            </div>

            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <input class="btn btn-lila" type="submit" value="Reportar">
                <a href="javascript:history.go(-1)" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
            </div>
        </form>
        <?php } ?>
=======
        <?php
        $consulta = "SELECT * FROM datosempresa WHERE id = '7'";
        $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
        while ($rows = $result->fetch_assoc()) {
            $_SESSION['NombreEmpresa'] = $rows['nombreempresa'];
            ?>
                    <form id="SoporteForm" class="login-input" action="ticketSoporte_backend.php" method="POST">
                        <fieldset disabled>
                          <div class="mb-3">
                                <input type="text" class="form-control" name="" value="<?php echo $rows['nombreempresa']?>">
                            </div> 
                        </fieldset>
                        <div class="mb-3">
                            <label for="txtSoporte" class="form-label">Comentanos el problema:</label>
                            <textarea class="form-control" id="txtSoporte" rows="3" name="mensaje" required></textarea>
                        </div>
            
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <input class="btn btn-lila" type="submit" value="Reportar">
                            <a href="javascript:history.go(-1)" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
                        </div>
                    </form>
                    <?php } ?>
>>>>>>> 85b8e205d1cf1b14ff3af80dadcdb996eacab5f1
    </div>


</section>