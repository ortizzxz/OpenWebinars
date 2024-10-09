<html>
    <head>
        <meta charset="UTF-8">
        <title>Ficheros</title>
    </head>
    <body>
        <?php
            // fopen() -> para abrir ficheros

            /*
                Los modos de apertura funcionan como los permisos de windows
                r -> read r+ -> read and write
                w-> write w+ -> write and read
                x, a... 
            */  

            $miArchivo = fopen("archivo1.txt", "r+");

            if(!$miArchivo){
                echo "Error al abrir el archivo";
            }

            // $miArchivoDos = fopen("archivo2.txt", "w"); // -> borra el contenido de un fichero ATENCION

            // $miArchivoTres = fopen("archivo3.txt", "w"); // si no exista lo crea

            // fread() -> para leer ficheros
            
            // fgetc() -> obtiene un solo caracter 
            // fgets() -> obtiene una linea entera (un string)
            // feof() -> comprueba si el puntero del archivo está al final
            
            
            // while (!feof($miArchivo)) {
                // echo fgetc($miArchivo);
            // }


            // g_get_contents() -> me convierte el fichero a un string 

            // $todo = file_get_contents("archivo1.txt");
            // echo $todo;

            $arrayArchivo = file("archivo1.txt");

            var_dump($arrayArchivo);

        ?>
    </body>
</html>