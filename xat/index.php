<!DOCTYPE html>
<html lang="ca">
 <head>
 <meta charset="UTF-8" />
 <title>xateja-ho!</title>
 <link rel="stylesheet" type="text/css" href="style.css"/>
 </head>
 <body style="background-color:#00E5FF;">
 <section id="titol">
 <h1><strong>xateja-ho!</strong></h1>
 </section>
 <section id="missatges">
 <!--p><span>10:45PM - Homer: </span>Never mind.</p-->
 <!--p><span>10:44PM - Marge: </span>Well, who was it?</p-->
 <p><span>10:40PM - Homer: </span>I'll look it up.</p>
 <p><span>10:39PM - Homer: </span>Fine.</p>
 <p><span>10:39PM - Marge: </span>I really think that was the character's
name, Don Quixote.</p>
 <p><span>10:38PM - Homer: </span>No!</p>
 <p><span>10:37PM - Marge: </span>Don Quixote</p>
 <p><span>10:36PM - Homer: </span>No, that's not it. What's his name? "The
Man of La Mancha."</p>
 <p><span>10:36PM - Marge: </span>Don Quixote?</p>
 <p><span>10:34PM - Homer: </span>I'm like that guy, that Spanish guy. You
know, he fought the windmills.</p>

<?php
// Connecta amb la BD 'my_db'
include 'connexio.php';
// Executa una consulta
$sql = "select usuari,text,hora from missatges";
$result = mysqli_query($conn, $sql);
?>

// Mensajes Introducidos
<?php while ($row = mysqli_fetch_assoc($result)) {?>
<p><span><?php echo $row['hora']; ?> - <?php echo $row['usuari']; ?>: </span><?php echo $row['text']; ?></p>
<!--?php printf("%s (%s)\n", $row['usuari'], $row['text']); -->
<?php } ?>


 </section>
 <section id="formulari">

 <form method="post" action="insertar.php">
<p><input type="text" name="nombre" size="500" placeholder="el teu nom"></p>
<p><input type="text" name="mensaje" size="500" placeholder="el teu missatge"></p>
<p align="center">
    <input type="submit" value="xateja-ho">
</p>
 </form>

 </section>
 <section id="errors">
 <p>

<?php
echo 'ERRORES: <br>';

$Error = ($_GET['ERROR']);
?>

 </p>
 </section>
 </body>
</html>