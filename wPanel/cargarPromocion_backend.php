        <?php
        require '../config_db.php';
        require '../functions.php';
        //error_reporting(0);

        $promocion = limpiarDatos($_POST['promo']);
        $descripcionPromo = limpiarDatos($_POST['descripcion']);
        $precioPromo = limpiarDatos($_POST['precio']);
        $precioPromo = filter_var($precioPromo, FILTER_SANITIZE_NUMBER_INT);
        
        //$nombreImg = $_FILES['archivo']['name'];
        //$tempImg = $_FILES['archivo']['tmp_name'];   
        //$img_subida = '../imagenesCarta/'. $nombreImg; 
        // Subimos el archivo. fx(nombre archivo, destino) 
        //move_uploaded_file($tempImg, $img_subida);
        

        
        $insertar = "INSERT INTO `promociones`(`id`, `promo`, `descripcion`, `precio`) 
        VALUES (null,'$promocion','$descripcionPromo','$precioPromo')";
        $insertarPromo = mysqli_query($conexion, $insertar);

        if ($insertarPromo) {

            header('Location:wPanel.php#promociones');
        } else {
            echo "<script>alert('No pudimos cargar la promo, por favor, informanos sobre este error o inténtalo nuevamente'); window.location.href='ticketSoporte.php';</script>";
        }




        ?>