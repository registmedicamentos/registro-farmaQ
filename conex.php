
<html>
    <head><title>Hospital</title>
</head>
<body>

<?php
    $anfitrion = 'localhost';
    $usuario = 'root';
    $database = 'HOSPITAL';
    $contraseña= "";
    $puerto= '3306';



    $conexion=mysqli_connect($anfitrion, $usuario,$contraseña, $database, $puerto);

    


















    if($conexion=== false){
        die("error al conectar con la base de datos");
    }
    else{echo'<script>
        alert("Error por favor ingresa los datos en el formato correcto");
        window.history.go(-1);
        </script>';
    
        exit;
    }

?>
</body>
</html>