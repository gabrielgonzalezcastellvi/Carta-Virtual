<div class="col-sm-6">
    <div class="contenedorgris alingLeft">
        <h5>Datos de cliente</h5>
        <?php

        $ID = $_SESSION['ID'];
        $consulta = "SELECT * FROM usuario WHERE id = '$ID'";
        $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
        while ($rows = $result->fetch_assoc()) { ?>
            <ul class="ocultarVineta">
                <li><i class="bi bi-person-circle"> </i><?php echo $rows['nombre'] . ' ' . $rows['apellido'] ?></li>
                <li><i class="bi bi-envelope"> </i><?php echo $rows['email'] ?></li>
                <li><i class="bi bi-whatsapp"> </i><?php echo $rows['celular'] ?></li>
                <li><i class="bi bi-key-fill"> </i><input type="password" id="show-pass" value='<?php echo $Password ?>' disabled>
                    <div class="checkbox">
                        <input class="form-check-input" type="checkbox" value="Mostrar Contraseña" onclick="showPass()"> Mostrar contraseña
                    </div>
            </ul>
        <?php } ?>
        <a href="editarUsuario.php" class="btn btn-lila"><i class="bi bi-pencil-square"></i> Editar perfil</a>
    </div>
</div>