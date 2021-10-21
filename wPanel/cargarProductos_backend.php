        <?php
        require '../config_db.php';
        require '../functions.php';
        //error_reporting(0);



        $Categoria = strtolower(limpiarDatos($_POST['categoria']));
        $Producto = limpiarDatos($_POST['producto']);
        $Descripcion = limpiarDatos($_POST['descripcion']);
        $Precio = limpiarDatos($_POST['precio']);
        $Precio = filter_var($Precio, FILTER_SANITIZE_NUMBER_INT);


        $nombre = $_FILES['archivo']['name'];
        $guardar = $_FILES['archivo']['tmp_name'];
        if (!file_exists('imagenesCarta')) {
            mkdir('imagenesCarta', 0777, true);
            if (file_exists('imagenesCarta')) {
                if (move_uploaded_file($guardar, 'imagenesCarta/' . $nombre)) {
                    echo "Subido!";
                } else {
                    echo "Intenta subir tu imagen más tarde. Si no es posible, por favor reporta este problema";
                }
            }
        } else {
            if (move_uploaded_file($guardar, 'imagenesCarta/' . $nombre)) {

                header("Location:wPanel.php#productos");
            } elseif (empty($guardar && $nombre)) {
                echo "No se subió la imagen";
            } 
        }


        $insertar = "INSERT INTO `productos`(`id`, `categoria`, `producto`, `descripcion`, `precio`, `thumb`) 
        VALUES (null,'$Categoria','$Producto','$Descripcion','$Precio','$nombre')";
        $insertarProducto = mysqli_query($conexion, $insertar);

        if ($insertarProducto) {

            header('Location:wPanel.php#productos');
        } else {

            require 'soporte.php';
        }




        ?>