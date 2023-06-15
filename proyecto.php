
<?php
include "conex.php";
$nombre= $_POST["nombre"];
$proveedor= $_POST["proveedor"];
$unidades= $_POST["unidades"];
$precio= $_POST["precio"];
$telefono= $_POST["telefono"];


$insertar="INSERT INTO medicamento(nombre,proveedor,unidades,precio,telefono) VALUES('$nombre', '$proveedor', '$unidades', '$precio', '$telefono')";


$verificar_usuario=mysqli_query($conexion, "SELECT * FROM medicamento WHERE nombre='$nombre' ");
if(mysqli_num_rows($verificar_usuario)>0){
    echo'<script>
    alert("Error los datos estan duplicados");
    window.history.go(-1);
    </script>';

    exit;
}

$resultado=mysqli_query($conexion,$insertar);
if(! $resultado){
    echo("Error los datos estan duplicados");}

    ?>