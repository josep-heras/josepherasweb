<?php

//DOCUMENT CONEXIO BdD
include_once "../conexio/Conexio.inc.php";

echo "<a href='../contacte.php' class='btn btn-success'>Tornar</a>";
echo '<br><br>';

//Inserim les dades recollides del formulari
$nom = $_POST['nom'];
$poblacio = $_POST['poblacio'];
$ecorreu = $_POST['ecorreu'];

$consulta = "insert into usuaris (nom, poblacio, ecorreu, activo) values ('$nom', $poblacio, '$ecorreu', '1')";

//Executem la inserció
if ($resultado = mysqli_query($conexio, $consulta)   )
{
    echo "<center>Usuari inserit correctament</center";
}
else
{
    echo "<center>Error en l'inserció</center>";
}

?>