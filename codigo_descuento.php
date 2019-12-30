<?php
$link = mysqli_connect("104.198.247.7", "root", "DK7C54HCkQ4GXWh", "db_web");
//$link = mysqli_connect("localhost", "root", "", "db_web");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT estado,estado_web,promocion_web,fecha_inicio,fecha_fin FROM descuento where estado='Y'";
$result = mysqli_query($link, $query);

/* array asociativo */
while($fila = $result->fetch_assoc()) {
    $row[]=$fila;
}

echo json_encode($row);

/* cerrar la conexión */
mysqli_close($link);
?>