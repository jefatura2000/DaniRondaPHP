<?php
if(empty($_POST['nombre']) or empty($_POST['mensaje'])){
	
	echo 'ERROR: Información introducida vacia';

}else
{

echo "Nombre: ";
echo htmlspecialchars($_POST['nombre']);
echo "<br>";
echo "Mensaje: ";
echo htmlspecialchars($_POST['mensaje']);
echo "<br>";

date_default_timezone_set('Europe/Madrid');
$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$mensaje =mysqli_real_escape_string($conn, $_POST['mensaje']);
$hora = date("H:i:s");

include 'connexio.php';

$sql = "INSERT INTO missatges (hora, usuari, text)
VALUES ('$hora','$nombre', '$mensaje' )";

if ($conn->query($sql) === TRUE) {
    echo "Datos Guardados";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>

<p><a href="index.php" alt="ERROR">Volver a Index </a></p>