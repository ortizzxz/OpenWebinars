<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form name="form1" method="post" enctype="multipart/form-data" action="subirArchivoII.php">
            <p>
                <label for="archivo">Subir Archivo</label>
                <input type="file" name="imagen" id="imagen">
            </p>

            <button type="submit" name="submit" id="submit" > Enviar Info </button>
        </form>
    </body>
</html>

<?php
    $directorioSubidas = "uploads/";
    $max_file_size = "51200";
    $validExtensions= ["jpg", "png", "gif"];

    if(isset($_POST['submit']) && isset($_FILES['imagen'])){
        
        // simulacion de 0 errores
        $errores = 0;

        $nombreArchivo = $_FILES['imagen']['name'];
        $fileSize = $_FILES['imagen']['size'];
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        $extensionArchivo = $arrayArchivo['extension'];

        if(!in_array($extensionArchivo, $validExtensions)){
            echo "Extensión no válida";
            $errores++;
        }

        if($fileSize > $max_file_size){
            echo "La imagen supera el tamaño permitido";
            $errores++;
        }

        if($errores == 0){
            $nombreCompleto = $directorioSubidas . $nombreArchivo;
            move_uploaded_file($directorioTemp, $nombreCompleto);
            echo "Fichero subido correctamente"; 
        }

        // var_dump($arrayArchivo); -> devuelve la extension 
    }
?>
