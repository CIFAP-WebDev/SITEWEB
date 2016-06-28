<?php
// On crée notre array $prenoms
$prenoms = array ("François", "Michel", "Nicole", "Véronique", "Benoît");

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
	echo $prenoms[$numero]; // affichera $prenoms[0], $prenoms[1] etc...
	echo "<br />"; // pour aller à la ligne
}
?>