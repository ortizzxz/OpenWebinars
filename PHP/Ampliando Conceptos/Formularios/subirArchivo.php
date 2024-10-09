<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form name="form1" method="post" enctype="multipart/form-data" action="subirArchivo.php">
            <p>
                <label for="archivo">Subir Archivo</label>
                <input type="file" name="imagen" id="imagen">
            </p>

            <button type="submit" name="submit" > Enviar Info </button>
        </form>
    </body>
</html>

<?php
    // var_dump($_FILES); 

    $directorio = ini_get("upload_tmp_dir");
    echo $directorio;

    // asi subimos archivos al servidor 
    $directorioTemp = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($directorioTemp, $_FILES['imagen']['name']);
?>
